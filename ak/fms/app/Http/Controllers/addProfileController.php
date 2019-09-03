<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Voerro\FileUploader\FileUploader;
use Illuminate\Support\Facades\Validator;
use DB;

use App\FamilyDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class addProfileController extends Controller
{

   /**
     * Create a new controller instance.
     *
     * @return void
     */

   public function __construct()
   {
      $this->middleware('auth:customer');
   }

   public function index(){

      $getData = Auth::user();
     
      $loginUser=$getData->id;
      $userDetail=  DB::table('users as  usr')
      ->select('fmd.name as spouse_name','fmd.dob as spouse_dob', 'fmd.photo as spouse_photo')
      ->join('family_detail as fmd','fmd.fk_custmor_id','=','usr.id')
      ->where('cust_type','spouse')
      ->get();
      //  print_r( $userDetail); exit;
       return view('custmore.custmore_pannel.addProfile',compact('getData','userDetail'));
   }

   public function uplodeProfile(Request $request  ){

      $getCustmorProfile = Auth::user();
      
      $fkt_key_id=$getCustmorProfile->id;

     
      if($request->has('filename'))
      {
         $file = $request->file('filename');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/user_images', $name);
         $getCustmorProfile->photo=$name;
         $getCustmorProfile->save();
        
      }
      $getCustmorProfile->name=$request->input('custmor_name');
      $getCustmorProfile->email=$request->input('email');
      $getCustmorProfile->phone_number=$request->input('phone_number');
      $getCustmorProfile->address=$request->input('custmore_address');
      $getCustmorProfile->dob=$request->input('custmore_dob');
      $getCustmorProfile->facebook_id=$request->input('facebook_id');
      $getCustmorProfile->id_card_number=$request->input('id_card_number');
      
      $getCustmorProfile->save();
      return redirect('user/viewprofile')->withMessage(' Your profile  updated');
      }


   public function addNewFamily(Request $request ){

      $this->validate($request, [
         'name' => 'required|string|max:255',
         'dob' => 'required'
     ]);
     $getCustmorProfile = Auth::user();
     $profile_id=$getCustmorProfile->id;

     $insertNewChildren= new FamilyDetail;
     $familyDetail = new FamilyDetail; 

     $user_type=$request->user_type;

   if($user_type=='children'){
      if($request->has('filename'))
      {
         $file = $request->file('filename');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/user_images', $name);
         $insertNewChildren->photo=$name;
         $insertNewChildren->save();
      }
         
    
      $insertNewChildren->name=$request->input('name');
      $insertNewChildren->fk_custmor_id=$getCustmorProfile->id;
      $insertNewChildren->cust_type="children";
      $insertNewChildren->dob=$request->input('dob');
      $insertNewChildren->save();
    }
    else{
      if($request->has('filename'))
      {
         $file = $request->file('filename');
         $name=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/user_images', $name);
         $familyDetail->photo=$name;
         $familyDetail->save();
         
      }
      $familyDetail->name=$request->input('name');
      $familyDetail->fk_custmor_id=$getCustmorProfile->id;
      $familyDetail->cust_type="spouse";
      $familyDetail->dob=$request->input('dob');
      $familyDetail->save();
    }
  
     return redirect()->action('CustmorePannelController@index');   

}    
 
   

      public function viewFamilyProfile($id){
         $updateDetail = FamilyDetail::find($id);
         print_r( $updateDetail); exit;
         // print_r($updateDetail);exit;
         return  redirect('/allchildrenviews');
         }


   public function addDetail(){
      $getUserId = Auth::user();
      $userID= $getUserId->id;
      
      return view('custmore.custmore_pannel.updateForm');
      }

   public function allChildrenView(){
   $getUserId = Auth::user();
   $userID= $getUserId->id;
   
   $updateDetail = DB::table('family_detail')
   ->where(['fk_custmor_id'=> $userID])->select('*') ->get();
   // print_r( $updateDetail); exit;
   $classprovider =$users =DB::table('family_detail')
   ->where(['fk_custmor_id'=> $userID])->select('*')->paginate(3);
   // print_r($classprovider); exit;
   $fmaliyDetail = DB::table('family_detail')->where(['cust_type'=>'spouse'])
   ->where(['fk_custmor_id'=> $userID])->select('*') ->get();
   return view('custmore.custmore_pannel.allChildrenView',compact('updateDetail','fmaliyDetail','classprovider'));
   }

 
      public function updateFamilyDetail(Request $request, $id){
         $updateDetail = FamilyDetail::find($id);
         $updateSpouse = FamilyDetail::find($id);
         // print_r( $request->input('spouse_name'));exit;
         if($request->has('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/user_images', $name);
            $updateDetail->photo=$name;
            $updateDetail->save();
          
         }

         if($request->has('spouse_file'))
         {
            $file = $request->file('spouse_file');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/user_images', $name);
            $updateSpouse->photo=$name;
            $updateSpouse->save();
         }
            $updateSpouse->name=$request->input('spouse_name');
            $updateSpouse->dob=$request->input('spouse_dob');
            $updateSpouse->save();
            $updateDetail->name=$request->input('name');
          
            $updateDetail->dob=$request->input('dob');
            $updateDetail->save();
         return redirect('/allchildrenviews');
         }
   

  

   public function viewProfile(){
      $userDetail = Auth::user();
      return view('custmore.custmore_pannel.viewProfile',compact('userDetail'));
      }


  public function editFamily(Request $req) {
   
   $family =  FamilyDetail::find ($req->id);
   if($req->has('file'))
   {
      $file = $req->file('file');
      $name=time().$file->getClientOriginalName();
      $file->move(public_path().'/images/user_images', $name);
      $family->photo=$name;
      $family->save();
   }
  
   $family->name = $req->name;
   $family->dob = $req->dob;
   $family->save();
    return response()->json($family);
  
 }


 public function deleteFamily(Request $req) {
   FamilyDetail::find($req->id)->delete();
   return response()->json();
 }

 public function sendMail(Request $request) {
   //dd($request->all());

   // $validator = \Validator::make($request->all(), [
   //                             'name' => 'required|max:255',
   //                             'email' => 'required|email|max:255',
   //                             'subject' => 'required',
   //                             'bodymessage' => 'required']
   // );

   //     if ($validator->fails()) {
   //         return redirect('contact')->withInput()->withErrors($validator);
   //     }


   $name = $request->name;
   print_r($name); exit;
   // $email = $request->email;
   // $title = $request->subject;
   // $content = $request->bodymessage;


       \Mail::send('emails.visitor_email', ['name' => $name], function ($message) {

           $message->to('your.email@gmail.com')->subject('Subject of the message!');
       });

 
   return redirect('user.dashboard')->with('status', 'You have successfully sent an email to the admin!');

}
}