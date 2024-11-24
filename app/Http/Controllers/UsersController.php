<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{




    public function dashboard(){
        return view('admin.index');
    }


    public function UserList(){
        return view('admin.users');
    }


    public function RolesPermissionsList(){
        return view('admin.roles-permissions');
    }

    public function Permissions(){
        return view('admin.permissions');
    }


    public function DeleteAccount(){
        return view('admin.delete-account');
    }


    public function MyProfile(){
        return view('admin.profile');
    }









    // Authuntications
    public function Login(){
        return view('admin.auth.login');
    }
    public function Register(){
        return view('admin.auth.register');
    }
    public function ForgotPassword(){
        return view('admin.auth.forgot-password');
    }
    public function ResetPassword(){
        return view('admin.auth.reset-password');
    }
    public function EmailVerification(){
        return view('admin.auth.email-verification');
    }
    public function TwoStepVerification(){
        return view('admin.auth.two-step-verification');
    }
    public function LockScreen(){
        return view('admin.auth.lock-screen');
    }
    public function Success(){
        return view('admin.auth.success');
    }
    public function UnderMaintenance(){
        return view('admin.auth.under-maintenance');
    }
    public function ComingSoon(){
        return view('admin.auth.coming-soon');
    }



}
