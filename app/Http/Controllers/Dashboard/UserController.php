<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'DESC')->paginate(25);
        return view('dashboard.user.index',compact('users'));
    }

    public function details ($id){
        $user = User::find($id);
        return view('dashboard.user.show',compact('user'));  
    }
}
