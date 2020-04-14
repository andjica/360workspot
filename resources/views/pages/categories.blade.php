@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <div class="row">
    <div class="col-md-8 my-4  rounded p-3 light" >
    <div class="card mb-3 p-2">Categories table - for more information about all categories click below</div>
    <a href="{{route('create-category')}}" class="btn btn-warning btn-lg btn-block">Create a new category</a><br>
    <h2>Filterable Table for Categories</h2>
    <p>Type something for searching your category</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
    <table class="table table-striped bg-light rounded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($categories as $category)
            <tr>
            <th scope="row">{{$category->id}}</th>
            <th>{{$category->name}}</th>
            <th><a href="{{asset('/edit-category/'.$category->id)}}">Edit category &nbsp;<i class="fas fa-edit"></i></a></th>
            <th><a href="{{asset('/delete-category/'.$category->id)}}" class="text-danger">Delete category &nbsp;<i class="fas fa-trash-alt"></i></a></th>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        <ul class="list-group">
        <li class="list-group">  {{$categories->links()}}</li>
        </ul> <br>
        
        <hr>
    </div>
    <div class="col-lg-3 shadow-lg rounded m-3">
    <div class="card text-center p-2 mt-3">
            <div class="counter col_fourth end">
            <i class="fas fa-category fa-fw fa-3x text-warning"></i>
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

