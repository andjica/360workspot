<form action="{{route('add-post')}}" method="post" enctype="multipart/form-data">
@csrf
<h4>Set up your information</h4>
  <div class="form-group">
    <label for="Image">Choose your profile picture</label>
    <input type="file" class="form-control" name="image">
			<p class="text-danger" id="er-img"></p>																
  </div>
  <div class="form-group">
  <i class="fas fa-city fa-2x text-info"></i>
    <label for="City">Choose city where are you working or you are right now</label>
     <select class="form-control" name="city" id="citys">
          <option value="">City</option>
					@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
					@endforeach
				</select>
        @if ($errors->has('city')) 
      <p class="text-danger">{{$errors->first('city')}}</p>
    @endif
  </div>

  <div class="form-group">
  <i class="fas fa-volleyball-ball fa-2x text-primary"></i> 
    <label for="Category">Choose category that explain your main skill</label>
        <select class="form-control andjicakat" name="category" id="selecandjica">
          <option value="">Category</option>
					@foreach($categories as $cat)
						<option value="{{$cat->id}}">{{$cat->name}}</option>
					@endforeach
				</select>
        @if ($errors->has('category')) 
      <p class="text-danger">{{$errors->first('category')}}</p>
    @endif															
  </div>
  <div class="form-group">
  <select name="selectsub" id="selectsub" class="form-control" style="display: none;">
    
    </select>
    @if ($errors->has('selectsub')) 
      <p class="text-danger">{{$errors->first('selectsub')}}</p>
    @endif
  </div>
  <div class="form-group">
  <i class="fas fa-birthday-cake fa-2x text-warning"></i>
  <label for="birthday">Your Birthday:</label>
  <input type="date" id="birthday" name="birthday" class="form-control">
  
  </div>
  <div class="form-group">
  <i class="fas fa-unlock fa-2x"></i>
    <label for="status">Are you employed or free </label>
        <select class="form-control" name="status" id="st">
          <option value="Free">Free</option>
          <option value="Employed">Employed</option>
					<option value="Freelancer">Freelancer</option>
			  </select>
			<p class="text-danger" id="er-st"></p>																
  </div>
  <div class="form-group">
    <label for="City">Say something about yourself</label>
    <textarea class="form-control" name="about"></textarea>
    <p class="small">Your biography, school...</p>
		<p class="text-danger" id="er-city"></p>																
  </div>
  <div class="form-group">
    <label for="City">More about</label>
    <textarea class="form-control" name="moreabout"></textarea>
    <p class="small">Your biography, school...</p>
		<p class="text-danger" id="er-city"></p>																
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>