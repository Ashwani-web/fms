<?php

namespace App\Http\Controllers\Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\ClassProviders;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
class ClassProviderLoginController extends Controller
{
    //
     /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
       
        return view('classProvider.login');



       // return view('classProvider.login');
    }

    public function login(Request $request)
    {
       
       
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('classproviders')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect('/classprovider/dashboard');
        }
        $errors = [$this->username() => 'Your record not found '];
        return redirect()->back()
        ->withInput($request->only($this->username(), 'remember'))
        ->withErrors($errors);
    }



    protected function guard(){
        return Auth::guard('classproviders');
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
        $this->middleware('guest:classproviders')->except('logout');
       
    }

}
