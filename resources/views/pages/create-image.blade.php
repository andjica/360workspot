@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4 text-dark p-2">
        @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            <h4>{{auth()->user()->name}} You can insert here images</h4>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-lg-8 p-4 shadow">
           
        </div>
        <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-dark">
                <h4>Your current information:</h4>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item active">{{auth()->user()->name}}</li>
                    <li class="list-group-item">Email: {{auth()->user()->email}}</li>
                    <li class="list-group-item">Created account: {{auth()->user()->created_at}}</li>
                
                </ul>
            </div>
            </div>
        </div>
    </div>
  
</div>
</div>
@include('components.admin.footer')