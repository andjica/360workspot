@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">
    <div class="row">
        @isset($job)
        <div class="col-md-8 my-4  border border-info rounded p-3">
        <form class="text-dark lead" action="{{asset('/update-job/'.$job->id)}}" method="POST" enctype="multipart/form-data">
        
        @csrf
        <h3>Welcome to 360WorkSpot Admin Panel</h3>
        <p>Edit   Job </p>
        @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Junior php programer" value="{{$job->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Current company name</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Dfam Digital Agency" value="{{$job->company_name}}">
                <p class="small">If you are'nt from company please enter your name</p>
                @if ($errors->has('company')) <p style="color:red;">{{ $errors->first('company') }}</p> @endif  
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Current category</label>
                <select class="form-control" id="categories" name="category">
                <option value="{{$job->category->id}}">{{$job->category->name}}</option>
                @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
                </select>
                @if ($errors->has('category')) <p style="color:red;">{{ $errors->first('category') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Current city</label>
                <select class="form-control" id="cities" name="city">
                <option value="{{$job->city->id}}">{{$job->city->name}}</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
                </select>
                @if ($errors->has('city')) <p style="color:red;">{{ $errors->first('city') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Edit description about job</label>
                <textarea class="form-control" id="desc" name="desc" rows="3">{{$job->description}}</textarea>
                @if ($errors->has('desc')) <p style="color:red;">{{ $errors->first('desc') }}</p> @endif 
            </div>
            <div class="form-group">
                <label for="">Change salary</label>
                <select class="form-control" id="salaries" name="salary">
                <option value="{{$job->salary->id}}">{{$job->salary->salary_between}}</option>
                @foreach($salaries as $sat)
                <option value="{{$sat->id}}">{{$sat->salary_between}}</option>
                @endforeach
                </select>
                @if ($errors->has('salary')) <p style="color:red;">{{ $errors->first('salary') }}</p> @endif 

            </div><Br>
            <h3>Your current image</h3>
            <div class="form-group">
                <img src="{{asset('/img-jobs/'.$job->url)}}" width="155" class="img-fluid">
                <p>{{$job->url}}</p>
            <div class="custom-file">
                
                <input type="file" class="custom-file-input" name="image"  aria-describedby="{{$job->url}}" value="{{$job->url}}">
                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                <p>Change a logo of your company or select some another image</p>
                @if ($errors->has('image')) <p style="color:red;">{{ $errors->first('image') }}</p> @endif 
            </div><br><br>
            </div>
            <div class="form-group">
            <label for="">Select all time for operate this job</label>
                <div class="checkbox">
                Fulltime:<input type="checkbox" name="fulltime" id="fulltime" value="1"<?php echo ($job->fulltime == 1 ? ' checked' : '');?>>  &nbsp;&nbsp;&nbsp;
                Parttime:<input type="checkbox" name="partime" id="partime" value="1"<?php echo ($job->partime == 1 ? ' checked' : '');?>> &nbsp;&nbsp;&nbsp;
                Intership:<input type="checkbox" name="intership" id="intership" value="1"<?php echo ($job->intership == 1 ? ' checked' : '');?>>
                </div>
                <div class="checkbox">
                Temporary:<input type="checkbox" name="temporary" id="temporary" value="1"<?php echo ($job->temporary == 1 ? ' checked' : '');?>>  &nbsp;
                Freelance:<input type="checkbox" name="freelance" id="freelance" value="1"<?php echo ($job->freelance == 1 ? ' checked' : '');?>> &nbsp;
                Fixed:<input type="checkbox" name="fixed" id="fixed" value="1"<?php echo ($job->fixed == 1 ? ' checked' : '');?>>
                </div>
            </div>
            <div class="form-group">
            <textarea class="form-control" id="" name="desc2" type="text"  placeholder="More description about job">{{$job->description_two}}</textarea>
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
            <input class="form-control" id="" type="text" name="title2" placeholder="Title two..." value="{{$job->title_two}}">
            </div>
            <div class="form-group">
            <input class="form-control" id="" type="text" name="title3" placeholder="Title three..." value="{{$job->title_three}}">
            </div>
            <div class="form-group">
            <label for="">Write websitename of your company</label>
            <input class="form-control" id="" name="website" type="text"  placeholder="example.com" value="{{$job->company_name}}">
            </div>
            <div class="form-group">
            <label for="">Give a contact number</label>
            <input class="form-control" id="" name="contact" type="text"  placeholder="phone number" value="{{$job->phone}}">
            </div>
            
            @endif
            
            <div class="form-group">    
                <input type="submit" class="btn btn-lg btn-success" value="Create">
            </div>
            </form>
        </div>
        @endisset
    </div>
</div>
</div>

@include('components.admin.footer')