@include('components.admin.header')

<div id="wrapper">
@include('components.user.nav')
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
        
           @include('components.user.create-image')
        </div>
        <div class="col-lg-4">
        @include('components.user.sidebar')
        </div>
    </div>
   
</div>
</div>
@include('components.admin.footer')