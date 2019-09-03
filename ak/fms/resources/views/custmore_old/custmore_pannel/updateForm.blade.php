@extends('layouts.custmore_pannel')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-lg-9">
    <div class="working-panel">
        <div class="class-provider">
           
            <h4 class="float-left">Add Family</h4>
          
        </div>
        <div class="class-form for-class">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form id="imageUploadForm" action="javascript:void(0)" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6"><label for="s_name">Name</label><input type="text" id="s_name"
                                    name="name">
                            </div>
                            <div class="col-lg-6"><label for="s_dob">DOB</label><input type="date" id="s_dob"
                                    name="dob"></div>
                             <div class="col-lg-12"><label for="s_name" class="middle">User Type</label>
                            <select name="user_type" id="user_type">
                                <option value="0"> -- Choose type -- </option>
                                <option value="spouse">Spouse</option>
                                <option value="children">Children</option>
                            </select> </div>
                            <div class="col-lg-12"><label for="pic" class="middle">Photos</label>
                                <input class="file priviewImage removeUrl" id="pic" name="filename" type="file"
                                    accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
                                <p class="photo"> No file chosen<span>Choose File</span></p>
                            </div>
                            <div class="for-pictures for-provider">

                                <div class="preview" onclick="clearInput()"><img class="showImage" src="#"
                                        alt="your image" /><span class="fa fa-times"></span></div>
                            </div>
                            <div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
							</div>
                            
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">


$(document).ready(function (e) {

$('#imageUploadForm').on('submit', (function (e) {

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = new FormData(this);
    // formData.append('names', names);
    $.ajax({
        type: 'POST',
        url: './addedfamily',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            alert('new family added');
            window.location.replace('/allFamilyView');
            //$('#original').attr('src', 'public/images/' + data.photo_name);

        },
        error: function (data) {
            console.log(data);
        }
    });
}));
});


    function showCustmoreImage(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".priviewImage").change(function () {
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