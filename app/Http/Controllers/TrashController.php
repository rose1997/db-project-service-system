<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \View;
use \Input;
use \Auth;
use \Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Service;
use App\Trash;
use App\Umbrella;
use App\Map;

class TrashController extends Controller
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
        $services = Service::all();
        return view('trash',[
            'services' => $services,
        ]);
    }

    protected function create()
    {
        $services = Service::all();
        $trashes = Trash::all();
        return view('createtrash',[
            'services' => $services,
            'trashes' => $trashes,
        ]);
    }

    public function store(Request $request)
    {
       $trashes = new Trash;
       $trashes->service_id = $request->service_id;
       $trashes->request_account = $request->request_account;
       $trashes->request_time = $request->request_time;
       $trashes->save();

       $services = new Service;
       $services->request_account = $request->request_account;
       $services->trans_mode = $request->trans_mode;
       $services->trans_money = $request->trans_money;
       $services->start_name = $request->start_name;
       $services->end_name = $request->end_name;
       $services->start_lng = $request->start_lng;   
       $services->start_lat = $request->start_lat;  
       $services->end_lng = $request->end_lng;  
       $services->end_lat = $request->end_lat;
       $services->save();

        return redirect('trash');
    }
  
}
