@extends('layouts.auth')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<style type="text/css">
    input[type=file] {
        display: inline;
    }

    #image_preview {
        padding: 10px;
    }

    #image_preview img {
        width: 200px;
        padding: 5px;
    }

    input[type=file] {
        display: inline;
    }

    #video_preview {
        padding: 10px;
    }

    #video_preview img {
        width: 200px;
        padding: 5px;
    }
</style>

<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
            <h4 class="float-left">Class Provider</h4>
        </div>
        <div class="class-form">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
             
            @if(empty($classprovider->id))
            <!--Start Add Classprovider form -->
            <form method="POST" enctype="multipart/form-data" action="{{ url('admin/add-class-provider') }}">
                {{ csrf_field() }}
                <div class="row">

                    <div class="col-lg-6"><label for="name">Name</label>
                        <input type="text" name="name" id="name" autocomplete="off">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-6"><label for="location">Location</label>
                <input type="text" name="location" id="location">
                        @if ($errors->has('location'))
                        <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                        @endif
                    
                    </div>
                    <div class="col-lg-6"><label for="state">State</label>
                        <select name="state" id="state">
                            <option value="0" selected disabled>-- Choose State --</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('state'))
                        <span class="help-block">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" autocomplete="off">
                        @if ($errors->has('city'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="off">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone_number" autocomplete="off">
                        @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-12">
                        <label for="query" style="vertical-align: top">Write Up</label><textarea name="write_up" id="query" cols="30" rows="5"></textarea>
                        @if ($errors->has('write_up'))
                        <span class="help-block">
                            <strong>{{ $errors->first('write_up') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-lg-12">
                        <label for="pic" class="middle">Photos</label>

                        <input type="file" id="image" name="image[]" multiple />
                        @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif

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
                    <div class="col-lg-12"><label for="video" class="middle">Videos</label> <input type="file" id="video" name="video[]" multiple />

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
                                    $('#video_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
                                }
                            });
                        </script>
                        <!--<div class="preview">
                            <img src="../images/Add%20Class.jpg" alt="">
                            <span class="fa fa-times"></span>
                        </div>-->
                       
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-4 scoring">
                        <label for="safety">Safety</label><input type="number" maxlength="1"> / 10
                    </div>
                    <div class="col-lg-6"><label for="score">FMS score</label> <input id="score" type="text" value="8/10" readonly></div>
                    <div class="col-lg-6"><label for="review">Review &amp; ratings</label> <input id="review" type="text" value="4.5/5" readonly></div>
                    <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
                </div>
            </form>
            <!--End  Add Classprovider form -->
            
            @else
            <!--Start  Upload  Classprovider form -->
            <form class="form-horizontal" method="POST" action="{{action('AdmincpController@updateclassprovider',$id)}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6"><label for="name">Name</label>
                        <input type="text" required id="name" autocomplete="off" name="name" value="{{$classprovider->name}}">
                    </div>
                    <div class="col-lg-6"><label for="email">Email</label>
                        <input type="email" required id="email" autocomplete="off" name="email" value="{{$classprovider->email}}">
                    </div>
                    <div class="col-lg-6"><label for="phone">Phone</label>
                        <input type="number" name="phone_number" id="phone" autocomplete="off" value="{{$classprovider->phone_number}}">
                    </div>
                    <div class="col-lg-6"><label for="address">Address</label>
                        <input type="text" id="address" autocomplete="off" value="{{$classprovider->address}}" name="address">
                    </div>
                    <div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label>
                        <textarea name="write_up" id="query" cols="30" rows="5">{{$classprovider->write_up}}</textarea>
                    </div>
                    <div class="col-lg-6"><label for="pic">Photos</label>
                        <!-- <input class="file" id="pic" type="file" accept="image/x-png,image/jpg,image/jpeg">
                        <p class="photo"> No file chosen<span>Choose File</span></p> 
                    -->
                    <input type="file" id="image" name="image[]" multiple />
                    </div>
                    <div class="col-lg-6"><label for="video">Videos</label>
                        <!-- <input class="file" id="video" type="file" accept="video/mp4,video/x-m4v,video/*">
                        <p class="video"> No file chosen<span>Choose File</span></p> -->
                        <input type="file" id="video" name="video[]" multiple />
                    </div>

                    <div class="col-lg-6"><label for="score">FMS score</label>
                        <input id="score" type="text" value="8/10" readonly></div>
                    <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
                </div>
            </form>
            <div class="for-pictures">
            <div id="response"></div>
            
            <div  id="dis_img">
                @foreach( $media as $md)
                <!-- <div class="preview">
                    <img src="{{ $md->file_url }}" alt="">
                    
                    <form action="{{action('AdmincpController@deletecpimage',$md->id)}}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        {!! csrf_field() !!}
                        <button type="submit">
                            <span class="fa fa-times"></span>
                        </button>
                    </form>
                </div> -->
                
                @if(($md->type) === 'IMAGE')
                      <button class="deleteProduct" data-id="{{ $md->id }}" data-token="{{ csrf_token() }}" ><img src="{{ $md->file_url }}" id="pro_img"></button>
                
                @elseif(($md->type) === 'VIDEO')
                
                      <button class="deleteProduct" data-id="{{ $md->id }}" data-token="{{ csrf_token() }}" ><img src="{{ $md->file_url }}" id="pro_img"></button>
                @endif

                 
                @endforeach
               
                <script type="text/javascript">
                   $(".deleteProduct").click(function(){
                       
                        var id = $(this).data("id");
                        var token = $(this).data("token");
                        $.ajax(
                        {
                            url: "/admin/add-class-provider/"+id,
                            type: 'delete',
                            dataType: "JSON",
                            data: {
                                "id": id,
                                "_method": 'DELETE',
                                "_token": token,
                            },
                            success: function (response)
                                {
                                   //console.log(response); 
                                   $("#response").html(response.html); 
                                 },
                                error: function(xhr) {
                                console.log(xhr.responseText);  
                                }
                        });
 
                        console.log("It failed");
                    });
               </script>
               <script>$("#dis_img").click(function() {
                       $("#dis_img").load(" #dis_img");
                    }); 
               </script>
                </div> 

            </div>
            
            @endif


        </div>
    </div>
</div> 

 <!-- Start add class -->
<div class="col-lg-9 offset-lg-3">
    <div class="working-panel">
        <div class="max class-provider">
            <h4 class="float-left">Class list</h4>
            
            @if(!empty($classprovider->id))
            
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add Class</button>
            @endif
        </div>

        <!-- <div>
<form method="POST" enctype="multipart/form-data" action="{{ url('admin/add-state') }}">
                {{ csrf_field() }}
                <input type="text" name="state_name" >
                <button class="submit" type="submit">Submit</button></div>
</form>
</div> -->


 
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <div class="modal-header">
          <h4 class="modal-title">Add Classs</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
        @if(!empty($classprovider->id))
        <form method="POST" enctype="multipart/form-data" action="{{ url('admin/add-class') }}">
        {{ csrf_field() }}
        
        
                <div class="row">
                    <div class="col-lg-12"><label for="c_name" class="middle">Class name</label>
                    <input type="text" style="display:none;" name="parent_id" value="{{$classprovider->id}}" required  autocomplete="off">
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
                    <div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input class="file" id="pic" type="file" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
                        <p class="photo"> No file chosen<span>Choose File</span></p>
                    </div>
                    <div class="for-pictures for-provider">
                        <div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
                        <div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>

                    </div>
                    <div class="col-lg-12"><label for="video" class="middle">Videos</label> <input class="file" id="video" type="file" accept="video/mp4,video/x-m4v,video/*">
                        <p class="video"> No file chosen<span>Choose File</span></p>
                    </div>
                    <div class="for-pictures for-provider">
                        <div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
                        <div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
                    </div>
                    <div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label><textarea name="write_up" id="query" cols="30" rows="5"></textarea>
                        @if ($errors->has('write_up'))
                        <span class="help-block">
                            <strong>{{ $errors->first('write_up') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-lg-6"><label for="date">Class schedule</label> <input type="date" name="class_schedule" id="date"></div>
                    <div class="col-lg-6"><label for="time">Class time</label> <input type="time" name="timing" id="time"></div>
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
                    <div class="col-lg-6"><button class="btn btn-success" type="submit">Submit</button></div>
                    <div class="col-lg-6"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
                </div>
            </form>
         @endif
        </div>
          
       </div>
    </div>
  </div>
  <!-- End add class -->
  
  <!-- Class List-->

  <div class="max table-header">
            <table style="width: 100%">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Class Name</th>
                        <th>Categories</th>
                        <th>Address</th>
                        <th>Allow</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($classprovider->id))
                    @foreach( $classlist as $clist)
                    <tr>
                        <td>{{ $clist->id }}</td>
                        <td>{{ $clist->name }}</td>
                        <td>{{ $clist->category_name }}</td>
                        <td>{{ $clist->address }}</td>
                        <td><input type="checkbox"></td>
                        <td><a href="edit.html" class="edit">Edit</a> | <a href="#" class="delete">Delete</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="pagination-block">
						{{ $classlist->links() }}
                        </div>
                        @endif
        <!--<div class="pagination-block">
							<ul class="pagination">
								<li class="page-item pre"><a class="page-link" href="#">&lt;</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item next"><a class="page-link" href="#">&gt;</a></li>
							</ul>
						</div>-->
    </div>
</div>



@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="file"]#pic').change(function(e) {
            var fileName = e.target.files[0].name;
            $(".class-form p.photo").html(fileName + "<span> Choose File </span>");
        });
        $('input[type="file"]#video').change(function(e) {
            var fileName = e.target.files[0].name;
            $(".class-form p.video	").html(fileName + "<span> Choose File </span>");
        });
    });
</script>
<script>
    $(document).ready(function() {
        if ($(window).width() < 769) {
            $(".menu-bar").click(function() {
                $(".dashboard .col-lg-3").toggleClass("nav");
            });
            $(".dashboard .col-lg-3").click(function() {
                $(this).removeClass("nav")
            });
            $(".menu-bar").focusin(function() {
                $(".toggle-div span.back").addClass("show")
            });
            $(".menu-bar").focusout(function() {
                $(".toggle-div span.back").removeClass("show")
            });
        } else {}
    });
    $(".preview span").click(function() {
        $(this).parent().css("display", "none")
    })
</script>