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
            <h4>{{auth()->user()->name}} Welcome to Your User Panel</h4>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-lg-12 p-4 shadow">
        @isset($post)
           @include('components.user.update-user-about')
        @endisset
       
    </div>
  
</div>
</div>
@include('components.admin.footer')