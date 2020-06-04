@if(session('errors'))
                <div class="alert alert-success">
                    {{session('error')}}
                </div>
                @endif
<form action="{{asset('/update-post/')}}" method="post" enctype="multipart/form-data">
@csrf
<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
<h3>Update your profile information</h3>
<hr>
<div class="row">
    <div class="col-lg-5 mr-4">
    <div class="rounded-circle mx-auto image-background5"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
     </div><br>
     <hr>
     Edit your profile image
     <input type="file" value="{{$post->image}}" class="form-control-file" name="image">
    </div>
    <div class="col-lg-6 mt-5">
    Edit Category:
    <select name="categories" class="form-control andjicakat" id="selecandjica">
        <option value="{{$post->category_id}}" class="form-control">Current Category: {{$post->category->name}}</option>
        @foreach($categories as $cat)
            <option value="{{$cat->id}}" class="form-control">{{$cat->name}}</option>
        @endforeach
    </select><br>
            <div class="spinner-border m-5 andjicaspinner d-none" id="hide" role="status">
        <span class="sr-only">Loading...</span>
        </div>
    <select name="selectsub" id="selectsub" class="form-control" style="display: none;">
    
    </select>
    Edit City:
    <select name="cities" class="form-control">
        <option value="{{$post->city_id}}" class="form-control">Current City: {{$post->city->name}}</option>
        @foreach($cities as $city)
            <option value="{{$city->id}}" class="form-control">{{$city->name}}</option>
        @endforeach
    </select><br>
    Edit status:
    <select class="form-control" name="status" id="st">
    <option value="{{$post->status}}" class="form-control">Current Status: {{$post->status}}</option>
          <option value="Free">Free</option>
          <option value="Employed">Employed</option>
		  <option value="Freelancer">Freelancer</option>
	</select>
    <br>Edit Date of birthday:
    <input type="date" id="birthday" name="birthday" class="form-control" value="{{$post->age}}">
        
     <hr>
    
    </div>
</div>
<hr>
<div class="row mt-2 mb-5">
    <div class="col-lg-5 mr-4">
        <h4>Biography</h4>
        <textarea name="short" class="form-control" rows="7">{{$post->short_biography}}</textarea>
    </div>
    <div class="col-lg-5 mr-4">
        <h4>Biography</h4>
        <textarea name="more" class="form-control" rows="7">{{$post->more_about}}</textarea>
    </div>
</div>
<div class="row mt-2">
        <button type="submit" class="btn btn-success btn-lg btn-block">
        <i class="fa fa-wrench fa-2x text-warning"></i>Edit your profile information
        </button>
</div>
</form>