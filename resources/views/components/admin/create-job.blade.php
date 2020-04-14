<form class="text-dark lead" action="{{route('create-job')}}" id="create-job" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Welcome to 360WorkSpot Admin Panel</h3>
    <p>Please make a new one Job </p>
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Junior php programer">
                <p style="color:red;" id="tl2"></p> 
                @if ($errors->has('title'))  <p style="color:red;">{{$errors->first('title')}}</p> @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Company name</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Dfam Digital Agency">
                <p class="small">If you are'nt from company please enter your name</p>
                <p style="color:red;" id="comper"></p> 
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Choose category</label>
                <select class="form-control" id="categories" name="category">
                <option value=>Select category</option>
                @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
                </select>
                <p style="color:red;" id="cater"></p>
                @if ($errors->has('category')) <p style="color:red;">{{ $errors->first('category') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Choose city</label>
                <select class="form-control" id="cities" name="city">
                <option value=>Select city</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
                </select>
                <p style="color:red;" id="cityer"></p>
                @if ($errors->has('city')) <p style="color:red;">{{ $errors->first('city') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description about this job</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                <p style="color:red;" id="descer"></p>
                @if ($errors->has('desc')) <p style="color:red;">{{ $errors->first('desc') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="">Choose salary</label>
                <select class="form-control" id="salaries" name="salary">
                <option value=>Select salary</option>
                @foreach($salaries as $sat)
                <option value="{{$sat->id}}">{{$sat->salary_between}}</option>
                @endforeach
                </select>
                <p style="color:red;" id="saler"></p>
                @if ($errors->has('salary')) <p style="color:red;">{{ $errors->first('salary') }}</p> @endif 

            </div><Br>
            <h3>Give a logo image</h3>
            <div class="form-group">
            <div class="custom-file">
                
                <input type="file" class="custom-file-input" name="image" id="img"  aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                <p>Give a logo of your company or select some another image</p>
                <p style="color:red;" id="imger"></p>
                @if ($errors->has('image')) <p style="color:red;">{{ $errors->first('image') }}</p> @endif 
            </div><br><br>
            </div>
            <div class="form-group">
            <label for="">Select all time for operate this job</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="fulltime">Fulltime</label>  &nbsp;&nbsp;&nbsp;
                    <label><input type="checkbox" value="1" name="parttime">Parttime</label> &nbsp;&nbsp;&nbsp;
                    <label><input type="checkbox" value="1" name="intership">Intership</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="1" name="temporary">Temporary</label>  &nbsp;
                    <label><input type="checkbox" value="1" name="freelance">Freelance</label> &nbsp;
                    <label><input type="checkbox" value="1" name="fixed">Fixed</label>
                </div>
            </div>
            <div class="form-group">
            <textarea class="form-control" id="desc2" name="desc2" type="text"  placeholder="More description about job"></textarea>
            <p style="color:red;" id="descer2"></p>
            </div>
            @if(auth()->user()->account->account_type_id == 1)
            <div class="form-group">
            <label for="">Choose title 2</label>
            <input class="form-control" id=""  type="text" placeholder="Title two..." name="title2" disabled>
            </div>
            <div class="form-group">
            <label for="">Choose title 3</label>
            <input class="form-control" id="" type="text"  placeholder="Title three..." name="title3" disabled>
            </div>
            <div class="form-group">
            <label for="">Write websitename of your company</label>
            <input class="form-control" id="" type="text"  placeholder="example.com" name="website" disabled>
            </div>
            <div class="form-group">
            <label for="">Give a contact number</label>
            <input class="form-control" id="" type="text" name="contact" placeholder="phone number" disabled>
            </div>
         
            @else
            
            <div class="form-group">
            <input class="form-control" id="" type="text" name="title2" placeholder="Title two...">
            </div>
            <div class="form-group">
            <input class="form-control" id="" type="text" name="title3" placeholder="Title three...">
            </div>
            <div class="form-group">
            <label for="">Write websitename of your company</label>
            <input class="form-control" id="" name="website" type="text"  placeholder="example.com">
            </div>
            <div class="form-group">
            <label for="">Give a contact number</label>
            <input class="form-control" id="" name="contact" type="text"  placeholder="phone number">
            </div>
          
            @endif
            
            <div class="form-group">    
                <button type="submit" class="btn btn-lg btn-success" value="">Create</button>
            </div>
            </form>