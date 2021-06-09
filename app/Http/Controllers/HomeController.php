<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function homeIndex()
    {
        return view('back_end.admin.index');
    }

    function adminLogin()
    {
        return view('back_end.login');
    }

    function postLoginAdmin(UserRequest $request)
    {
//        toastr()->success('Bạn đã đăng nhập thành công ');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin');

        }
        return back();

    }

    public function logout()
    {
        Auth::logout();
        return view('back_end.login');
    }

}
