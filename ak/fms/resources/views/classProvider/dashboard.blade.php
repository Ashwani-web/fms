
@extends('layouts.classProviderPanel')
@section('content')

	<div class="col-lg-9">
		<div class="working-panel">
			
			<div class="max class-provider">
				<h4 class="float-left"> Welcome to class provider panel</h4>
			</div>
			@if (Session::has('message'))
			<div class="alert alert-success">
				{{ session::get('message') }}
			</div>
		@endif
		</div>
	</div>

@endsection