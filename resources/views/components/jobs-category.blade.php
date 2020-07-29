
            <div class="row" id="jobsall">
                @foreach($jobs as $job)
                
                <div class="col-md-12 ftco-animate">
                
                    <div class="job-post-item p-4 d-block d-lg-flex align-items-center shadow">
                    <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header align-items-center">

                   
                    <img src="{{asset('/img-jobs/'.$job->url)}}" class="img-fluid" width="170px" style="width:15%;">
                    <h4 class="mr-3 text-dark">Category:@isset($categoryname) {{$categoryname->name}} @endisset, &nbsp;
                    {{$job->category->name}}, <Br>&nbsp;{{$job->title}}</h4>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3">
                    
                    <span class="icon-my_location"></span>Location: {{$job->city->name}}, &nbsp;Posted on: {{$job->created_at->format('d-m-Y')}}</div>
                    
                    </div>
                    <span class="subadge text-muted"><i class="fas fa-euro-sign"> {{$job->salary->salary_between}} </i> Yearly based</span><br>
                    <span class="subadge text-muted">Posted by {{$job->company_name}} </span><br>
                    </div>
                    <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                    <span class="icon-heart"></span>
                    </a>
                    </div>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary py-2">Apply Job</a>
                    </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        <div class="row mt-5">
        <div class="col text-center">
        <div class="block-27">
        <ul>
        <li>  {{$jobs->links()}}</li>

        </ul>
        </div>
        </div>
        </div>