<?php

namespace App\Http\Controllers;
use DB;
use App\Classes;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function indexclass($id,$slug){
        $classnames= DB::table('class') ->select('*')->where('slug', $slug)
        ->get();

        foreach($classnames as $cn){
            $cn_id=$cn->id;
        }
       
        $classmedia= DB::table('media') ->select('*')->where('class_id', $cn_id)
        ->get();
         
        $getallClass= DB::table('class') ->select('*')->where('category_name', $id)
        ->get();
       // print_r($getallClass); exit;
         $totalClass =$getallClass->count();
       ///  print_r($totalClass); exit;

    //      $getallClass= Classes::select('class.id','class.parent_id','class.name','class.slug','class.email','class.address','class.category_name','class.subcategory_name','class.class_schedule','class.country','class.city','class.bank_account_detail','class.fms_score','class.write_up','class.timing','class.price','class.total_seat','class.seat_enrolled','class.status','class_provider.id as pid','class_provider.location','media.file_url')
    // ->join('class_provider','class.parent_id', '=', 'class_provider.id')
    //  ->join('media','class.id', '=', 'media.class_id')
    //  ->where('subcategory_name', $id)->get();
       
        return view ('menupage.subcategory',compact('getallClass','totalClass','classnames','classmedia'));
       }
}
