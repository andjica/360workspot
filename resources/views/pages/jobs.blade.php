@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-start">
<div class="col-md-12 ftco-animate text-center mb-5">
@isset($categoryname)
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home
             <i class="ion-ios-arrow-forward"></i></a></span> <span>Browse Job</span></p>
        <h1 class="mb-3 bread">{{$categoryname->name}},&nbsp; @isset($cityname) {{$cityname->name}} @endisset</h1>
        @endisset
        @foreach($subcats as $sub)
            <form action="{{route('search-byall')}}" method="GET">
                <input type="hidden" name="categoryId" value="{{$idcategory}}">
                <input type="hidden" name="cityId" value="{{$idcity}}">
                <input type="hidden" name="subcatId" value="{{$sub->id}}">
                <ul style="    float: left; list-style:none;">
                    <li><button type="submit" class="btn border bg-light">{{$sub->name}}</button></li>
                </ul>
            </form>
        @endforeach
</div>
</div>
</div>
</div>
@if(request()->all() && count($jobs) > 0)
    <section class="ftco-section bg-light no-padding m-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-9 pr-lg-4">
        @include('components.backandall')
        @include('components.jobs')
           
        </div>
            @include('components.filter')
        </div>
        </div>
        </section>
       
        @else
      
        <section class="ftco-section bg-light no-padding m-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-9 pr-lg-4">
            @include('components.backandall')
                
                <div class="alert alert-danger" role="alert">
                <h3>Sorry there is no jobs in this kind of filter </h3>
            </div>
        </div>
        @include('components.filter')
        </div>
        </div>
        </section>
@endif
@include('components.subscribe')

@include('components.footer')