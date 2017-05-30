<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Request $request)
    {
        
        return View::make('login');
    }


    public function login()
    {
        $input = Input::all();
        $rules = ['account'=>'required',
                  'password'=>'required',
                  ];
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $attempt = Auth::attempt([
                'account' => $input['account'],
                'password' => $input['password'],
            ]);
            if ($attempt) {
                return Redirect::intended('/home');
            }
            return Redirect::to('/login')
                    ->withErrors(['fail'=>'Your account or password is wrong!']);
        }
        //fails
        return Redirect::to('/login')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
    }
}
