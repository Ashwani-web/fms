@extends('layouts.auth')
@section('content')
<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
            <h4 class="float-left">Class</h4>
        </div>
        <div class="class-form for-class">
        <form class="form-horizontal" method="POST" action="{{action('AdmincpController@updateClasspost',$id)}}">
        {{ csrf_field() }}
        
        
                <div class="row">
                    <div class="col-lg-12"><label for="c_name" class="middle">Class name</label>
                   
                        <input type="text" name="name" value="{{ $classes->name }}"  required id="c_name" autocomplete="off">
                    </div>
                   
                    <div class="col-lg-6">
                        <label for="s_name" class="middle">category</label>
                        <select name="category_name" id="category">
                        <option value="{{$classes->category_name}}">
                                {{$classes->category_name}}
                            </option>
                            @foreach($category as $categoryName)
                            <option value="{{$categoryName->name}}">
                                {{$categoryName->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="s_name" class="middle">Subcategory</label>
                        <select name="subcategory_name" id="SubCategory">
                        <option value="{{$classes->subcategory_name}}">
                                {{$classes->subcategory_name}}
                            </option>
                            @foreach($subcategory as $subcategoryname)
                            <option value="{{$subcategoryname->name}}">
                                {{$subcategoryname->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    
                    <div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label><textarea name="write_up" id="query" cols="30" rows="5">{{ $classes->write_up }}</textarea>
                        @if ($errors->has('write_up'))
                        <span class="help-block">
                            <strong>{{ $errors->first('write_up') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-lg-6"><label for="date">Class schedule</label> <input type="date" name="class_schedule" value="{{ $classes->class_schedule }}" id="date"></div>
                    <div class="col-lg-6"><label for="time">Class time</label> <input type="time" name="timing" value="{{ $classes->timing }}" id="time"></div>
                    <div class="col-lg-6"><label for="price">Price</label> <input id="price" name="price" value="{{ $classes->price }}" type="number"></div>
                    <div class="col-lg-6"><label for="review">Review &amp; ratings</label> <input id="review" type="text" value="4.5/5" readonly></div>
                    <div class="col-lg-12 big">
                        <h5 class="small1">Achievements List</h5>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 achievement">
                                <label for="achi1">Achievement 1</label>
                                <input type="checkbox" id="achi1">
                            </div>
                            <div class="col-lg-3 col-sm-6 achievement">
                                <label for="achi1">Achievement 1</label>
                                <input type="checkbox" id="achi1">
                            </div>
                            <div class="col-lg-3 col-sm-6 achievement">
                                <label for="achi1">Achievement 1</label>
                                <input type="checkbox" id="achi1">
                            </div>
                            <div class="col-lg-3 col-sm-6 achievement">
                                <label for="achi1">Achievement 1</label>
                                <input type="checkbox" id="achi1">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12"><label for="total_seats" class="middle">Total seats</label> <input type="text" name="total_seat" value="{{ $classes->total_seat }}" id="total_seats"></div>
                    <div class="col-lg-6 seats">
                        <label for="seats_left">Seats-left</label> <input type="number" name="seats_left"   id="seats_left">
                    </div>
                    <div class="col-lg-6 seats">
                        <label for="seats_enrolled">Seats enrolled</label> <input type="number" name="seat_enrolled" value="{{ $classes->seat_enrolled }}" id="seats_enrolled" style="width: calc(100% - 110px)">
                    </div>
                    <div class="col-lg-12">
                        <button class="submit" type="submit">Submit</button></div>
                </div>
            </form></br>
            <div class="for-pictures">
                @foreach( $media as $md)
                <div class="preview">
                @if($md->type== 'IMAGE')
                
                    <img src="{{$md->file_url}}" alt="">
                    @endif
                <!-- @if($md->type== 'VIDEO')
                
                <video width="120" height="150" controls>
                  <source src="{{$md->file_url}}" type="video/mp4">
                </video>
                @endif -->
                    <form action="{{action('AdmincpController@deletecpimage',$md->id)}}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        {!! csrf_field() !!}
                        <button type="submit">
                            <span class="fa fa-times"></span>
                        </button>
                    </form>


                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
@endsection