<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Session;
use App\User;
use App\FamilyDetai;
use App\ClassProviders;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Foundation\Auth\User as Authenticatable;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
//    protected $redirectTo = '/dashboard';


   protected function redirectTo()
    {
        if (auth()->user()->user_type == 'user') {
            return 'user/dashboard';
        }
        return '/classprovider/dashboard';
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:class_provider',
            'phone_number' =>'required|digits_between:10,14',
            'user_type' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
        if( ($data['user_type'])=='user'){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'phone_number' => $data['phone_number'],
                'user_type' => $data['user_type'],

            ]);
           
        }
        else{
            return ClassProviders::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'phone_number' => $data['phone_number'],
                'user_type' => $data['user_type'],
            ]);
            
        }
        
    }
    
}
