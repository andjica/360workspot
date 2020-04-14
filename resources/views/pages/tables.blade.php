@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')
<div class="container">
    @if($countjobs == 0)
    <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully made a free account.  Only you have to do is to  <a href="{{route('home')}}">go to this link</a> and make a new Job.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure that is 360WorkSpot always think about users, and fore more infomration you can contact us by this link</p>
        </div>
    @else
    @foreach($jobs as $job)
    <div class="row shadow-sm m-4">
        
    <div class="col-md-8 blog-main mt-3 mb-5 p-3">
    
       
      <div class="blog-post">
        <h2 class="blog-post-title">#{{$job->id}} {{$job->title}}</h2>
        <p class="blog-post-meta">Posted on {{$job->created_at->format('d-m-Y')}}, by {{$job->user->name}}</p>
        <p class="blog-post-meta">Expires on {{$job->expires}}</p>
        <p>Category: {{$job->category->name}}<br>
           City: {{$job->city->name}}
        </p>
        <hr>
        <h2>Description one</h2>
        <p>{{$job->description}}</p>
        
        <h2>Description two</h2>
        <p>{{$job->description_two}}</p>
    
        <p>Company name: {{$job->company_name}}<br>
        Website: <a href="http://{{$job->website}}">{{$job->company_name}}</a></p>
        
        <a  href="{{asset('/edit-job/'.$job->id)}}" class="btn btn-sm btn-outline-secondary btn-primary text-white"><i class="fas fa-edit"></i>Edit this job</a>
      </div>
  
    </div>
    <div class="col-md-4 blog-main mt-4 mb-5">
        <img src="{{asset('/img-jobs/'.$job->url)}}" class="img-fluid">
        <h3 class="mt-5">Working time</h3>
        
        <ul>
          <li>Fulltime:<input type="checkbox" name="fulltime" id="fulltime" value="1"<?php echo ($job->fulltime == 1 ? ' checked' : '');?> disabled></li>
          <li>Parttime:<input type="checkbox" name="partime" id="partime" value="1"<?php echo ($job->partime == 1 ? ' checked' : '');?> disabled></li>
          <li>Intership:<input type="checkbox" name="intership" id="intership" value="1"<?php echo ($job->intership == 1 ? ' checked' : '');?> disabled></li>
          <li>Temporary:<input type="checkbox" name="temporary" id="temporary" value="1"<?php echo ($job->temporary == 1 ? ' checked' : '');?> disabled></li>
          <li>Freelance:<input type="checkbox" name="freelance" id="freelance" value="1"<?php echo ($job->freelance == 1 ? ' checked' : '');?> disabled></li>
          <li>Fixed:<input type="checkbox" name="fixed" id="fixed" value="1"<?php echo ($job->fixed == 1 ? ' checked' : '');?> disabled><br>    </li>
        </ul>
        <hr>
        <h3>Titles</h3>
        <ol>
          <li>{{$job->title}}</li>
          <li>{{$job->title_two}}</li>
          <li>{{$job->title_three}}</li>
        </ol>
        
    </div>
</div>

@endforeach
<div class="row mb-5 ml-4">
        <ul class="list-group">
        <li class="list-group">  {{$jobs->links()}}</li>

        </ul>
        </div>
        @endif
</div>

@include('components.admin.footer')