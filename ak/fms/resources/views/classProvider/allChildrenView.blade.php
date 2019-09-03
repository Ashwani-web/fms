@extends('layouts.custmore_pannel')
@section('content')
<div class="col-lg-9">
    <div class="working-panel payment">
        <div class="max class-provider">
            <h4 class="float-left">Children Details</h4>
            <a href="{{url('/addnewchildren')}}" class="float-right">Add child</a>
        </div>

        @if (Session::has('message'))
        <div class="alert alert-success">
            {{ session::get('message') }}
        </div>
        @endif
        <div class="max table-header">

            <table style="width: 100%">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Child Name</th>
                        <th>Photo</th>
                        <th>Date Of Birth</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @foreach($updateDetail as $update)
                <tbody>
                    <tr>
                        <td>{{$update->id}}</td>
                        <td>{{$update->name}}</td>
                        <td> <img src="/fms/public/images/user_images/{{$update->photo}}" alt="" class="profile-pic">
                        </td>
                        <td>{{$update->dob}}</td>
                        <td><a href="{{url('/editdetail')}}/{{$update->id}}" class="details"><i
                                    class="fa fa-pencil"></i> Edit</a></td>
                        <td><a href="{{url('/deleted')}}/{{$update->id}}" class="details"><i
                                    class="fa fa-trash-o"></i> Delete</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>

        </div>

    </div>
</div>



@endsection