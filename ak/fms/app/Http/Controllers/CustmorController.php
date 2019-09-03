<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustmorController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customer',
            'facebook_id' => 'required|string|max:255|unique:customer',
            'id_card_number' => 'required|string|max:255|unique:customer',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Custmor
     */
    protected function create(array $data)
    {
        return Custmor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'photo' => $data['photo'],
            'dob' => $data['dob'],
            'facebook_id' => $data['facebook_id'],
            'id_card_number' => $data['id_card_number'],
            'spouse' => $data['spouse'],
            'family' => $data['family'],

        ]);
    }
}
