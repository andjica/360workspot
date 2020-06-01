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
            <h4>{{auth()->user()->name}} Welcome to Your User Panel</h4>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-lg-8 p-4 shadow">
        @if($skillcount > 0)
                @foreach($skill as $ski)
                    @include('components.user.update-skill')
                @endforeach
            @else
            @include('components.user.create-skill')
            @endif
        </div>
        <div class="col-lg-4">
        @include('components.user.sidebar')
        </div>
    </div>
  
</div>
</div>
@include('components.admin.footer')
