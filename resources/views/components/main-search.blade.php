
<div class="ftco-search my-md-5">
					<div class="row">
			            <div class="col-md-12 nav-link-wrap">
				            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				              <a class="nav-link active mr-md-1 " id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

				              <a class="nav-link bg-light" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
								  <img src="{{asset('/')}}images/version15.png" class="img-fluid" width="105">
							  </a>

				            </div>
				          </div>
				          <div class="col-md-12 tab-wrap">
						<div class="tab-content p-4" id="v-pills-tabContent">

				        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
				        <form action="{{route('jobs')}}" method="GET" class="search-job">
				        	<div class="row no-gutters">
				              			<!--<div class="col-md mr-md-2 text-right">
										  <i class="fas fa-briefcase fa-3x text-primary"></i>	
										  <i class="fas fa-map-marker-alt fa-3x text-primary "></i>			              			
										</div>-->
				              		<div class="col-md mr-md-4">
				              				<div class="form-group">
				              					<div class="form-field">
					              				<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
												  <select class="js-example-basic-single form-control search-slt border-warning bg-light sm-select2" name="categorysearch">
													<option value="">Category</option>
														@foreach($categories as $category)
															<option value="{{$category->id}}">{{$category->name}}</option>
														@endforeach
													</select>
												</div>
												<p class="text-danger" id="er-category"></p>
									        </div>
								        </div>
				              		</div>
									  <div class="col-md mr-md-4">
				              				<div class="form-group">
				              					<div class="form-field">
					              				<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
												  <select class="js-example-basic-single2 form-control search-slt border-warning bg-light sm-select2" name="citysearch">
													<option value="">City</option>
														@foreach($cities as $city)
															<option value="{{$city->id}}">{{$city->name}}</option>
														@endforeach
													</select>
												</div>
												<p class="text-danger" id="er-city"></p>
									        </div>
								        </div>
				              		</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>

				            </div>
				          </div>
				        </div>
			        </div>

