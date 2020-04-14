<div class="col-lg-3 sidebar shadow-sm mt-2">
        <div class="sidebar-box bg-white  ftco-animate ">
        <h3 class="heading-sidebar"><i class="fas fa-sort  text-warning p-1 mt-1 rounded"></i> &nbsp; Filter your job</h3>
        
        <form action="{{route('search')}}" method="GET" class="browse-form" id="my-form">
                @csrf
                <select  class="js-example-basic-single  form-control search-slt border-warning bg-light sm-select2" id="sel_depart" name="categorysearch">
		        <option value="">Category</option>
			@foreach($categories as $category)
				<option value="{{$category->id}}" class="cats">{{$category->name}}</option>
			@endforeach
                </select>
                <p class="text-danger" id="cat-mistake"></p>
        
                <select class="js-example-basic-single2 form-control search-slt border-warning bg-light sm-select2" id="sel_depart2" name="citysearch">
			<option value="">City</option>
				@foreach($cities as $city)
					<option value="{{$city->id}}">{{$city->name}}</option>
				@endforeach
		</select>
                <p class="text-danger" id="city-mistake"></p>
                <select  class="js-example-basic-single3  form-control search-slt border-warning bg-light sm-select2" id="sel_depart3" name="salarysearch">
		        <option value="">Salary</option>
			@foreach($salaries as $salary)
				<option value="{{$salary->id}}" class="cats">{{$salary->salary_between}}</option>
			@endforeach
                </select>
                <p class="text-danger" id="salary-mistake"></p>
              

        </div>
        
        <div class="sidebar-box bg-white p-2 ftco-animate">
        <h3 class="heading-sidebar">Job Type</h3>
        <label for="option-job-type-1"><input type="checkbox" id="option-job-type-1" name="part" value="1" checked> Partime</label><br>
        <label for="option-job-type-2"><input type="checkbox" id="option-job-type-2" name="full" value="2"> Fulltime</label><br>
        <label for="option-job-type-3"><input type="checkbox" id="option-job-type-3" name="inter" value="3"> Intership</label><br>
        <label for="option-job-type-4"><input type="checkbox" id="option-job-type-4" name="temp" value="4"> Temporary</label><br>
        <label for="option-job-type-5"><input type="checkbox" id="option-job-type-5" name="free" value="5"> Freelance</label><br>
        <label for="option-job-type-6"><input type="checkbox" id="option-job-type-6" name="fx" value="6"> Fixed</label><br>
     
        <button type="submit" class="btn btn-warning " style="width:100%"><i class="fas fa-search"></i> Search</button>
        </form>
        </div>
        <div class="sidebar-box">
        <div class="sidebar-box ftco-animate">
                    <h3 class="heading-3">Recent Blog</h3>
                    @foreach($blogsfilter as $bf)
                    <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url('{{asset('/img-blogs/'.$bf->url)}}');"></a>
                    <div class="text">
                    <h3 class="heading"><a href="{{asset('/blog/'.$bf->id)}}">{{$bf->title}}</a></h3>
                    <div class="meta">
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-calendar"></span> {{$bf->created_at->format('d-m-Y')}}</a></div>
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-chat"></span> 19</a></div>
                    </div>
                    </div>
                    </div>
                    @endforeach
                    </div> 
                    <div class="sidebar-box ftco-animate">
                    <div class="categories">
                    <h3 class="heading-3">Jobs</h3>
                    @foreach($categories as $category)
                    <li><a href="{{asset('/jobscategory/'.$category->id)}}">{{$category->name}} <span>{{$category->jobs->count()}}</span></a></li>
                    @endforeach
                   
                    </div>
                    </div>
                       
            </div> 
        </div>