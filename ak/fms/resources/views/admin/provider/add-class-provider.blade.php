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
             
            @endif


        </div>
    </div>
</div> 

 <!-- Start add class -->
 
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