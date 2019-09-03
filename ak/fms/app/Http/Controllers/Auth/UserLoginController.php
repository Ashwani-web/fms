<?php

namespace App\Http\Controllers\Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
class UserLoginController extends Controller
{
    //
     /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm(){
        

        return view('custmore.login');
       // return view('classProvider.login');
    }

    public function login(Request $request)
    {
       
       
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('custmore')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/dashboard');
        }
       
        return back()->withInput($request->only('email', 'remember'));
    }



    protected function guard(){
        return Auth::guard('custmore');
    }


    
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/classprovider/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:custmore')->except('logout');
       
    }




// public function __construct()
// {
//     $this->middleware('guest', ['except' => 'logout']);
//     Session::put('backUrl', URL::previous());
// }


// public function redirectTo()
// {
//     return Session::get('backUrl') ? Session::get('backUrl') :   $this->redirectTo;
// }
}
