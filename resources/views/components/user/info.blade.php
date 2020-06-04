<div class="row">
    <div class="col-lg-5 mr-4">
    <div class="rounded-circle mx-auto image-background5"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
     </div>
    </div>
    <div class="col-lg-4 mt-5">
    <p>Category: {{$post->category->name}}<br>
        City: {{$post->city->name}} <br>
        Status: {{$post->status}}
     </p>
     <hr>
     <p> Your Age: @isset($agenumber) {{$agenumber}} @endisset</p>
    </div>
</div>
<hr>
<div class="row mt-2">
    <div class="col-lg-5 mr-4">
        <h4>Biography</h4>
        <p>{{$post->short_biography}}</p>
    </div>
    <div class="col-lg-5 mr-4">
        <h4>More about you</h4>
        <p>{{$post->more_about}}</p>
    </div>
</div>
<div class="row">
        <a href="{{asset('editpost')}}" class="btn btn-secondary btn-lg btn-block">
        <i class="fa fa-wrench fa-2x text-warning"></i>Edit your profile information
        </a>
</div>