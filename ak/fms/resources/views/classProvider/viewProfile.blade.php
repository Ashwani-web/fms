@extends('layouts.custmore_pannel')
@section('content')


<div class="col-lg-9">
    <div class="working-panel readonly">
        <div class="class-provider">
            <h4 class="float-left">View Profile</h4>
        </div>
        <div class="class-form for-class">
        @foreach($userDetail as $userData)
         @endforeach
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="after"><label for="co_name" class="middle">Name</label> <span class= "read-text">{{$userData->name}}</span>
                        </div>
                        <div class="after">
                            <label for="co_email">Email</label>
                            <span class= "read-text">{{$userData->email}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="profile-img"><img src="/fms/public/images/user_images/{{$userData->photo}}" alt="" class="profile">
                        </div>
                    </div>
                    <div class="col-lg-12"><label for="co_phone ">Phone No.</label>
                        <span class= "read-text">{{$userData->phone_number}}</span>
                    </div>
                    <div class="col-lg-12"><label for="address" style="vertical-align: top">Address</label><span class= "read-text">{{$userData->address}}</span>
                    </div>
                    <div class="col-lg-6"><label for="dob">DOB</label> <span class= "read-text">{{$userData->dob}}</span></div>
                    <div class="col-lg-6"><label for="facebook">Facebook ID</label> <span class= "read-text">{{$userData->facebook_id}}</span></div>
                    <div class="col-lg-12"><label for="id_card" class="middle">Identification number</label>
                        <span class= "read-text">{{$userData->id_card_number}}</span></div>
                    <div class="col-lg-12">
                        <h5 class="small1">Spouse Details</h5>
                    </div>
                    
                    <div class="col-lg-6"><label for="s_name">Name</label><span class= "read-text">{{$userData->spouse_name}}</span></div>
                    <div class="col-lg-6"><label for="s_dob">DOB</label><span class= "read-text">{{$userData->spouse_dob}}</span></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection