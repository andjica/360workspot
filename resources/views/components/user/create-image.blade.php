<form action="{{route('add-image')}}" method="POST" enctype="multipart/form-data">
@csrf
<h3>Insert your image</h3>
  <div class="form-group">
    <label for="image">Choose image for your resume</label>
    <input type="file" class="form-control" name="image" aria-describedby="image" placeholder="Image">
    @if ($errors->has('image'))  <p style="color:red;">{{$errors->first('image')}}</p> @endif
  </div>
  <div class="form-group">
    <label for="imagedesc">Give a image description</label>
    <input type="text" class="form-control" name="imagedesc"  placeholder="Image for website..">
    @if ($errors->has('imagedesc'))  <p style="color:red;">{{$errors->first('imagedesc')}}</p> @endif

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div class="row">
@if($countimages > 0)
            @foreach($images as $img)
            <div class="col-lg-3 ml-3 mt-2 shadow">
                <a href="" data-toggle="tooltip" data-placement="top" title="Delete this image">
                <i class="fa fa-minus-circle text-danger fa-2x float-right"></i>
                    <img src="{{asset('/img-fromusers/'.$img->url)}}" class="img-fluid">
                    </a>
                </div>
            @endforeach
        @endif
</div>