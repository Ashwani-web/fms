<?php

namespace App\Http\Controllers\Auth;
use DB;
use App\User;
// use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    
    
     //
     /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
       
      
        return view('custmore.login');



       // return view('classProvider.login');
    }
    
    
    
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
    // protected $redirectTo = 'user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function guard(){
        return Auth::guard('customer');
    }
    public function login(Request $request)
    {
       
       
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('user/dashboard');
        }
        $errors = [$this->username() => 'Your record not found'];
        return redirect()->back()
        ->withInput($request->only($this->username(), 'remember'))
        ->withErrors($errors);
    }

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }
}
