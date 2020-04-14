<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters">
    						<div class="col-md-2">
								@isset($catweb)
    							<div class="top-category text-center no-border-left active">
    								<h3><a href="#">{{$catweb->name}}</a></h3>
    								<span class="icon flaticon-contact"></span>
    								<p><span class="number">{{$catweb->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
    						</div>
    						<div class="col-md-2">
							@isset($cateducation)
    							<div class="top-category text-center">
    								<h3><a href="#">{{$cateducation->name}}</a></h3>
    								<span class="icon flaticon-mortarboard"></span>
    								<p><span class="number">{{$cateducation->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
    						</div>
    						<div class="col-md-2">
							 @isset($catgraphic)
    							<div class="top-category text-center">
    								<h3><a href="#">{{$catgraphic->name}}</a></h3>
    								<span class="icon flaticon-idea"></span>
    								<p><span class="number">{{$catgraphic->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
							</div>
							
    						<div class="col-md-2">
							@isset($cataccount)
							<div class="top-category text-center">
    								<h3><a href="#">{{$cataccount->name}}</a></h3>
    								<span class="icon flaticon-accounting"></span>
    								<p><span class="number">{{$cataccount->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
    						</div>
    						<div class="col-md-2">
							@isset($catrestourant)
    							<div class="top-category text-center">
    								<h3><a href="#">{{$catrestourant->name}}</a></h3>
    								<span class="icon flaticon-dish"></span>
    								<p><span class="number">{{$catrestourant->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
    						</div>
    						<div class="col-md-2">
							@isset($catheatlt)
    							<div class="top-category text-center">
    								<h3><a href="#">{{$catheatlt->name}}</a></h3>
    								<span class="icion flaticon-stethoscope new" ></span>
    								<p ><span class="number">{{$catheatlt->jobs->count()}}</span> <span>Open position</span></p>
								</div>
								@endisset
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>