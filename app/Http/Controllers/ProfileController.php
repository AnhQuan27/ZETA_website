<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
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
    public function index()
    {
        return view('profile.show');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|min:2|max:255',
            'phone' => 'string|between:10,13',
            'birthday' => 'date',
            'address' => 'string',
            'avatar' =>  'mimes:jpg,jpeg,png',
        ]);

        $data = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'gender' => $request->gender,
            'birthday' => $validated['birthday'],
            'address' => $validated['address'],
        ];

        if ($request->hasFile('avatar')) {
            if (Auth::user()->avatar) {
                unlink(Auth::user()->avatar);
            }
            $avatar = $request->file('avatar');
            $name = $this->rename($validated['name']);
            $user_id = Auth::user()->id;
            $image_ext = strtolower($avatar->getClientOriginalExtension());
            $image_name = "{$name}_{$user_id}.{$image_ext}";
            $up_location = 'image/user/';
            $last_image = $up_location . $image_name;
    
            $avatar->move($up_location, $image_name);
    
            $data['avatar'] = $last_image;
        }
        
        // dd($data);

        DB::table('users')->where('id', Auth::user()->id)->update($data);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Cập nhật hồ sơ thành công'
        ];

        return redirect()->back()->with($notification);
    }
}
