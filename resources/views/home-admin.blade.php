@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <div class="row">
    <div class="col-md-8 my-4  rounded p-3 bg-warning" >
    <div class="card mb-3 p-2">Users table - for more information about all users click below</div>
    <table class="table table-striped bg-light rounded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">email</th>
            <th scope="col">Current account</th>
            <th>Valid account until</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accountsusers as $au)
            <tr>
            <th scope="row">{{$au->user->id}}</th>
            <td>{{$au->user->name}}</td>
            <td>{{$au->user->email}}</td>
            <td>{{$au->accounttype->type}}</td>
            <td>{{$au->valid_until}}</td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        <a href="{{route('users')}}" class="btn btn-md btn-primary float-right">View more about users</a>
    </div>
        <div class="col-lg-3 shadow-lg rounded m-3">
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
            <i class="fas fa-user-md fa-3x"></i>&nbsp;<i class="fas fa-briefcase fa-3x"></i>
            @isset($countjobs)
                <h2 class="timer count-title count-number" data-to="{{$countjobs}}" data-speed="1500"></h2>
                <p class="count-text ">Total Jobs</p>
                @endisset
            </div>
            </div>
            <div class="card text-center p-2 mt-3">
            <ul class="list-group">
                @foreach($accountypes as $ac)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$ac->type}}
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                @endforeach
                
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-8  rounded p-3 mt-3 bg-secondary" >
    <div class="card mb-3 p-2">Jobs table - for more information about all jobs click below</div>
    <table class="table table-striped bg-light rounded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">email</th>
            <th scope="col">Current account</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
            <th scope="row">{{$job->id}}</th>
            <td>{{$job->title}}</td>
            <td>{{$job->category->name}}</td>
            <td>{{$job->expires}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <a href="{{route('jobs-admin')}}" class="btn btn-md btn-primary float-right">View more about jobs</a>
    </div>
    <div class="col-lg-3 shadow-lg rounded m-3">
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