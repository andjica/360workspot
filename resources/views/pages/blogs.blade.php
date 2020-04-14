@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">
@if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
    <div class="row">
    <div class="col-md-8 my-4  rounded p-3">
        @if($countblogs == 0)
            <div class="alert alert-danger">Sorry, there is no blogs in database, <br>
                <a href="{{route('create-blog')}}" class="btn btn-info">Create a new one</a>
            </div>
    
        @else
        <div class="row">
       
        @foreach($blogs as $blog)
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top mx-auto" src="{{asset('/img-blogs/'.$blog->url)}}">
                <div class="card-body">
                  <p class="card-text"> {{$blog->title}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{asset('/blog/'.$blog->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="{{asset('/edit-blog/'.$blog->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit text-primary"></i>Edit</a>
                      <a href="{{asset('/delete-blog/'.$blog->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-trash-alt text-danger"></i>Delete</a>
                    </div>
                    
                  </div>
                </div>
                </div>
            </div>
            @endforeach
            <ul class="list-group">
                <li class="list-group">  {{$blogs->links()}}</li>
            </ul> <br><br>
            <a href="{{route('create-blog')}}" class="btn btn-warning btn-lg btn-block">Create a new blog</a>
        <hr>
        </div>
        @endif
    </div>
    <div class="col-lg-3 shadow-lg rounded m-3">
    <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
            <i class="fas fa-job fa-fw fa-3x text-warning"></i>
            @isset($countcities)
                <h2 class="timer count-title count-number" data-to="{{$countcities}}" data-speed="1500"></h2>
                <p class="count-text ">Total Cities</p>
                @endisset
            </div>
            </div>
            <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
                <i class="fas fa-users fa-3x text-info"></i>
                @isset($countusers)
                <h2 class="timer count-title count-number" data-to="{{$countusers}}" data-speed="1500"></h2>
                <p class="count-text ">Total Users</p>
                @endisset
            </div>
            </div>
            <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
            <i class="fas fa-user-md fa-3x text-primary"></i>&nbsp;<i class="fas fa-briefcase fa-3x text-primary"></i>
            @isset($countjobs)
                <h2 class="timer count-title count-number" data-to="{{$countjobs}}" data-speed="1500"></h2>
                <p class="count-text ">Total Jobs</p>
                @endisset
            </div>
            </div>
            <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
            <i class="fas fa-user-circle fa-3x text-info"></i>
            @isset($countaccounttypes)
                <h2 class="timer count-title count-number" data-to="{{$countaccounttypes}}" data-speed="1500"></h2>
                <p class="count-text ">Total Account types</p>
                @endisset
            </div>
            </div>
            <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
                <i class="fas fa-shopping-cart fa-3x text-danger"></i>
                @isset($countpurcahes)
                <h2 class="timer count-title count-number" data-to="{{$countpurcahes}}" data-speed="1500"></h2>
                <p class="count-text ">Total Purchase</p>
                @endisset
            </div>
            </div>
        </div>
    </div>
  
</div>

</div>
<style>

    
    </style>
@include('components.admin.footer')