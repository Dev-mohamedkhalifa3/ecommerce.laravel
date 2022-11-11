<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Console\View\Components\Alert as ComponentsAlert;
// use Illuminate\Contracts\Session\Session;
// use Session;
// use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth ;
use RealRashid\SweetAlert\Facades\Alert;





class userController extends Controller
{
    //
    public function login(){
    return view("dashboard.login");
    }
    public function postlogin(Request $re){
    //   dd($re);
    $val = $re->validate([
        "email" =>"required|email",
        "password" =>"required",
    ]);

   $user_data = $re->only('email','password');
   if (Auth::attempt($user_data)) {
    return redirect("/product/index");
   }else {
    Session::flash("message","User Not Register ");
    return redirect("/login");

   }

    }
    public function logout(){
    Auth::logout();
    return redirect("/login");
      }
    public function register(){
        return view("dashboard.register");
    }
    public function postregister(Request $re){
    //  dd($re);
    $val = $re->validate([

        "username" =>"required",
        "email" =>"required|email",
        "password" =>"required|confirmed",
        // "repassword" =>"required|same:password"
    ]);
    // $data_user =dd($re->only("username","password","email"));
    $user = new User();
    $user->name = $re->username;
    $user->email = $re->email;
    $user->password = Hash::make($re->password);

    if ($user->save()) {
       Session::flash("message","User Created Successful");
    } else {
        Session::flash("message","User Not Created ");
    }

    return redirect("/register");

    }
}
