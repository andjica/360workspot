<nav class="navbar navbar-expand-lg navbar-light bg-primary px-md-4 no-dp" style="width: 100%;">
		<div class="collapse navbar-collapse d-flex justify-content-center mr-right" id="navbarNavAltMarkup">
			<div class="navbar-nav ">
			<a class="nav-item nav-link active mt-2 text-white no-dp" href="#"><i class="fas fa-paper-plane"></i> info@360workspot.com</a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a class="nav-item nav-link mt-2 text-white no-dp" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<li class="nav-item"><a href="{{route('jobs-all')}}" class="nav-link  text-white btn btn-sm style-orange mt-2">Post a Job</a></li>

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
    border: none !important;" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Browse Jobs
				</button>
			<div class="dropdown-menu collapse novic" aria-labelledby="dropdownMenuButton1">
			<div class="col-lg-6">
			@foreach($categories as $category)
				<a class="dropdown-item" href="{{asset('/jobsby-category/'.$category->id)}}" name="catid">{{$category->name}} <span>({{$category->jobs->count()}})</span></a>
			@endforeach
			</div>

			<div class="col-lg-6">
				<img src="{{asset ('/')}}images/12.jpg" style="width: 520px;
    position: relative;
    right: -200px;
    border-radius: 20px;
    height: 300px;">
			</div>
			</div>
			</div>
			  <li class="nav-item"><a href="{{route('users-all')}}" class="nav-link text-dark">Creative Talents</a></li>
			  <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle bg-none text-black" style="padding-top: 16px;
    color: black !important;
    background: none !important;
    border: none !important;" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					About & Features
				</button>
			<div class="dropdown-menu collapse novic1" aria-labelledby="dropdownMenuButton2">
				<div class="col-lg-12">
					<div class="">
					<li class="nav-item"><a href="{{asset ('./about')}}" class="nav-link text-dark">About 360 Workspot</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Community</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Events & More</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Affiliate marketing</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Privacy & Terms</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Invite Friends</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">For Investors</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-dark">Help & Support</a></li>

					</div>
					<div class="col-lg-5">
					<img src="{{asset ('/')}}images/13.jpg" style="     width: 520px;
    float: left;
    text-align: center;
    padding-right: 120px;
    height: 320px;">
					</div>
				</div>
			</div>
			</div>
			  @if(auth()->user())
			  <li class="nav-item"><a href="{{route('logout')}}" class="nav-link text-dark">Logout</a></li>
			  @else
			  <li class="nav-item"><a href="{{route('register')}}" class="nav-link text-dark">Get Started</a></li>
			  <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-dark">Login</a></li>
			  <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-dark">Contact</a></li>
			  @endif
	         
			  @if(auth()->user())
			  	@if(auth()->user()->role_id == 2)
				  <li class="nav-item cta mr-md-1"><a href="{{asset('/home')}}" class="nav-link">Post a Job</a></li>
				@elseif(auth()->user()->role_id == 3)
					<li class="nav-item cta mr-md-1"><a href="{{asset('/home')}}" class="nav-link">User Panel</a></li>
				@else

				@endif
			  @else
	          
	          @endif
			 
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
				float: left !important;
    left: -340px !important;
	column-count: 4;
	border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
		}
	

	.novic1{
			width: 1032px;
			    position: absolute;
    float: left;
	left: -396% ;
	column-count: 4;
	border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
		}
	}
	</style>