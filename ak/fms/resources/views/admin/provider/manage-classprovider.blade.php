@extends('layouts.auth')
@section('content')
<div class="col-lg-9">
					<div class="working-panel">
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
						<div class="max class-provider">
							<h4 class="float-left">Class Provider</h4>
							<a href="{{ url('/admin/add-class-provider') }}" class="float-right">Add</a>
						</div>
						<div class="max table-header">
							<table style="width: 100%">
								<thead>
									<tr>
										<th>S.No.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone No.</th>
										<th>Address</th>
										<th>Review</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $number = 1; ?>
									@foreach( $classprovider as $cp) 

									
									<tr>
									    <td>{{ $number++ }}</td>
										<td>{{$cp['name']}}</td>
										<td>{{$cp['email']}}</td>
										<td>{{$cp['phone_number']}}</td>
										<td>{{$cp['address']}}</td>
										<td>{{$cp['']}}</td>
										<td><a class="edit" href="{{action('AdmincpController@editclassProvider', $cp['id'])}}">Edit</a> | <form style="display:inline-block" action="{{action('AdmincpController@destroy',$cp['id'])}}" method="post">

{{ csrf_field() }}
<input name="_method" type="hidden" value="DELETE">
<button class="delete" onclick="return myFunction();" style="border: none;background: #fff;" type="submit">Delete</button>

</form> </td>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>

		

										
									</tr>
								 
									@endforeach
								</tbody>
							</table>
						</div>
						 
						<div class="pagination-block">
						{{ $classprovider->links() }}
						</div>
						 
					</div>
				</div>
            </div>
            @endsection