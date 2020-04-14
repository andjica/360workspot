@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')
<div class="container">
    <div class="row">
    <div class="col-md-12 my-4  rounded p-3 bg-light border border-dark shadow-lg" >
    <div class="card mb-3 p-2">Users table - for more information about all users click below</div>
    <h2>Filterable Table for Users</h2>
    <p>Type something for searching you User</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-striped bg-light rounded">
        <thead>
            <tr>
            <th scope="col" class="bg-success text-white">#</th>
            <th scope="col" class="bg-success text-white">First</th>
            <th scope="col" class="bg-success text-white">email</th>
            <th scope="col" class="bg-success text-white">Current account</th>
            <th class="bg-success text-white"><i class="fas fa-hourglass-half"></i> &nbsp;Account valid until</th>
            <th scope="col" class="bg-success text-white">See purchase for user</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($accounts as $ac)
            <tr>
            <th scope="row">{{$ac->id}}</th>
            <td>{{$ac->user->name}}</td>
            <td>{{$ac->user->email}}</td>
            <td>{{$ac->accounttype->type}}</td>
            <td class="bg-primary text-white"><b>{{$ac->valid_until}}</b></td>
            <td><a href="{{asset('/user-buy/'.$ac->user->id)}}"><i class="fas fa-info-circle"></i>&nbsp;<i class="fas fa-store"></i>View purchase about {{$ac->user->name}}</a></td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        
    </div>
    </div>
    <div class="row mb-5 ml-4">
        <ul class="list-group">
        <li class="list-group">  {{$accounts->links()}}</li>

        </ul>
        </div>
</div>
</div>
@include('components.admin.footer')