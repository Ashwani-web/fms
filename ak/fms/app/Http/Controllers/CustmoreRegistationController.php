<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Custmor;
use Illuminate\Support\Facades\Validator;



// protected $redirectTo = '/home';


class CustmoreRegistationController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        return Custmor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone_number'],
            'user_type' => $data['user_type'],
        ]);
    }
    public function registerForm(){
        
    }


    public function register(){

     
        $getmenu = DB::table('category')
        ->select('*')
         ->get()->toArray();

  
        $getfurmenu = DB::table('category')
        ->leftjoin('sub_category', 'sub_category.fk_cat_id', '=', 'category.id')
        ->select('category.id','sub_category.id as subid','sub_category.fk_cat_id','category.name as categoryName', 'sub_category.name as subCatname')
         ->get()->toArray();

        //  print_r( $getfurmenu );exit;
         $getfurmenudata = DB::table('sub_category')
        ->leftjoin('further_sub_category', 'further_sub_category.fk_sub_id', '=', 'sub_category.id')
        ->select('further_sub_category.name as furName','sub_category.id as subCatId', 'further_sub_category.fk_sub_id', 'further_sub_category.id as furID','sub_category.fk_cat_id')
         ->get()->toArray();

        
        $result = $getfurmenu;
        
        $data = [];
        foreach($getmenu as $key => $value){
            $data[$value->id] = $value;
        }

        foreach($result as $key => $val){
            if(isset($val->subid) && !empty($val->subid)){
                if(isset($data[$val->fk_cat_id]) && !empty($data[$val->fk_cat_id] )){
                    $data[$val->fk_cat_id]->sub_category[$val->subid] = $val;
                }
            }

        }
        foreach($getfurmenudata as $key => $furVal){
            if(isset($furVal->furID) && !empty($furVal->furID)){
            if(isset($furVal->fk_sub_id) && !empty($furVal->fk_sub_id) && isset($furVal->fk_cat_id)&& !empty($furVal->fk_cat_id)){
                    if(isset($data[$furVal->fk_sub_id])&& !empty([$furVal->fk_sub_id])){
                            $data[$furVal->fk_cat_id]->sub_category[$furVal->fk_sub_id]->fur_sub_category[] = $furVal;
                        }  
            }
          }

        }

        $startMenu=(array_slice($data,0,10));
        
        $lastMenu=(array_slice($data,11,17));
      
        return view('custmore.register', compact('lastMenu','startMenu'));
      }
}
