@extends('layouts.custmore_pannel')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="col-lg-9">
  <div class="working-panel">
    <div class="class-provider">
      <h4 class="float-left">Update Profile</h4>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success">
      {{ session::get('message') }}
    </div>
    @endif



    <div class="class-form for-class">

      <form action="{{url('/uplodeprofile')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-12"><label for="co_name" class="middle">Name</label> <input type="text" name="custmor_name"
              required id="c0_name" value="{{$getData->name}}" autocomplete="off">
          </div>
          <div class="col-lg-6"><label for="co_email">Email</label>
            <input type="email" name="email" id="co_email" value="{{$getData->email}}" required autocomplete="off">
          </div>
          <div class="col-lg-6"><label for="co_phone">Phone No.</label>
            <input type="number" id="co_phone" name="phone_number" value="{{$getData->phone_number}}" required
              autocomplete="off">
          </div>

          <div class="col-lg-12"><label for="address" style="vertical-align: top">Address</label><textarea
              name="custmore_address" id="address" cols="30" rows="3">{{$getData->address}}</textarea></div>
          <div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input
              class="file priviewImage removeUrl" id="pic" name="filename" type="file"
              accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
            <p class="photo"> No file chosen<span>Choose File</span></p>
          </div>
          <div class="for-pictures for-provider">

            <div class="preview" onclick="clearInput()"><img class="showImage"
                src="/fms/public/images/user_images/{{$getData->photo}}" alt="your image" /><span
                class="fa fa-times"></span></div>
          </div>
          <div class="col-lg-6"><label for="dob">DOB</label> <input name="custmore_dob" type="date" id="dob"
              value="{{$getData->dob}}"></div>
          <div class="col-lg-6"><label for="facebook">Facebook ID</label> <input name="facebook_id" type="text"
              id="facebook" value="{{$getData->facebook_id}}"></div>
          <div class="col-lg-12"><label for="id_card" class="middle">Identification number</label> <input id="id_card"
              name="id_card_number" value="{{$getData->id_card_number}}" type="text"
              placeholder="any one – Passport, DL, Aadhaar, PAN, Voter ID" style="width: calc(100% - 170px)"></div>

          <div class="col-lg-6"><button class="submit" type="submit">Update</button></div>

        </div>
      </form>
      <!-- <td><a ref="javascript:void(0)" class="details view" id="view-item" data-item-id="1" class="details view"
          data-userName="{{$getData->name}}" data-userEmail="{{$getData->email}}"
          data-userPhone="{{$getData->phone_number}}"
          data-userImage="/fms/public/images/user_images/{{$getData->photo}}" data-userAddrr="{{$getData->address}}"
          data-userDob="{{$getData->dob}}" data-userIdNum="{{$getData->facebook_id}}"
          data-userFbid="{{$getData->id_card_number}}">
          <i class="fa fa-eye"></i>View Profile
        </a> </td> -->
      <!-- <div class="col-lg-6"><button class="submit" type="submit" id="view-item">View Profile</button></div> -->
    </div>
  </div>
</div>


<div class="modal fade" id="view-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header working-panel class-provider">
        <h4 class="modal-title">View Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <form action="#">
          <div class="row">
            <div class="col-lg-6">
              <div class="after"><label for="co_name" class="middle">Name</label> <input type="name"
                  class="form-control" id="userNames" value="">
              </div>
              <div class="after">
                <label for="co_email">Email</label>
                <input type="text" class="form-control" name="userEmail" id="userEmail" value="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="profile-img"><img id="userImage" src="" alt="" class="profile">
              </div>
            </div>
            <div class="col-lg-12"><label for="co_phone ">Phone No.</label>
              <input type="name" class="form-control" id="userPhone" value="">
            </div>
            <div class="col-lg-12"><label for="address" style="vertical-align: top">Address</label> <input type="name"
                class="form-control" id="userAddrr" value="">
            </div>
            <div class="col-lg-6"><label for="dob">DOB</label> <input type="name" class="form-control" id="userDob"
                value=""></div>
            <div class="col-lg-6"><label for="facebook">Facebook ID</label> <input type="name" class="form-control"
                id="userFbid" value=""></div>
            <div class="col-lg-12"><label for="id_card" class="middle">Identification number</label>
              <input type="name" class="form-control" id="userIdNum" value="">

            </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">


  // $(document).ready(function (e) {

  // $('#imageUploadForm').on('submit', (function (e) {

  //     $.ajaxSetup({

  //         headers: {
  //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //         }
  //     });
  //     e.preventDefault();
  //     var formData = new FormData(this);
  //     // formData.append('names', names);
  //     $.ajax({
  //         type: 'POST',
  //         url: './addedfamily',
  //         data: formData,
  //         cache: false,
  //         contentType: false,
  //         processData: false,
  //         success: function (data) {
  //             alert('added');
  //             //$('#original').attr('src', 'public/images/' + data.photo_name);

  //         },
  //         error: function (data) {
  //             console.log(data);
  //         }
  //     });
  // }));
  // });



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
<script>
  $(document).ready(function () {
    /**
     * for showing edit item popup
     */

    $(document).on('click', "#view-item", function () {


      //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
      $('#userNames').val($(this).data('username'));
      $('#userEmail').val($(this).data('useremail'));
      $('#userImage').attr("src", $(this).data('userimage'));
      $('#userPhone').val($(this).data('userphone'));
      $('#userAddrr').val($(this).data('useraddrr'));
      $('#userDob').val($(this).data('userdob'));
      $('#userFbid').val($(this).data('userfbid'));
      $('#userIdNum').val($(this).data('useridnum'));
      var options = {
        'backdrop': 'static'
      };
      $('#view-modal').modal(options)
    })
    // on modal show

    $('#view-modal').on('show.bs.modal', function () {

    })
    $('#view-modal').on('hide.bs.modal', function () {
      $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
      $("#edit-form").trigger("reset");
    })

  })


</script>
@endsection