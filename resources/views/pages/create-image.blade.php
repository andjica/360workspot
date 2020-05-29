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
        
           @include('components.user.create-image')
        </div>
        <div class="col-lg-4">
        @include('components.user.sidebar')
        </div>
    </div>
    <div class="row mt-5">  
        @if($countimages > 0)
            @foreach($images as $img)
            <div class="col-lg-2 ml-3 mt-2 shadow">
                <a href="" data-toggle="tooltip" data-placement="top" title="Delete this image">
                <i class="fa fa-minus-circle text-danger fa-2x float-right"></i>
                    <img src="{{asset('/img-fromusers/'.$img->url)}}" class="img-fluid">
                    </a>
                </div>
            @endforeach
        @endif
   </div>
</div>
</div>
@include('components.admin.footer')