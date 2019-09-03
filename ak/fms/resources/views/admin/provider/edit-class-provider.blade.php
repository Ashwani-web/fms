@extends('layouts.auth')
@section('content')
<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
            <h4 class="float-left">Class Provider</h4>
        </div>
        <div class="class-form">
            <form class="form-horizontal" method="POST" action="{{action('AdmincpController@updateclassProvider',$id)}}">
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
                    <!-- <div class="col-lg-6"><label for="pic">Photos</label>
                        <input class="file" id="pic" type="file" accept="image/x-png,image/jpg,image/jpeg">
                        <p class="photo"> No file chosen<span>Choose File</span></p>
                    </div> -->
                    <!-- <div class="col-lg-6"><label for="video">Videos</label>
                        <input class="file" id="video" type="file" accept="video/mp4,video/x-m4v,video/*">
                        <p class="video"> No file chosen<span>Choose File</span></p>
                    </div> -->

                    <div class="col-lg-6"><label for="score">FMS score</label>
                        <input id="score" type="text" value="8/10" readonly></div>
                    <div class="col-lg-12"><button class="submit" type="submit">Update Profile</button></br></div>
                </div>
            </form>
            <div class="for-pictures">
                @foreach( $media as $md)
                <div class="preview">
                @if($md->type== 'IMAGE')
                
                    <img src="{{$md->file_url}}" alt="">
                    @endif
                @if($md->type== 'VIDEO')
                
                <video width="120" height="150" controls>
                  <source src="{{$md->file_url}}" type="video/mp4">
                </video>
                @endif
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
    <div class="row">
    <div class="col-lg-3 offset-lg-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload Image</button></br>
              <div class="container">
               <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Image</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" action="{{action('AdmincpController@AddcpImage',$id)}}">
                                {{ csrf_field() }}
                                <input type="file" id="image" name="image[]" multiple /></br></br></br>
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
                                <button class="submit" type="submit">Submit</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

                </div>
             </div>
            <div class="col-lg-6"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Upload Video</button></br>
            <div class="container">
               <div class="modal" id="myModal1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Video</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" action="{{action('AdmincpController@AddcpImage',$id)}}">
                                {{ csrf_field() }}
                                <input type="file" id="video" name="video[]" multiple /></br></br></br>
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

                                </div>
                                <button class="submit" type="submit">Submit</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

                </div>
        
        
        
        
        
        </div>
        </div>

    </div>
</div>
</div>
<div class="col-lg-9 offset-lg-3">
    <div class="working-panel">
        <div class="max class-provider">
            <h4 class="float-left">Class list</h4>

            @if(!empty($classprovider->id))
            <a class="float-right" href="{{action('AdmincpController@addClassesget', $classprovider['id'])}}">Add Class</a>
            @endif
        </div>
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
                        <td><a href="{{action('AdmincpController@editClasspost', $clist->id)}}" class="edit">Edit</a> | <a href="#" class="delete">Delete</a></td>
                    </tr>
                    @endforeach

                    @else
                    <div>
                        <p>Please Add Class</p>
                    </div>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="pagination-block">
            {{ $classlist->links() }}
        </div>
    </div>
</div>
</div>
@endsection