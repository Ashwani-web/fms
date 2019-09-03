@extends('layouts.custmore_pannel')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-lg-9">
  <div class="working-panel payment">
  <div class="class-provider">
    <h4 class="float-left">Family</h4>
    <a href="{{url('/addNewFamily')}}" class="float-right">Add Family </a>
  </div>
    <div class="table-responsive max table-header">
      <table class="table table-borderless" id="table">
        <tr>
          <th>S. No.</th>
          <th> Name</th>
          <th>Photo</th>
          <th>Date Of Birth</th>
          <th>Family </th>
          <th colspan="3" style="text-align:center">Action</th>
         
          
        </tr>
        {{ csrf_field() }}

        <?php $i=1; ?>
       
        @foreach($updateDetail as $update)
        <tbody>
          <tr>
            <td>{{$i++}}</td>
            <td>{{$update->name}}</td>
            <td> <img src="{{ url('/images/user_images') }}/{{$update->photo}}" alt="" class="profile-pic">
            </td>
            <td>{{ \Carbon\Carbon::parse($update->dob)->format('d/m/Y')}}</td>
            <td>{{$update->cust_type}}</td>
        
            <td><a href="javascript:void(0)" class="details view" id="view-item" data-item-id="1" class="details view"
                data-id="{{$update->id}}" data-spousename="{{$update->name}}" data-spousedob="{{$update->dob}}"
                data-spousepic="{{ url('/images/user_images') }}/{{$update->photo}}"
                data-childname="{{$update->name}}" data-childPic="{{ url('/images/user_images') }}/{{$update->photo}}"
                data-childdob="{{$update->dob}}">
                <i class="fa fa-eye"></i> View
              </a> </td>
           
            <td>
              <a id="button1" class="details edit" href="javascript:void(0)" data-toggle="modal" data-target="#uploadModal"
                data-id="{{$update->id}}" data-name="{{$update->name}}"
                data-dob="{{$update->dob}}"
                data-photo="/fms/public/images/user_images/{{$update->photo}}"
               ><span class="fa fa-pencil"></span> Edit</a></td>
            <td> <a class="delete-modal details delete" data-id="{{$update->id}}" href="javascript:void(0)" data-title="{{$update->name}}"
                data-description="">
                <span class="fa fa-trash"></span> Delete
         </a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
</div>
  <div id="myModal" class="modal fade delete-box" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header class-provider">
          <h4 class="modal-title"></h4>

        </div>
        <div class="modal-body">
          <div class="deleteContent">
            Are you sure you want to delete
             <span class="title"></span> ?
            <span class="hidden id"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content working-panel payment">
        <div class="modal-header class-provider">
           <h4 class="modal-title">Update family detail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body class-form for-class">
          <!-- Form -->
          <form method='post' action='' enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="fid" value="" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="middle" for="title">Name:</label>
              <input type="name" class="form-control" id="name" value="">
            </div>

            <div class="form-group">
              <label for="pic" class="middle">Photos</label>
              <input class="file priviewImage removeUrl" id="file" name="file" type="file"
                accept="image/x-png,image/jpg,image/jpeg" >
              <p class="photo"> No file chosen<span>Choose File</span></p>
            </div>
            <div class="for-pictures for-provider">

              <div class="preview" onclick="clearInput()">

                <img id="photo" class="showImage" src="" alt="your image" /><span class="fa fa-times"></span>
              </div>
            </div>

            <div class="form-group">
              <label class="middle" for="title">DOB</label>
              <input type="date" class="form-control" id="dob" value="">
            </div>
           
            <input type='button' class='btn btn-info' value='Upload' id='upload'>
          </form>
        </div>

      </div>

    </div>
  </div>




  <div class="modal fade view-modal" id="view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header working-panel class-provider">
          <h4 class="modal-title">View Profile</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="attachment-body-content">
          <form class="form-horizontal class-form for-class" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
            <div class="col-lg-6">
              <div class="after">
              <label class="middle" for="title">Name:</label>
              <input type="name" class="form-control" id="spouseValueName" value="">
            </div>
            <div class="after">
            <label class="middle" for="title">DOB</label>
              <input type="name" class="form-control" id="spouseValuedob" value="">
            </div>
            </div>
              <div class="col-lg-6">
              <div class="preview profile-img" onclick="clearInput()">
                <img id="spouseValuePic" class="showImage" src="" alt="your image" />
              </div>
            </div>
            </div>
            </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">


    //delete function
    $(document).on('click', '.delete-modal', function () {
      $('#footer_action_button').text(" Delete");
      $('#footer_action_button').removeClass('glyphicon-check');
      $('#footer_action_button').addClass('glyphicon-trash');
      $('.actionBtn').removeClass('btn-success');
      $('.actionBtn').addClass('btn-danger');
      $('.actionBtn').addClass('delete');
      $('.modal-title').text('Delete');
      $('.id').text($(this).data('id'));
      $('.deleteContent').show();
      $('#footer_action_button').show();
      $('.form-horizontal').hide();
      $('.title').html($(this).data('title'));
      $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function () {
      $.ajax({
        type: 'post',
        url: './deleteItem',
        data: {
          '_token': $('input[name=_token]').val(),
          'id': $('.id').text()
        },
        success: function (data) {
          $('.item' + $('.id').text()).remove();
          window.location.replace('/allFamilyView');
        }
      });
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



    function showChildImage(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.showChildImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $(".priviewChildImage").change(function () {
      showChildImage(this);
    });

    var input = $(".removeChildUrl");
    function clearInput() {
      input = input.val('').clone(true);
      $('.showChildImage').removeAttr('src')
      $('.showChildImage').show();
    };



  
    $(document).ready(function () {
      /**
       * for showing edit item popup
       */

      $(document).on('click', "#view-item", function () {
        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
        var name = $('#spousedob').val($(this).data('spousedob'));
        $('#spouseValuedob').val($(this).data('spousedob'));
        $('#spouseValueName').val($(this).data('spousename'));
        $('#spouseValuePic').val($(this).data('spousepic'));
        $('#childValueName').val($(this).data('childname'));
        $('#childValuedob').val($(this).data('childdob'));
        $('#spouseValuePic').attr("src", $(this).data('spousepic'));
        $('#childValuePic').attr("src", $(this).data('childpic'));
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

    $(document).on('click', "#button1", function () {
      $('#fid').val($(this).data('id'));
      $('#name').val($(this).data('name'));
      $('#dob').val($(this).data('dob'));
      $('#photo').attr("src", $(this).data('photo'));
      })
    
      $('#upload').click(function () {
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        var id = $("#fid").val();
        var name = $('#name').val();
        var dob = $('#dob').val();
        fd.append('file', files);
        fd.append('id', id);
        fd.append('name', name);
        fd.append('dob', dob);
        $.ajaxSetup({

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        // AJAX request
        $.ajax({
          url: 'test',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response != 0) {
              alert('file uploaded');
              // Show image preview
              window.location.replace('/allFamilyView');
              //$('#preview').append("<img src='"+response+"' width='100' height='100' style='display: inline-block;'>");
            } else {
              alert('file not uploaded');
            }
          }
        });
      });
  

  </script>
  @endsection