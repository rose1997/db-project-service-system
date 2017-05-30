<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Trash;
use App\Umbrella;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function main()
    {
        $users = User::all();
        $services = Service::all();
        $trashes = Trash::all();
        $umbrella = Umbrella::all();
            return view('/main', [
        'users' => $users,
        'services' => $services,
        'trashes' => $trashes,
        'umbrella' => $umbrella,
    ]);
    }

    public function umbrella()
    {
        return view('umbrella');
    }    
}
