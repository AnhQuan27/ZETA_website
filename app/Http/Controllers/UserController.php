<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    protected function rename($name)
    {
        $nameWithoutAccent = $this->removeAccent($name);

        $renamed = Str::lower(preg_replace('/[^A-Za-z0-9]/', '_', $nameWithoutAccent));
        return $renamed;
    }

    protected function removeAccent($str)
    {
        if(!$str) return false;
        $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }

    public function index() {
        $users = DB::table('users as u')
            ->join('roles as r', 'u.role_id', '=', 'r.id')
            ->select('r.name as role_name', 'u.*')
            ->get();
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    public function add() {
        return view('admin.user.add');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|min:2|max:255',
            'address' => 'required',
            'phone' => 'required|string|between:10,13',
            'birthday' => 'required|date',
            'password' => 'required|string|min:6',
            'avatar' =>  'mimes:jpg,jpeg,png',
        ]);


        $data = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'gender' => $request->gender,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birthday' => $validated['birthday'],
            'address' => $validated['address'],
            'position' => $request['position'],
            'role_id' => $request['role_id'],
            'created_at' => Carbon::now(),
        ];

        // dd($data);

        $user = User::create($data);
        $user_id = $user->id;

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name = $this->rename($validated['name']);
            $image_ext = strtolower($avatar->getClientOriginalExtension());
            $image_name = "{$name}_{$user_id}.{$image_ext}";
            $up_location = 'image/user/';
            $last_image = $up_location . $image_name;
    
            $avatar->move($up_location, $image_name);
    
            $new_image_name = "{$name}_{$user_id}.{$image_ext}";
            rename($up_location . $image_name, $up_location . $new_image_name);
            $user->avatar = $up_location . $new_image_name;
            $user->save();
        }

        $notification = [
            'alert-type' => 'success',
            'message' => 'User created successfully'
        ];
        // dd($data);

        return redirect()->route('all.user')->with($notification);
    }

    public function edit($id) {
        $user = DB::table('users as u')
            ->join('roles as r', 'u.role_id', '=', 'r.id')
            ->select('r.name as role_name', 'u.*')
            ->where('u.id', $id)
            ->first();

        $roles = DB::table('roles')
            ->get();

        return view('admin.user.detail', compact('user', 'roles'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|between:10,13',
            'birthday' => 'required|date',
            'avatar' =>  'mimes:jpg,jpeg,png',
        ]);

        $user = DB::table('users as u')
        ->join('roles as r', 'u.role_id', '=', 'r.id')
        ->select('r.name as role_name', 'u.*')
        ->where('u.id', $id)
        ->first();


        $data = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'gender' => $request->gender,
            'birthday' => $validated['birthday'],
            'address' => $validated['address'],
            'position' => $request['position']
        ];

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                unlink($user->avatar);
            }
            $avatar = $request->file('avatar');
            $name = $this->rename($validated['name']);
            $user_id = $user->id;
            $image_ext = strtolower($avatar->getClientOriginalExtension());
            $image_name = "{$name}_{$user_id}.{$image_ext}";
            $up_location = 'image/user/';
            $last_image = $up_location . $image_name;
    
            $avatar->move($up_location, $image_name);
    
            $data['avatar'] = $last_image;
        }

        DB::table('users')->where('id',$user->id)->update($data);

        $notification = [
            'alert-type' => 'success',
            'message' => 'User updated successfully'
        ];

        return redirect()->back()->with($notification);
    }

    public function delete($id) {
        $user = DB::table('users as u')
            ->join('roles as r', 'u.role_id', '=', 'r.id')
            ->select('r.name as role_name', 'u.*')
            ->where('u.id', $id)
            ->first();

        DB::table('users')->where('id',$id)->delete();
        
        if ($user->avatar) {
            unlink($user->avatar);
        }

        $notification = [
            'alert-type' => 'success',
            'message' => 'User deleted successfully'
        ];
 
        return redirect()->back()->with($notification);
    }
}
