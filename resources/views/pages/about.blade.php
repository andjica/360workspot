
@include('components.header')
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

			  
			  <li class="nav-item"><a href="{{route('users-all')}}" class="nav-link text-dark">Users</a></li>
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
					<li class="nav-item"><a href="{{asset ('./about#community')}}" class="nav-link text-dark">Community</a></li>
					<li class="nav-item"><a href="{{asset ('/about#events')}}" class="nav-link text-dark">Events & More</a></li>
					<li class="nav-item"><a href="{{asset ('')}}" class="nav-link text-dark">Affiliate marketing</a></li>
					<li class="nav-item"><a href="{{asset ('./')}}" class="nav-link text-dark">Privacy & Terms</a></li>
					<li class="nav-item"><a href="{{asset ('./')}}" class="nav-link text-dark">Invite Friends</a></li>
					<li class="nav-item"><a href="{{asset ('./')}}" class="nav-link text-dark">For Investors</a></li>
					<li class="nav-item"><a href="{{asset ('./')}}" class="nav-link text-dark">Help & Support</a></li>

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
    float: left;
	left: -300%;
	column-count: 4;
	border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
		}
	}

	.novic1{
			width: 1032px;
			    position: absolute;
    float: left;
    left: -332%;
	column-count: 4;
	border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
		}
	}
	</style>


<div class="image-aboutus-banner"style="margin-top:170px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
         
       </div>
    </div>
</div>
</div>

<div class="aboutus-secktion paddingTB60">
    <div class="container">
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">Who we are and<br>what we do</h1>
                        <p class="lead">This is the world's leading portal for<br>jobs & oppertunity's </p>
                    </div>
                    <div class="col-md-6">
                    	<p>Workspot360 strongly believes that the people in de creative industry are the pillars of the world. 
                        Workspot360 created a online world where creatives come together and build high quality network, where we can learn together, grow together and work together.
                        Safe time finding the right expertise, because everything is in one spot.</p>
                        <p>Be in direct contact, get unlimited access, get hired and do not worry about margins.
                        Workspot360 is an international platform so your access to thousands of creatives are 24/7.
                        Be your own boss and work with the creatives that are relevant to you.</p>
                    </div>

             




</div>
    </div>
</div>
<div class="aboutus-secktion paddingTB60 mt-5" id="community">
    <div class="container">
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">The 360Workspot Community<br></h1>
                        <p class="lead">Our big community leads to succes in early stages </p>
                        <br>
                        <img src="{{asset ('/')}}images/12.jpg" style="width: 100%;">
                        <br>
                        <img src="{{asset ('/')}}images/13.jpg" style="width: 100%;">

                    </div>
                    <div class="col-md-6">
                   
                   <p> We’re a community of innovators, doers, and hustlers made stronger by our diversity.
                    We welcome you to be who you are, share, create, and belong. When it comes down to it, 
                    we’re more alike than we are different. We’re all in this together and together we can be a force for good.</p>
                    <br>
                    <p>(we believe in) acss for everyone</p>
                    <br>
                    <p>We believe in access to quality communication for everyone. Communication opens up doors, 
                    breaks down barriers, fosters growth and collaboration. It’s the building block for change.
                     Equality, creativity, humanity have no boundaries.</p>

                     <p>We’ll be the first to admit we’ve cried over missed opportunities and epic fails. But we’ve always learned more from our failures than successes.
The thing is, whether we’re up or down, connecting with community throughout the creative journey keeps us grounded and keeps us going. 
We’re here to champion you, to support what you do, celebrate your voice, and lift up your spirits.</p>
<Br>

<p>Dreams won’t work if you don’t. They never happen overnight and they rarely follow a straight line.
 Excellence is the result of the hustle - consistently pushing to do better. And success looks different for everyone. 
We chart paths and tailor content for students, but we also encourage independent thinking and exploration.</p>
<br>
<p>
 Go outside of your comfort zone. Who knows? You might like it.
Join the WORKSPOT360 community where dreamers become doers and step their game up. 
We don’t stop until we outworked the competition and reach our goal! Sign up, get inspired, 
share and lets build together.</p>
<br>
<p>
JOIN THE COMMUNITY
Join millions of dreamers and doers who are upping their game every day. Sign up to access thousands of creatieve opportunities taught by industry greats
</p>
                    </div>

             




</div>
    </div>
</div>

<div class="aboutus-secktion paddingTB60 mt-5" id="events">
    <div class="container">
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">Workspot360 Recruit on the road</h1>
                        <p class="lead">Recruitment is all about building lasting relationships. <Br> That's why we travel the globe to interact with professionals like you. </p>
                    <Br>
                    <img src="{{asset ('/')}}images/login.jpg" style="width: 100%;">

                    </div>
                    <div class="col-md-6">
                   <p> Workspot360 Recruit on the road.  <p>
                   <Br>
                   <p>Recruitment is all about building lasting relationships. That's why we travel the globe to interact with professionals like you. We'll be exhibiting at these upcoming events. Meet us and learn how Workspot360 simplifies your hiring process and fill more job openings than ever before.
Looking for a event to chat with likeminded professionals? 
Or maybe you can’t wait to meet that person who inspired you.
 There is always a event that suites you. From training and 
 networking to crazy private party’s sign up and stay up to date.  </p>
 <Br>
 <p>
Building one honest network together
Workspot strongly believes in the power of collaboration. Together with Jellow, 
companies and 34,575 index freelancers are building a fair and high-quality network, 
which will all benefit us. The way to grow quickly together and to have the right
expertise without needing the help of an intermediary.
Unlimited access, direct contact and hiring without margins </p>

<br>
<p>
With Workspot you get direct and 24/7 access to thousands of freelancers active in business services, from interim manager to developer lawyer. Take control and easily select the freelancers that are relevant to you. You can do that with the smart software, or you can ask one of the Jellowers to help you. Jellow is software with a service.

With a freelance pool you keep the best freelancers and you never lose data again. We arrange the basics. In no time we build a swimming pool for you with the best freelancers in your field and in your area. Freelancers are then invited to join, with whom you would like to collaborate in the future.
Welcome to Jellow!
Be instantly found by 2,224 top companies with a free account.
</p>

                    </div>

             




</div>
    </div>
</div>

<div class="aboutus-secktion paddingTB60 mt-5">
    <div class="container">
        <div class="row">
                	<div class="col-md-6">
                    	<h1 class="strong">Your Future is Bright with <br>360 Workspot</h1>
                        <p class="lead">This is the world's leading portal for<br>jobs & oppertunity's </p>
                    </div>
                    <div class="col-md-6">
                    	<p>Workspot360 strongly believes that the people in de creative industry are the pillars of the world. 
                        Workspot360 created a online world where creatives come together and build high quality network, where we can learn together, grow together and work together.
                        Safe time finding the right expertise, because everything is in one spot.</p>
                        <p>Be in direct contact, get unlimited access, get hired and do not worry about margins.
                        Workspot360 is an international platform so your access to thousands of creatives are 24/7.
                        Be your own boss and work with the creatives that are relevant to you.</p>
                    </div>

             




</div>
    </div>
</div>
	
	    
</div>
</div>

<Br>
@include('components.footer')


