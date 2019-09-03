@extends('layouts.auth')
@section('content')
<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
            <h4 class="float-left">Class</h4>
        </div>
        <div class="class-form for-class">
            <form method="POST" enctype="multipart/form-data" action="{{ url('admin/add-class') }}">
                {{ csrf_field() }}


                <div class="row">
                    <div class="col-lg-12"><label for="c_name" class="middle">Class name</label>
                        <input type="hidden" name="parent_id" value="{{$classprovider->id}}" required id="c_name" autocomplete="off">
                        <input type="text" name="name" required id="c_name" autocomplete="off">
                    </div>

                    <div class="col-lg-6">
                        <label for="s_name" class="middle">category</label>
                        <select name="category_name" id="category">
                            <option value="0" selected disabled>-- Choose Category --</option>
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
                            <option value="0" selected disabled>-- Choose Category --</option>
                            @foreach($subcategory as $subcategoryname)
                            <option value="{{$subcategoryname->name}}">
                                {{$subcategoryname->name}}
                            </option>
                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input type="file" id="image" name="image[]" multiple />

                    </div>

                    <div class="for-pictures">
                        <div class="preview">
                            <div id="image_preview"></div>
                        </div>
                        <script type="text/javascript">
                            $("#image").change(function() {
                                $('#image_preview').html("");
                                var total_file = document.getElementById("image").files.length;
                                for (var i = 0; i < total_file; i++) {
                                    $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
                                }
                            });
                        </script>

                    </div>

                    <!-- <div class="col-lg-12"><label for="video" class="middle">Videos</label> <input type="file" id="video" name="video[]" multiple />
                    </div>
                    <div class="for-pictures">
                        <div class="preview">
                            <div id="video_preview"></div>
                        </div>
                        <script type="text/javascript">
                            $("#video").change(function() {
                                $('#video_preview').html("");
                                var total_file = document.getElementById("video").files.length;
                                for (var i = 0; i < total_file; i++) {
                                    $('#video_preview').append("<video width='120' src='" + URL.createObjectURL(event.target.files[i]) + "'>");
                                }
                            });
                        </script>

                    </div> -->
                    <div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label><textarea name="write_up" id="query" cols="30" rows="5"></textarea>
                        @if ($errors->has('write_up'))
                        <span class="help-block">
                            <strong>{{ $errors->first('write_up') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-lg-6"><label for="date">Class schedule</label> <input type="date" name="class_schedule" id="date"></div>
                    <div class="col-lg-6"><label for="time">Class time</label> <input type="time" name="timing" id="time"></div> 
                    <div class="col-lg-6"><label for="time">Class end time</label> <input type="time" name="endtiming" id="time"></div>
                    <div class="col-lg-6"><label for="price">Price</label> <input id="price" name="price" type="number"></div>
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
                    <div class="col-lg-12"><label for="total_seats" class="middle">Total seats</label> <input type="text" id="total_seats"></div>
                    <div class="col-lg-6 seats">
                        <label for="seats_left">Seats-left</label> <input type="number" name="total_seat" id="seats_left">
                    </div>
                    <div class="col-lg-6 seats">
                        <label for="seats_enrolled">Seats enrolled</label> <input type="number" name="seat_enrolled" id="seats_enrolled" style="width: calc(100% - 110px)">
                    </div>
                    <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection