@extends('layouts.custmore_pannel')
@section('content')


<div class="col-lg-9">
    
    <div class="boxes">
    @if (Session::has('message'))
			<div class="alert alert-success">
				{{ session::get('message') }}
			</div>
		@endif
        <div class="box-in">
            <div class="box">
                <div class="image">
                    <span class="fa fa-laptop"></span>
                </div>
                <h2>500</h2>
                <h5>Total Classes</h5>
            </div>
        </div>
        <div class="box-in">
            <div class="box">
                <div class="image">
                    <span class="fa fa-laptop"></span>
                </div>
                <h2>500</h2>
                <h5>Total Classes</h5>
            </div>
        </div>
        <div class="box-in">
            <div class="box">
                <div class="image">
                    <span class="fa fa-laptop"></span>
                </div>
                <h2>500</h2>
                <h5>Total Classes</h5>
            </div>
        </div>
        <div class="box-in">
            <div class="box">
                <div class="image">
                    <span class="fa fa-laptop"></span>
                </div>
                <h2>500</h2>
                <h5>Total Classes</h5>
            </div>
        </div>
    </div>
    <div class="main-box">
        <h2>Welcome to custmore panel</h2>
    </div>
    
</div>



@endsection