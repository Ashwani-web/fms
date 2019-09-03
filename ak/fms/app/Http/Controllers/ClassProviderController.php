<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Media;
use App\Classes;
use App\Safty;
use App\Achievement;
use App\ClassProviders;
use App\Classprovider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
class ClassProviderController extends Controller
{

 
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    
   
    public function __construct()
    {
      $this->middleware('auth:classproviders');
      
    }

  public function index(){
    
    
    $getClassProviderData = DB::table('class_provider')->first();
    // print_r($getClassProviderData); exit;
    return view('classProvider/dashboard');
  }

     public function listClasses(){
     $userid = Auth::id();
    $classProviderId= $userid;
    $classIds=$userid;
    $listofclass = DB::table('class')->where('parent_id', $classProviderId)->get();
    return view('classProvider.listOfClass',compact('listofclass'));
  }

  public function getAchivmentId(Request $request){
    $getId = $request->input();
    $classess =  DB::table('achievement')->select('key')->where('class_id',  $getId)->get();
    // print_r($classes); exit;
    return compact('classess');

  }
  
  public function addClasses(){
    
    $category = DB::table('category')->get();
    $SubCategory = DB::table('sub_category')->get();

    return view('classProvider/addNewClass',compact('SubCategory','category'));
  }
  public function paymentList(){
    return view('classProvider/payment');
  }

  public function addProfile(){
    $userid = Auth::id();
    $classProviderData = DB::table('class_provider')->where(['id'=>$userid])->get();
   
    return view('classProvider/addProfile',compact('classProviderData'));
  }

