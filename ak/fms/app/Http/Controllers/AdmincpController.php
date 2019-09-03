<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classprovider;
use App\Media;
use App\State;
use App\Classes;
use App\User;

use DB;

class AdmincpController extends Controller
{
    //

    public function ListofClassprovide()
    {

        $classprovider = Classprovider::paginate(8);
        //$classprovider=\App\Classprovider::all();
        return view('admin/provider/manage-classprovider', compact('classprovider'));
    }
    public function AddclassProviderForm()
    {
        
        return view('admin/provider/add-class-provider',['states' => State::all()]);
        //return view('admin/provider/add-class-provider');
    }

    public function AddclassProvider(Request $request)
    {

        $classprovider = $request->validate([
            'name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'email' => 'required|email|unique:class_provider',
            'phone_number' => 'required|numeric',
            'write_up' => 'required',
            'image' => 'required',
            //'image' => 'file|size:5000'

        ]);


        $classprovider = new  Classprovider;
        $classprovider->name = $request->get('name');
        $classprovider->location = $request->get('location');
        $classprovider->state = $request->get('state');
        $classprovider->city = $request->get('city');
        $classprovider->email = $request->get('email');
        $classprovider->phone_number = $request->get('phone_number');
        $classprovider->write_up = $request->get('write_up');

        $classprovider->save();
         
        $img = Classprovider::select('email', 'id')
            ->where('email', '=', ($request->email))->first();
            
          
        // if($request->hasfile('image'))
        // {
        //    $file = $request->file('image');
        //    $name=time().$file->getClientOriginalName();
        //    $file->move(public_path().'/images/', $name);
        //    $url='http://127.0.0.1:8000/images/'.$name;
        //    //print_r($name);exit;

        // }
        if ($request->image) {
        foreach ($request->file('image') as $key => $value) {
            $imageName = time() . $key . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('class_provider/images'), $imageName);
            $url = 'http://fms.codesk.work/class_provider/images/' . $imageName;

            $c_id = $img->id;
            $image = $imageName;
            $file_url = $url;
            $type = "IMAGE";
            $primary = 'null';
            $is_thumb = 'null';
            $user_type = "CLASS_PROVIDER";

            $media = new Media;
            $media->c_id = $c_id;
            $media->image = $image;
            $media->file_url = $file_url;
            $media->type = $type;
            $media->primary = $primary;
            $media->is_thumb = $is_thumb;
            $media->user_type = $user_type;
            $media->save();
        }
       }
        if ($request->video) {
            foreach ($request->file('video') as $key => $value) {
                $videoName = time() . $key . '.' . $value->getClientOriginalExtension();
                $value->move(public_path('class_provider/video'), $videoName);
                $url = 'http://fms.codesk.work/class_provider/video/' . $videoName;

                $c_id = $img->id;
                $video = $videoName;
                $file_url = $url;
                $type = "VIDEO";
                $primary = 'null';
                $is_thumb = 'null';
                $user_type = "CLASS_PROVIDER";

                $media = new Media;
                $media->c_id = $c_id;
                $media->image = $video;
                $media->file_url = $file_url;
                $media->type = $type;
                $media->primary = $primary;
                $media->is_thumb = $is_thumb;
                $media->user_type = $user_type;
                $media->save();
            }
        }
        return redirect('admin/manage-class-provider')
            ->with('success', 'Class Provider created successfully');
    }

     

    public function editclassProvider(Request $request,$id)
    {

        $classprovider = \App\Classprovider::find($id);
        $c_id =$classprovider->id;
        
        //$media=\App\Media::find($c_id)->where('c_id',$c_id)->where('user_type','CLASS_PROVIDER')->get();
        $media=\App\Media::select('*')->where('c_id',$c_id)->where('user_type','CLASS_PROVIDER')->get();
         //use in add classes
       
        $category = DB::table("category")->get();
        $subcategory = DB::table("sub_category")->get();
        //use in List of class
        $classlist = Classes::where('parent_id',$classprovider->id)->paginate(5);
        //$classlist = DB::table("class")->where('parent_id',$classprovider->id)->get();
        // return view('admin/provider/update-class-provider', compact('classprovider', 'id','media','c_id'));
        //return view('admin/provider/add-class-provider', compact('classprovider', 'id','media'));

        return view('admin/provider/edit-class-provider', compact('classprovider', 'id','media','category','subcategory','classlist'));

    }
    public function updateclassProvider(Request $request, $id)
    {

        $classprovider = \App\Classprovider::find($id);

        if(isset($request->name) && !empty($request->name)){
        $classprovider->name = $request->get('name');
        }
        if(isset($request->phone_number) && !empty($request->phone_number)){
        $classprovider->phone_number = $request->get('phone_number');
        }
        if(isset($request->address) && !empty($request->address)){
        $classprovider->address = $request->get('address');
        }
        if(isset($request->write_up) && !empty($request->write_up)){
        $classprovider->write_up = $request->get('write_up');
        }
        $classprovider->save();
        return redirect('admin/manage-class-provider')
            ->with('success', 'Class Provider Updated successfully');
    }


    public function AddcpImage(Request $request, $id){

        $classprovider = $request->validate([
           
            //'image' => 'file|size:50000',
            

        ]);

        $classprovider = \App\Classprovider::find($id);
         if ($request->image) {
            foreach ($request->file('image') as $key => $value) {
                $imageName = time() . $key . '.' . $value->getClientOriginalExtension();
                $value->move(public_path('class_provider/images'), $imageName);
                $url = 'http://fms.codesk.work/class_provider/images/' . $imageName;
    
                $c_id = $classprovider->id;
                $image = $imageName;
                $file_url = $url;
                $type = "IMAGE";
                $primary = 'null';
                $is_thumb = 'null';
                $user_type = "CLASS_PROVIDER";
                $media = new Media;
                $media->c_id = $c_id;
                $media->image = $image;
                $media->file_url = $file_url;
                $media->type = $type;
                $media->primary = $primary;
                $media->is_thumb = $is_thumb;
                $media->user_type = $user_type;
                $media->save();
                //return redirect('admin/edit-class-provider'.'/'.$id)
            //->with('success', 'Image Uploaded successfully');

            }
           }
           if ($request->video) {
            foreach ($request->file('video') as $key => $value) {
                $videoName = time() . $key . '.' . $value->getClientOriginalExtension();
                $value->move(public_path('class_provider/video'), $videoName);
                $url = 'http://fms.codesk.work/class_provider/video/' . $videoName;
                $c_id = $classprovider->id;
                $video = $videoName;
                $file_url = $url;
                $type = "VIDEO";
                $primary = 'null';
                $is_thumb = 'null';
                $user_type = "CLASS_PROVIDER";
                $media = new Media;
                $media->c_id = $c_id;
                $media->image = $video;
                $media->file_url = $file_url;
                $media->type = $type;
                $media->primary = $primary;
                $media->is_thumb = $is_thumb;
                $media->user_type = $user_type;
                $media->save();
            }
        }
        return redirect('admin/edit-class-provider'.'/'.$id)
            ->with('success', 'Uploaded successfully');

 
    }

    public function deletecpimage($id)
    {
    	Media::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');	
    }
    
    public function destroy($id){
        $classprovider = \App\Classprovider::find($id);
        $c_id = $classprovider->id;
        $provider='CLASS_PROVIDER';
        DB::table("media")->where("c_id", $c_id)->where("user_type", $provider)->delete();
        $classprovider->delete();
        return redirect('admin/manage-class-provider')
            ->with('success', 'Class Provider Delete successfully');
    }
     
    public function state(Request $request){
         
        $state = new State;
        $state->state_name=$request->state_name;
        $state->save();
        return view('admin/provider/add-class-provider');

   }
 

   public function addClassesget($id){
    $classprovider = \App\Classprovider::find($id);
    $category = DB::table("category")->get();
    $subcategory = DB::table("sub_category")->get();
    
    return view('admin/provider/addclass', compact('category','subcategory','classprovider'));

   }




   public function addClassesposts(Request $request){
   
    // print_r( $request->all()); exit;

 //    $classes = $request->validate([
 //     'name' => 'required',
 //     'state' => 'required',
 //     'city' => 'required',
 //     'email' => 'required|email|unique:class_provider',
 //     'phone_number' => 'required|numeric',
 //     'write_up' => 'required',
 //     //'image' => 'file|size:5000',

 // ]);

$cps= Classprovider::select('id','email')->where('id', $request->parent_id)->first();

 $classes = new  Classes;
 $classes->parent_id = $cps['id'];
 $classes->name = $request->get('name');
 $url = strtolower($request->get('name'));

 $classes->slug = str_replace(' ', '-', $url);
 $classes->email = $cps['email'];
 $classes->address = $request->get('address');
 $classes->category_name = $request->get('category_name');
 $classes->subcategory_name = $request->get('subcategory_name');
 $classes->class_schedule = $request->get('class_schedule');
 $classes->country = $request->get('country');
 $classes->city = $request->get('city');
 $classes->bank_account_detail = $request->get('bank_account_detail');
 $classes->fms_score = $request->get('fms_score');
 $classes->write_up = $request->get('write_up');
 $classes->timing = $request->get('timing');
 $classes->endtiming = $request->get('endtiming');
 $classes->price = $request->get('price');
 $classes->total_seat = $request->get('total_seat');
 $classes->seat_enrolled = $request->get('seat_enrolled');

 $classes->save();
 //->latest()->first();
//$cs= Classes::select('id')->where('email', $cps['email'])->latest()->first();
 $cs= Classes::select('id','email')->where('email', $classes->email)->latest()->first();
 print_r($cs->id);

 if ($request->image) {
    foreach ($request->file('image') as $key => $value) {
        $imageName = time() . $key . '.' . $value->getClientOriginalExtension();
        $value->move(public_path('class_image/images'), $imageName);
        $url = 'http://fms.codesk.work/class_image/images/' . $imageName;

        $c_id = $cps['id'];
        $class_id = $cs->id;
        $image = $imageName;
        $file_url = $url;
        $type = "IMAGE";
        $primary = 'null';
        $is_thumb = 'null';
        $user_type = "CLASS";

        $media = new Media;
        $media->c_id = $c_id;
        $media->class_id = $class_id;
        $media->image = $image;
        $media->file_url = $file_url;
        $media->type = $type;
        $media->primary = $primary;
        $media->is_thumb = $is_thumb;
        $media->user_type = $user_type;
        $media->save();
    }
   }
//    if ($request->video) {
//     foreach ($request->file('video') as $key => $value) {
//         $videoName = time() . $key . '.' . $value->getClientOriginalExtension();
//         $value->move(public_path('class_image/videos'), $videoName);
//         $url = 'http://fms.codesk.work/class_image/videos/' . $videoName;

//         $c_id = $cps['id'];
//         $class_id = $cs->id;
//         $video = $videoName;
//         $file_url = $url;
//         $type = "VIDEO";
//         $primary = 'null';
//         $is_thumb = 'null';
//         $user_type = "CLASS";

//         $media = new Media;
//         $media->c_id = $c_id;
//         $media->class_id = $class_id;
//         $media->image = $video;
//         $media->file_url = $file_url;
//         $media->type = $type;
//         $media->primary = $primary;
//         $media->is_thumb = $is_thumb;
//         $media->user_type = $user_type;
//         $media->save();
//     }
//   }
  
        $id=$cps['id'];
        return redirect('admin/edit-class-provider'.'/'.$id)
        ->with('success', 'Uploaded successfully');
 
}

  Public function editClasspost(Request $request,$id){
 
    $classes = DB::table("class")->where('id',$id)->first();
     
    $category = DB::table("category")->get();
    $subcategory = DB::table("sub_category")->get();
    $media = DB::table('media')->where('c_id',$classes->parent_id)->where('user_type','CLASS')->where('class_id',$classes->id)->get();
   //print_r($media);exit;
     
    return view('admin/provider/edit-class', compact('category','subcategory','classes','id','media'));
  
  }


  Public function updateClasspost(Request $request , $id){
      //print_r($request);exit;
      //print_r($request->name);exit;
    $classes = Classes::find($id);
    
    if(isset($request->name) && !empty($request->name)){
        $classes->name = $request->get('name');
    }
    if(isset($request->address) && !empty($request->address)){
        $classes->address = $request->get('address');
    }
    if(isset($request->category_name) && !empty($request->category_name)){
        $classes->category_name = $request->get('category_name');
    }

    if(isset($request->subcategory_name) && !empty($request->subcategory_name)){
        $classes->subcategory_name = $request->get('subcategory_name');
    }
    if(isset($request->class_schedule) && !empty($request->class_schedule)){
        $classes->class_schedule = $request->get('class_schedule');
    }
    if(isset($request->country) && !empty($request->country)){
        $classes->country = $request->get('country');
    }
    if(isset($request->city) && !empty($request->city)){
        $classes->city = $request->get('city');
    }
    if(isset($request->bank_account_detail) && !empty($request->bank_account_detail)){
        $classes->bank_account_detail = $request->get('bank_account_detail');
    }
    if(isset($request->fms_score) && !empty($request->fms_score)){
        $classes->fms_score = $request->get('fms_score');
    }
    if(isset($request->write_up) && !empty($request->write_up)){
        $classes->write_up = $request->get('write_up');
    }
    if(isset($request->timing) && !empty($request->timing)){
        $classes->timing = $request->get('timing');
    }
    if(isset($request->price) && !empty($request->price)){
        $classes->price = $request->get('price');
    }
    if(isset($request->total_seat) && !empty($request->total_seat)){
        $classes->total_seat = $request->get('total_seat');
    }
    if(isset($request->seat_enrolled) && !empty($request->seat_enrolled)){
        $classes->seat_enrolled = $request->get('seat_enrolled');
    }
    

    
     
    $classes->save();
    $category = DB::table("category")->get();
    $subcategory = DB::table("sub_category")->get();
    $media = DB::table('media')->where('c_id',$classes->parent_id)->where('user_type','CLASS')->where('class_id',$classes->id)->get();
    

    return view('admin/provider/edit-class', compact('category','subcategory','classes','id','media'));
    
     
    }

    public function customerList(){
          $users = User::paginate(5);
          return view('admin/provider/customer-list', compact('users'));
         
    }
    
 
  
  
}
