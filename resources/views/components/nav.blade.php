<nav class="navbar navbar-expand-lg navbar-light bg-primary px-md-4 no-dp" style="width: 100%;">
		<div class="collapse navbar-collapse d-flex justify-content-center mr-right" id="navbarNavAltMarkup">
			<div class="navbar-nav ">
			<a class="nav-item nav-link active mt-2 text-white no-dp" href="#"><i class="fas fa-paper-plane"></i> info@360workspot.com</a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<li class="nav-item"><a href="{{route('jobs-all')}}" class="nav-link  text-white btn btn-sm style-orange mt-2">Want a Job</a></li>

			</div>
		</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
	    <div class="container px-md-4">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse justify-content-center" id="ftco-nav">
	        <ul class="navbar-nav ">
			<li class="nav-item active"><a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('/')}}images/version15.png" width="160" class="img-fluid"></a></li>

	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link text-primary">Home</a></li>
	          <li class="nav-item"><a href="{{route('jobs-all')}}" class="nav-link text-dark">All Jobs</a></li>

			  <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle bg-none text-black" style="padding-top: 16px;
    color: black !important;
    background: none !important;
    border: none !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Browse Jobs
				</button>
			<div class="dropdown-menu collapse novic" aria-labelledby="dropdownMenuButton">
			@foreach($categories as $category)
				<a class="dropdown-item" href="{{asset('/jobscategory/'.$category->id)}}">{{$category->name}} <span>({{$category->jobs->count()}})</span></a>
			@endforeach
			</div>
			</div>
			  <li class="nav-item"><a href="{{route('users-all')}}" class="nav-link text-dark">Users</a></li>
			  <li class="nav-item"><a href="{{route('blogs-all')}}" class="nav-link text-dark">Blogs</a></li>
	          <li class="nav-item"><a href="{{route('register')}}" class="nav-link text-dark">Register</a></li>
			  <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-dark">Login</a></li>
			  <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-dark">Contact</a></li>
			 
			  @auth
	          <li class="nav-item cta mr-md-1"><a href="{{asset('/home')}}" class="nav-link">Post a Job</a></li>
	          
			  @endauth
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	<style>
	@media screen and (min-width:928px){
		.novic{
			width: 1032px;
			    position: absolute;
    float: left;
	left: -332%;
	column-count: 4;
		}
	}
	</style>