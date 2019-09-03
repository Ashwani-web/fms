<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Classes;

class CategoryController extends Controller
{
  
   public function index($id){
 
    // $getCatName= DB::table('category') ->select('name')->where('slug', $id)->get();
    // foreach($getCatName as $catName)
    // {
    //   $getCatName=$catName->name;
    // }
   //  print_r($getCatName);
   //   exit;
    // $getallClassProviders= DB::table('category') ->select('*')
    // ->join('class','category.name','=','class.category_name')
    // ->join('class_provider','class_provider.id','=','class.parent_id')
    // ->where('category.name',  $getCatName)
    // ->get();

     
    
    $getCatName= DB::table('category') ->select('name')->where('slug', $id)->get();
    foreach($getCatName as $catName)
    {
      $getCatName=$catName->name;
      
    }
    
    $getallClassProviders = Classes::select('class.id','class.parent_id','class.name','class.slug','class.email','class.address','class.category_name','class.subcategory_name','class.class_schedule','class.country','class.city','class.bank_account_detail','class.fms_score','class.write_up','class.timing','class.price','class.total_seat','class.seat_enrolled','class.status','class_provider.id as pid','class_provider.location','media.file_url')
    ->join('class_provider','class.parent_id', '=', 'class_provider.id')
    ->join('media','class.id', '=', 'media.class_id')
    ->where('category_name',$getCatName)->get();
    
    
   
    //print_r($getallClassProviders);exit;
    return view ('menupage.category',compact('id','getallClassProviders'));
   }

   public function subcategory($id,$catId){
    
    $getCurrentsubCats = DB::table('sub_category')->where('slug', $catId)->get();
     
    foreach ($getCurrentsubCats as $key => $getCurrentsub) {
     
           $getCurrentsubCat= $getCurrentsub->name;
           $getslug= $getCurrentsub->slug;
    }
    //print_r($getslug);exit;
    $getallClassProviders= Classes::select('class.id','class.parent_id','class.name','class.slug','class.email','class.address','class.category_name','class.subcategory_name','class.class_schedule','class.country','class.city','class.bank_account_detail','class.fms_score','class.write_up','class.timing','class.price','class.total_seat','class.seat_enrolled','class.status','class_provider.id as pid','class_provider.location','media.file_url')
    ->join('class_provider','class.parent_id', '=', 'class_provider.id')
    ->join('media','class.id', '=', 'media.class_id')
    ->where('subcategory_name',$getCurrentsubCat)->get();
    //print_r($getallClassProviders);exit;
    return view ('menupage.category',compact('id','catId','getallClassProviders','getslug'));
   }

  

   public function furSubCat($id,$catId,$furSubid){
   
     
    $getCurrentfursubCats = DB::table('further_sub_category')->where('slug', $furSubid)->get();
    
    foreach ($getCurrentfursubCats as $key => $getCurrentfursub) {
     
           $getCurrentfursubCat= $getCurrentfursub->name;
    }
    
    
    $getallClassProviders= Classes::select('class.id','class.parent_id','class.name','class.slug','class.email','class.address','class.category_name','class.subcategory_name','class.class_schedule','class.country','class.city','class.bank_account_detail','class.fms_score','class.write_up','class.timing','class.price','class.total_seat','class.seat_enrolled','class.status','class_provider.id as pid','class_provider.location','media.file_url')
    ->join('class_provider','class.parent_id', '=', 'class_provider.id')
    ->join('media','class.id', '=', 'media.class_id')
    ->where('fursubcategory_name',$getCurrentfursubCat)->get();
    
    return view ('menupage.category',compact('id','catId','furSubid','getallClassProviders'));
   }

   
}