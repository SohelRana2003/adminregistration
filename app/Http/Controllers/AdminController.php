<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
    //Admin Login Form
    public function Index() {

        return view('admin.adminlogin');
    }

    //Admin Login
    public function Adminlogin(Request $request) {
//        return view('admin.dashboard');

        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('admin_tbl')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

//        echo "</pre>";
//        print_r($result);

        if ($result) {
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return Redirect::to('/admin-dashboard');
        }
        else {
            Session::put('exception', 'Email or Password Invalid');
            return Redirect::to('/admin');
        }

    }

    //Admin Dashboard
    public function Admindashboard() {
        return view('admin.dashboard');
    }

    //Admin Dashboard Logout
    public function logout() {
        session::put('email', null);
        session::put('id', null);

        return Redirect::to('/admin');
    }

}
