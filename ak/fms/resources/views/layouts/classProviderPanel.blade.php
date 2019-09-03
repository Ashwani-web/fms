<!DOCTYPE html>
<html>
@include('classProvider.include.head')
 

<body>
	<!--Nav bar Started.-->
	@guest
	@include('classProvider.include.header')
	<!--Nav bar Ended.-->
	<section class="dashboard">
		<div class="container-fluid">
			<div class="row">
			   
                @include('classProvider.include.sidebar')
                @yield('content')
                 
			</div>
		</div>
	</section>
        @else
        
		@include('classProvider.include.header')
		 <section class="dashboard">
		   <div class="container-fluid">
			<div class="row">
			    @include('classProvider.include.sidebar')
                @yield('content')
             
 
			</div>
		</div>
	</section>
	@endguest
     
</body>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html>
