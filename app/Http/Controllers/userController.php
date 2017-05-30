<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function index(Request $request)
{
	$users = User::all();
    return view('/home', [
        'users' => $users,
    ]);
}
	    
}
