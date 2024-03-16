<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::withCount('tasks')->paginate(5);
        return view("userposts.index")->with("users", $users);
    }
}
