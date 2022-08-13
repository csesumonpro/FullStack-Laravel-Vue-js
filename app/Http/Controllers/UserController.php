<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function getUser()
   {
        $user = User::getUser();
        
        return view('user.user-profile', ['user'=> $user]);
   }
}