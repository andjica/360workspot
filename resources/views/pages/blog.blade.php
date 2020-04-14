@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        @isset($blog)
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{route('index')}}">Home
             <i class="ion-ios-arrow-forward"></i></a></span>
             <span>{{$blog->title}}</span></p>
      
        <h1 class="mb-3 bread">{{$blog->title}}</h1>
       
        </div>
        </div>
        </div>
        </div>
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                <div class="col-md-8 ftco-animate">
                    <!-- One blog -->
                    <h2 class="mb-3">#{{$blog->title}}</h2>
                    <p>{{$blog->description}}</p>
                    <p>
                    <img src="{{asset('/img-blogs/'.$blog->url)}}" alt="{{$blog->title}}" class="img-fluid">
                    </p>
                    <p>{{$blog->description_two}}</p>
                    <h4 class="mb-3 mt-5"><i class="fas fa-blog text-white bg-primary rounded p-2"></i> &nbsp; Posted by Admin on {{$blog->created_at->format('d-m-Y')}}</h4>
                   
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                    <a href="#" class="tag-cloud-link">Life</a>
                    <a href="#" class="tag-cloud-link">Sport</a>
                    <a href="#" class="tag-cloud-link">Tech</a>
                    <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                    </div>
                    <!--  End one blog -->
                    @include('components.slider-blogs')
                    </div>
                @endisset
               <div class="col-lg-4 pl-md-5 sidebar ftco-animate">
                    @include('components.filter-blog')
               </div>
        </div>
               
 
            </div>
        </section>
        @include('components.footer')