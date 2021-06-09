<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    function home()
    {
        return view('front_end.home');
    }
    function index(){
        $books=DB::table('books')->get();
        return view('front_end.Book.book-detail',compact('books'));
    }

    function userLogin()
    {
        return view('front_end.login');
    }

    function postLoginUser(UserRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('login');

        }
        return back();

    }

    public function registration()
    {
//        $roles = $this->roleService->getAll();
        return view('front_end.registration');
    }

    public function postRegistration(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return view('front_end.login');
    }

}