  public function myProfile(Request $request){
    
    $media = $request->validate([
      'video' => 'file|size:5000',
      'image' => 'file|size:5000'

  ]);
  
  
    $userid = Auth::id();
    $classProviderId= $userid;
    $parent_id =  $userid;
    
    $name = $request->input('name');
    $email = $request->input('email');
    $number = $request->input('number');
    $location = $request->input('location');
    $state = $request->input('state');
    $city = $request->input('city');
    $write_up = $request->input('query');
    $data=array('name'=>$name,'email'=>$email,'phone_number'=>$number,"location"=>$location, "state"=>$state,"city"=>$city,"write_up"=>$write_up);
    DB::table('class_provider')->where(['id'=>$userid])->update($data);


    $insertSaftyData = new Safty;
    $safety1 = $request->input('safety1');
    $safety1Val = $request->input('safety1Val');
    $safety2 = $request->input('safety2');
    $safety2Val = $request->input('safety2Val');
    $safety3 = $request->input('safety3');
    $safety3Val = $request->input('safety3Val');
    $safety4 = $request->input('safety4');
    $safety4Val = $request->input('safety4Val');
    $safety5 = $request->input('safety5');
    $safety5Val = $request->input('safety5Val');
    $safety6 = $request->input('safety6');
    $safety6Val = $request->input('safety6Val');
    $safety7 = $request->input('safety7');
    $safety7Val = $request->input('safety7Val');
    $safety8 = $request->input('safety8');
    $safety8Val = $request->input('safety8Val');
    $safety9 = $request->input('safety9');
    $safety9Val = $request->input('safety9Val');
    $safety10 = $request->input('safety10');
    $safety10Val = $request->input('safety10Val');
    $safety11 = $request->input('safety11');
    $safety11Val = $request->input('safety11Val');
    $safety12 = $request->input('safety12');
    $safety12Val = $request->input('safety12Val');
    $safety13 = $request->input('safety13');
    $safety13Val = $request->input('safety13Val');
    $safety14 = $request->input('safety14');
    $safety14Val = $request->input('safety14Val');
    $safety15= $request->input('safety15');
    $safety15Val = $request->input('safety15Val');
    // print_r($safety1); exit;
    if(!empty($safety1)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety1Val, 'value' =>$safety1);
      DB::table('safty')->insert($saftyData); 
    }
    if(!empty($safety2)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety2Val, 'value' =>$safety2);
      DB::table('safty')->insert($saftyData); 
    }
    if(!empty($safety3)){
      $saftyData= array('class_id' =>$classProviderId,'key' => $safety3Val, 'value' =>$safety3);
      DB::table('safty')->insert($saftyData); 
    }
    if(!empty($safety4)){
      $saftyData= array('class_id' =>$classProviderId,'key' => $safety4Val, 'value' =>$safety4);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety5)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety5Val, 'value' =>$safety5);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety6)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety6Val, 'value' =>$safety6);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety7)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety7Val, 'value' =>$safety7);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety8)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety8Val, 'value' =>$safety8);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety9)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety9Val, 'value' =>$safety9);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety10)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety10Val, 'value' =>$safety10);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety11)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety11Val, 'value' =>$safety11);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety12)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety12Val, 'value' =>$safety12);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety13)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety13Val, 'value' =>$safety13);
      DB::table('safty')->insert($saftyData);
    }
    if(!empty($safety14)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety14Val, 'value' =>$safety14);
      DB::table('safty')->insert($saftyData); }
    if(!empty($safety15)){
      $saftyData= array('class_id' =>$classProviderId,'key' =>$safety15Val, 'value' =>$safety15);
      DB::table('safty')->insert($saftyData);
    }
    
    
  if ($request->image) {
    foreach ($request->file('image') as $key => $value) {
    $imageName = time() . $key . '.' . $value->getClientOriginalExtension();
    $value->move(public_path('class_provider/images'), $imageName);
    $url = 'http://127.0.0.1:8000/class_provider/images/' . $imageName;
    
    $c_id = $classProviderId;
    $image = $imageName;
    $file_url = $url;
    $type = "IMAGE";
    $primary = 'null';
    $is_thumb = 'null';
    $user_type = "CLASS_PROVIDER";
    
    $media = new Media;
    $media->c_id =$classProviderId;
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
      $url = 'http://127.0.0.1:8000/class_provider/video/' . $videoName;
      
      $c_id = $classProviderId;
      $video = $videoName;
      $file_url = $url;
      $type = "video";
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
     return response()->json($data);
     
  }


  public function addNewClasses(Request $request){

   
  //   $classess = $request->validate([
  //     'name' => 'required|string|max:255',
  //     'category' => 'required',
  //     'SubCategory' => 'required',
  //     'type_classes' =>'required',
  //     'time' => 'required',
  //     'endtime' => 'required',
  //     'price' => 'required|numeric',
  //     'address' => 'required',
  //     'query' => 'required',
  //     'total_seats' => 'required|numeric',
  //     'seats_enrolled' => 'required',
  //     'phone_number' => 'required|numeric',
  //     'video' => 'file|size:5000',
  //     'image' => 'file|size:5000'

  // ]);


    $userid = Auth::id();
    // print_r( $userid); exit;
    // $classProviderData = DB::table('class_provider')->select('id')->first();
    $classess=new Classes;
    $classess->parent_id =$userid;
    $classess->name = $request->input('name');
    $classess->category_name = $request->input('category');
    $classess->subcatgory_name = $request->input('SubCategory');
    $classess->tp_of_classes = $request->input('type_classes');
    $classess->write_up = $request->input('query');
    $classess->class_schedule = $request->input('date');
    $classess->timing = $request->input('time');
    $classess->endtiming = $request->input('endtime');
    $classess->price = $request->input('price');
    $classess->address = $request->input('address');
    $classess->total_seat = $request->input('total_seats');
    $classess->seat_enrolled = $request->input('seats_enrolled');
    $classess->save();

    $img= $classess->id;
    $classID=$classess->id;
    if ($request->image) {
      foreach ($request->file('image') as $key => $value) {
      $imageName = time() . $key . '.' . $value->getClientOriginalExtension();
      $value->move(public_path('class_provider/images'), $imageName);
      $url = 'http://127.0.0.1:8000/class_provider/images/' . $imageName;
      
      $c_id =  $img;
      $image = $imageName;
      $file_url = $url;
      $type = "IMAGE";
      $primary = 'null';
      $is_thumb = 'null';
      $user_type = "CLASS_PROVIDER";
      
      $media = new Media;
      $media->c_id =$img;
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
      $url = 'http://127.0.0.1:8000/class_provider/video/' . $videoName;
      
      $c_id = $img;
      $video = $videoName;
      $file_url = $url;
      $type = "video";
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
     
      $achievement=$request->input('achievment');
      if(!empty($achievement)){
      foreach($achievement as $value) {
      $data = array('class_id' =>$classID,'key' =>$value);
      DB::table('achievement')->insert($data);  
      }
    }


    return response()->json('data insert ');
     }

     public function updateClass(Request $request){
      $classUpdate =Classes::find ($request->id);
      // print_r( $request->id); exit;
      $classUpdate->name =$request->className;
      $classUpdate->class_schedule =$request->schedual;
      $classUpdate->timing =$request->classtime;
      $classUpdate->endtiming =$request->classEndtime;
      $classUpdate ->save();
      
      $achievementUpdate = DB::table('achievement')->where('class_id', $request->id)->get();
      // $achievementUpdate =Achievement::find ($request->id);
      $getStringData =$request->input('achivmentData');
      // print_r($achievementUpdate); exit;
      $str_arr = explode (",", $getStringData); 
      //  print_r($str_arr); exit;
      $i=0;
      foreach($achievementUpdate as $value) {
        // print_r($value->id);
        // $data = array('id' =>$value->id,'key' =>$str_arr[$i]);
        // DB::table('achievement')->update($data); 
        if(!isset($str_arr[$i]) && empty($str_arr[$i])){
          $str_arr[$i]='';
        }
        DB::table('achievement')
            ->where('id', $value->id)
            ->update(['key' => $str_arr[$i]]);

        $i++; 
        }
      // exit;
      return response()->json( $classUpdate );
     }

  public function deleteClass(Request $req) {
    Classes::find($req->id)->delete();
    return response()->json();
  }
}