@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <div class="row">
    <div class="col-md-8 my-4  border border-info rounded p-3" >
    @if($usercount >= 1 &&  auth()->user()->account->account_type_id == 1)
    <div class="card text-center  bg-primary" >
            <img src="{{asset('/')}}images/paypall.png" class="img-fluid"><br>
            <img src="{{asset('/')}}images/version15.png" width="170" class="img-fluid rounded mx-auto d-block">
            <br>
            <h4 class="text-white">@isset($usercount)
                You made a {{$usercount}}, that is maximum for Free 
                @endisset
            </h4>
        @include('components.admin.card-expires')
    @elseif($usercount >= 11 &&  auth()->user()->account->account_type_id == 2)
    <div class="card text-center  bg-primary" >
            <img src="{{asset('/')}}images/paypall.png" class="img-fluid"><br>
            <img src="{{asset('/')}}images/version15.png" width="170" class="img-fluid rounded mx-auto d-block">
            <br>
            <h4 class="text-white">@isset($usercount)
                You made a {{$usercount}}, that is maximum for Supper - Pro
                @endisset
            </h4>
           @include('components.admin.card-expires')
        @elseif($usercount >= 51 &&  auth()->user()->account->account_type_id == 3)
            <div class="card text-center  bg-primary" >
            <img src="{{asset('/')}}images/paypall.png" class="img-fluid"><br>
            <img src="{{asset('/')}}images/version15.png" width="170" class="img-fluid rounded mx-auto d-block">
            <br>
            <h4 class="text-white"> @isset($usercount)
                You made a {{$usercount}}, that is maximum for Free Account
                @endisset
            </h4>
        @include('components.admin.card-expires')
    @else
        @include('components.admin.create-job')
    @endif
    </div>
        @include('components.admin.sidebar')
    </div>
    <div class="row">
      
    </div>
</div>

</div>
@include('components.admin.footer')