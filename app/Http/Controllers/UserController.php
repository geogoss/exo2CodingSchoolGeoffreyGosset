<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function user () {
        $users = User::all();
        return view('pages.user', compact('users'));
    }
}
