<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class AuthController extends Controller
{
    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $notification = [
                'alert-type' => 'success',
                'message' => 'Đăng nhập thành công',
            ];
            return redirect()->intended()->with($notification);
        } else {
            $errorMessage = 'Email hoặc mật khẩu không chính xác';
            if (!User::where('email', $request->email)->exists()) {
                $errorMessage = 'Email không tồn tại';
            } elseif (!User::where('email', $request->email)->where('password', Hash::make($request->password))->exists()) {
                $errorMessage = 'Mật khẩu không chính xác';
            }

            $notification = [
                'alert-type' => 'error',
                'message' => $errorMessage,
            ];

            return redirect()->back()->with($notification)->withInput();
        }

    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|between:10,13',
            'birthday' => 'required|date',
            'address' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::insert([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'birthday' => $validated['birthday'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role_id' => 4,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Đăng ký thành công',
        ];

        return redirect('/')->with($notification);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $notification = [
            'alert-type' => 'success',
            'message' => 'Đăng xuất thành công',
        ];

        return redirect('/')->with($notification);
    }

}
