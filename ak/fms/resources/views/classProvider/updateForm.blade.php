@extends('layouts.custmore_pannel')
@section('content')
<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
        @if(empty($updateDetail))
            <h4 class="float-left">Add New Children</h4>
        @else
        <h4 class="float-left">Update Children Detail</h4>
        @endif
        </div>
        <div class="class-form for-class">

            @if(empty($updateDetail))
            <form action="{{url('/addedchildren')}}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }} 
              <div class="row">
                <div class="col-lg-6"><label for="s_name">Name</label><input type="text" id="s_name" name="name"></div>
                    <div class="col-lg-6"><label for="s_dob">DOB</label><input type="date" id="s_dob" name="dob"></div>
                    <div class="col-lg-12"><label for="pic" class="middle">Photos</label>
                    <input
                            class="file priviewImage removeUrl" id="pic" name="filename" type="file"
                            accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
                        <p class="photo"> No file chosen<span>Choose File</span></p>
                    </div>
                    <div class="for-pictures for-provider">

                        <div class="preview" onclick="clearInput()"><img class="showImage" src="#" alt="your image" /><span
                                class="fa fa-times"></span></div>
                    </div>
                    <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
                </div>
        </form>
            @else
            <form action="{{url('updatedetail')}}/{{$updateDetail->id}}" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{csrf_field()}}
                <!-- {{method_field('put')}} -->
                <div class="row">
                    <div class="col-lg-6"><label for="s_name">Name</label><input type="text" id="s_name" name="name" value='{{$updateDetail->name}}'></div>
                    <div class="col-lg-6"><label for="s_dob">DOB</label><input type="text" id="s_dob" name="dob" value='{{$updateDetail->dob}}'></div>
                    <div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input
                            class="file priviewImage removeUrl" id="pic" name="filename" type="file"
                            accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
                        <p class="photo"> No file chosen<span>Choose File</span></p>
                    </div>
                    <div class="for-pictures for-provider">

                    <div class="preview" onclick="clearInput()"><img class="showImage" src="#" alt="your image" /><span
                            class="fa fa-times"></span></div>
                    </div>
                    <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
                </div>
        </form>
        @endif
        </div>
    </div>
</div>

<script type="text/javascript">

    function showCustmoreImage(input) {

            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            }
        }

    $(".priviewImage").change(function() {
        showCustmoreImage(this);
    });
    
    var input = $(".removeUrl");
    function clearInput() {
        input = input.val('').clone(true);
        $('.showImage').removeAttr('src')
        $('.showImage').show();
    };

</script>

@endsection