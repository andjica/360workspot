<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Job Categories</span>
            <h2 class="mb-0">Explore your Workspot</h2>
          </div>
        </div>
        <div class="row">
		@foreach($categoriesall as $categoryone)
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
					<li><a href="{{asset('/jobscategory/'.$categoryone->id)}}" class="findid">{{$categoryone->name}} <br>
					<span class="number">{{$categoryone->jobs->count()}}</span> <span>Open position</span>
					<i class="ion-ios-arrow-forward"></i>
					</a></li>
				</ul>
        	</div>
        	@endforeach
			<ul class="list-group mx-auto d-block">
        	<li class="list-group mt-3">  {{$categoriesall->links()}}</li>
        	</ul>
        </div>
    	</div>
    </section>