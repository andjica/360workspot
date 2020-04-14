
            <div class="card">
                <div class="card-header">Dashboard</div>
                <img src="{{asset('/')}}images/version15.png" width="170" class="img-fluid ml-3 mt-3">
                <div class="card-body bg-light text-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in!<Br>
                    <i class="fas fa-info-circle"></i> Your information:<br>
                    <hr>
                    @isset($user)
                    Name: <b>{{$user->name}}</b><br>
                    Email: <b>{{$user->email}}</b>
                    @endisset<br>
                    @isset($acctype)
                    Current account type: <b>{{$acctype->accounttype->type}} </b><br>
                    Your account type is Valid until: <br>{{$acctype->valid_until}}
                    @endisset
                    <br>
                    <hr>
                    <div class="card text-center pt-3 pb-3 mt-3">
                    <div class="counter col_fourth end">
                    <i class="fas fa-id-card fa-3x"></i>
                    <br>
                    <br>
                        @isset($usercount)
                        <p class="count-text">Total Number of posts - jobs</p>
                        <h2 class="timer count-title count-number" data-to="{{$usercount}}" data-speed="1500"></h2>
                        @endisset
                       </div>
                    </div>
                        <div class="card text-center pt-3 pb-3 mt-3">
                        <i class="fas fa-envelope fa-2x text-danger"></i>
                        <a href="{{route('user-contact')}}">Contact Us</a>

                        
                       </div>
                       @foreach($jobsrandom as $jobr)
                    <div class="card m-3 p-3 text-left" style="width: 18rem;">
                
                        <h5 class="card-title">{{$jobr->title}}</h5><br>
                        <h6 class="card-subtitle mb-2">Salary between<br>{{$jobr->salary->salary_between}}</h6>
                        <p class="card-text">Created at: {{$jobr->created_at->format('d-m-Y')}}</p>
                        <p class="card-text">Expires at: {{$jobr->expires}}</p>
                        <img src="{{asset('/img-jobs/'.$jobr->url)}}" width="157" class="img-fluid">
                        <div class="card-footer text-muted">
                        <a href="{{asset('/edit-job/'.$jobr->id)}}" class="card-link">Edit this post</a>
                        
                        
                    </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
