@extends('layouts.custmore_pannel')
@section('content')


<div class="col-lg-9">
    <div class="working-panel readonly">
        <div class="class-provider">
            <h4 class="float-left">View Profile</h4>
        </div>
        @if (Session::has('message'))
        <div class="alert alert-success">
        {{ session::get('message') }}
        </div>
        @endif
        <div class="class-form for-class">

            <form action="{{url('/myprofile')}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="after"><label for="co_name" class="middle">Name</label> <span
                                class="read-text">{{$userDetail->name}}</span>
                        </div>
                        <div class="after">
                            <label for="co_email">Email</label>
                            <span class="read-text">{{$userDetail->email}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="profile-img"><img src="{{ url('/images/user_images') }}/{{$userDetail->photo}}"  onerror="this.src='https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg' "alt=""
                                class="profile">
                        </div>
                    </div>
                    <div class="col-lg-12"><label for="co_phone ">Phone No.</label>
                        <span class="read-text">{{$userDetail->phone_number}}</span>
                    </div>
                    <div class="col-lg-12"><label for="address" style="vertical-align: top">Address</label><span
                            class="read-text">{{$userDetail->address}}</span>
                    </div>
                    <div class="col-lg-6"><label for="dob">DOB</label> <span
                            class="read-text">{{$userDetail->dob}}</span></div>
                    <div class="col-lg-6"><label for="facebook">Facebook ID</label> <span
                            class="read-text">{{$userDetail->facebook_id}}</span></div>
                    <div class="col-lg-12"><label for="id_card" class="middle">Identification number</label>
                        <span class="read-text" style="width:calc(100% - 170px)">{{$userDetail->id_card_number}}</span></div>
                        <div class="col-lg-12"><button class="submit"> Update Profile</button></div>
                </div>
            </form>
        </div>
       
        
    </div>
</div>








@endsection