
@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        @isset($job)
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{route('index')}}">Home
             <i class="ion-ios-arrow-forward"></i></a></span>
             <a href="{{asset('/jobscategory/'.$job->category->id)}}"> <span>{{$job->category->name}}</span></a></p>
        
        @isset($jobname)
        <h1 class="mb-3 bread">{{$jobname}}</h1>
        @endisset
        <button type="button" class="btn btn-primary btn-lg m-2 text-right" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
        </div>
        </div>
        </div>
        </div>
        <section class="ftco-section ftco-no-pb bg-light no-padding">
        <div class="container">
           
                <div class="row justify-content-center mb-5 pb-2 bg-white shadow">
                
                <div class="col-md-4 mt-5">
                
                <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                             <div>
                             <img src="{{asset('/img-jobs/'.$job->url)}}" class="img-fluid" width="170px">
                                   </div>
                                   <div class="pl-3">
                                      <h5 class="mb-0"> {{$job->title}}</h5>
                                      <small class="d-block text-muted">Posted on: {{$job->created_at->format('d-m-Y')}}</small>
                                      <small class="d-block text-muted">Category: {{$job->category->name}}</small>
                                        </div>
                                    </div>
                                    <div>
                                    <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">  
                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3 shadow-succes">
                                          <i class="fas fa-store-alt"></i>
                                    </div>City: {{$job->city->name}}
                                    </li>
                                    <li class="list-group-item">
                                        <div class="icon icon-shape icon-pallete icon-sm rounded-circle mr-3 shadow-succes">
                                            <i class="fas fa-palette"></i>
                                        </div>Category: {{$job->category->name}}
                                    </li>
                                    <li class="list-group-item">   
                                        <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3 shadow-succes">
                                            <i class="fa fa-cog"></i>
                                        </div>Posted by: {{$job->company_name}}
                                    </li>
                                    <li class="list-group-item">   
                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3 shadow-succes">
                                        <i class="fas fa-check"></i>
                                        </div>{{$job->title_two}}
                                    </li>
                                    <li class="list-group-item">   
                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3 shadow-succes">
                                        <i class="fas fa-check"></i>
                                        </div>{{$job->title_three}}
                                    </li>
                                    <li class="list-group-item">   
                                    Full time : {{$job->fulltime ? 'Yes' : 'No'}}<br>
                                    Part time : {{$job->partime ? 'Yes' : 'No'}}
                                    </li>
                                    <li class="list-group-item">   
                                    Intership : {{$job->intership ? 'Yes' : 'No'}}<br>
                                    Temporary : {{$job->temporary ? 'Yes' : 'No'}}
                                    </li>
                                    <li class="list-group-item">   
                                    Freelance : {{$job->freelance ? 'Yes' : 'No'}}<br>
                                    Fixed : {{$job->fixed ? 'Yes' : 'No'}}
                                    </li>
                                    </ul>
                                  
                                  </div>
                                
                                
                         </span>
                     </div>
                    </div>
                </div>
                <div class="col-md-8 mt-5">
                    <div class="card">
                        <div class="card-body">
                        @if(session('success'))
                <div class="alert" style="background: linear-gradient(to right, #207dff 0%, #a16ae8 100%); color:white">
                    {{session('success')}}
                    <img src="{{asset('/images/')}}/message-job3.png" widht="150px" class="img-fluid">

                </div>
                @endif
                    <h6 class="border-bottom border-gray text-dark pb-2 mb-0">More details about job from id : {{$job->id}} </h6>
                    <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">Posted by: {{$job->user->name}}</strong>
                        {{$job->description}}
                    </p>
                    </div>
                    <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark"></strong>
                        {{$job->description_two}}
                    </p>
                    </div>
                    <p class="mt-4 lh-180 lead text-dark">Salary between :<i class="fas fa-euro-sign"></i><b> 50 000 and 60 0000 per jear</b></p>
                                    <span class="static-rating static-rating-sm">
                                    <i class="star fas fa-star voted text-danger"></i>
                                    <i class="star fas fa-star voted text-danger"></i>
                                    <i class="star fas fa-star voted text-danger"></i>
                                    <i class="star fas fa-star voted text-danger"></i>
                                    <i class="fas fa-star-half-alt voted text-danger"></i>
                                    
                    <small class="d-block text-left mt-3">
                    <a href="http://{{$job->website}}">Website: <b>{{$job->website}}</b></a><br>
                    Email from person who posted this ad:<a href="mailto:{{$job->user->email}}">{{$job->user->email}} </a><Br>
                    <p>User of company or person who posted this ad: <b>{{$job->user->name}}</b></p>
                    <p>Company name: <b>{{$job->company_name}}</b></p>
                    </small>
                    <button type="button" id="apply" class="btn btn-pr btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" style="margin-top:30px;">Apply for this job</button>
                    
                </div>
                </div>
                </div>
               
            </div>
            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title small" id="exampleModalLabel"><b>{{$job->title}}#{{$job->id}}</b> from: {{$job->company_name}} company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form action="{{route('email-apply')}}" method="POST" id="contactform" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="your name">
                    
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="your last name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your email address">
                        </div>
                        <div class="form-group">
                            <label for="cv">Your Cv - if you have it :)</label>
                            <input type="file" class="form-control" id="cv"  name="cv" placeholder="name@example.com">
                        </div>      
                        <p class="small">You can send Us email adress, this message will be send to company who posted this Job({{$job->company_name}})</p>
                        <input type="hidden" name="jobname" value="{{$job->title}}">
                        <input type="hidden" name="jobid" value="{{$job->id}}">
                        <input type="hidden" name="category" value="{{$job->category->name}}">
                        <input type="hidden" name="city" value="{{$job->city->name}}">
                        <input type="hidden" name="emailto" value="{{$job->user->email}}">

                   
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Back</button>
                    <button type="submit" id="job-apply-popup" class="btn btn-primary float-right">Send</button>
                </div>
                </div>
                </form>
            </div>
            </div>
            @endisset
            <hr>
        <div class="row mt-5">
            <div class="col-lg-12 p-3">
            <h3 class="text-center">More popular jobs from this category for you</h3><br>
                @include('components.slider-jobs')
            </div>
        </div>
    </div>
</section>

<div class="col-lg-2 t125">
<div class="fixed">

<a href=""><i class="fa fa-instagram fazz"></i></a>
<a href=""><i class="fa fa-facebook fazz"></i></a>
<a href=""><i class="fa fa-twitter fazz"></i></a>
<a href=""><i class="fa fa-whatsapp fazz"></i></a>
</div>
</div>




@include('components.footer')