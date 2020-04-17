@include('components.header')
@include('components.nav')

<div class="hero-wrap img" style="background-image: url(images/city2.jpg);">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
	        		<p class="mb-4">Find a Job, Employment, and Career Opportunities</p>
	            <h1 class="mb-5">360WORKSPOT will find for you a new Job</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="46">0</strong>
					                <span>Countries</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="450">0</strong>
					                <span>Companies</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="80000">0</strong>
					                <span>Active Employees</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
			@include('components.main-search')
</div>
	        </div>
	    	</div>
			

      </div>
    </div>
@include('components.categories-static')
@include('components.top-categories')
@include('components.title-icon')
	<div class="container">
	<div class="row mt-5 mb-5">
	<div class="col-lg-12 p-5">
		<h3 class="text-center">Our blogs</h3><br>
	@include('components.slider-blogs')
	</div>
	</div>
	</div>
	@include('components.subscribe')
	<div class="container">
	<div class="row mt-5 mb-5">
	<div class="col-lg-12 p-5">
		<h3 class="text-center">Our popular jobs</h3><br>
	@include('components.slider-jobs')
	</div>
	</div>
	</div>
	<div class="col-lg-2 t125">
<div class="fixed">

<a href=""><i class="fa fa-instagram fazz"></i></a>
<a href=""><i class="fa fa-facebook fazz"></i></a>
<a href=""><i class="fa fa-twitter fazz"></i></a>
<a href=""><i class="fa fa-whatsapp fazz"></i></a>
</div>
</div>
@include('components.footer')
