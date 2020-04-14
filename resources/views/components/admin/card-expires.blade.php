@isset($lastjob)
            
            @isset($acctype)
            <h3 class="text-white"><b>{{$acctype->type}} account</b></h3>
            @endisset
            <a href="{{route('pricing')}}" class="card-link btn btn-warning btn-lg"><i class="fab fa-paypal"></i>Go to upgrade your account</a>
            </div>
            <br>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="row">
            @foreach($jobs as $job)
            <div class="card m-3" style="width: 18rem;">
            <div class="card-body text-dark">
                <h5 class="card-title">{{$job->title}}</h5><br>
                <h6 class="card-subtitle mb-2">Salary between<br>{{$job->salary->salary_between}}</h6>
                <p class="card-text">Created at: {{$job->created_at->format('d-m-Y')}}</p>
                <p class="card-text">Expires at: {{$job->expires}}</p>
                <img src="{{asset('/img-jobs/'.$job->url)}}" width="157" class="img-fluid">
                <div class="card-footer text-muted">
                <a href="{{asset('/edit-job/'.$job->id)}}" class="card-link">Edit this post</a>
                
                </div>
            </div>
            </div>
            @endforeach
            </div>
            @endisset