@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <div class="row">
    <div class="col-md-8 my-4  rounded p-3 light" >
    <div class="card mb-3 p-2">Cities table - for more information about all cities click below</div>
    <h2>Filterable Table for Cities</h2>
    <p>Type something for searching your job</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
    <table class="table table-striped bg-light rounded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Job title</th>
            <th scope="col">View more</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($jobs as $job)
            <tr>
            <th scope="row">{{$job->id}}</th>
            <th>{{$job->title}}</th>
            <th><a href="{{asset('/job/'.$job->id)}}">View more about</a></th>
            <th><a href="{{asset('/delete-job/'.$job->id)}}" class="text-danger">Delete job &nbsp;<i class="fas fa-trash-alt"></i></a></th>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        <ul class="list-group">
        <li class="list-group">  {{$jobs->links()}}</li>
        </ul> <br>
    <hr>
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

