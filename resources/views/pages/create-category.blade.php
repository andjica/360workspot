@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <div class="row">
    <div class="col-md-8 my-4  rounded p-3 border border-info">
    
    <form class="text-dark lead" action="{{route('insert-category')}}" id="create-blog" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Here you Add a new Category :)</h3>
   
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
           <br> 
            <div class="form-group">
                <h4>Give a name of Category</h4>
                <input class="form-control" id="" type="text" name="name" placeholder="Artist for example..">
                @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
            </div>
           <div class="form-group">    
                <button type="submit" class="btn btn-lg btn-success" value="">Create</button>
            </div>
            </form><br>
            <hr>
            <button type="button" class="btn btn-primary my-2 text-right float-right" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
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