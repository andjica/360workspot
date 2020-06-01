@foreach($images as $img)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{asset('/img-fromusers/'.$img->url)}}" alt="{{$img->alt}}">
      </div>
</div>
@endforeach