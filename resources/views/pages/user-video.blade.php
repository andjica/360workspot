@include('components.admin.header')

<div id="wrapper">
@include('components.user.nav')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4 text-dark p-2">
        @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            <h4>{{auth()->user()->name}} Welcome to Your User Panel</h4>
        </div>
    </div>
   
    <div class="row mt-3">
        <div class="col-lg-8 p-4 shadow">
        @isset($postcount)
            @if($postcount == null)
                @else
                    @if($post->video == null)
                    <form action="{{route('update-video')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hiddenname" valye="{{$post->status}}">
                        <h4>Create a new video</h4>
                        <div class="form-group">
                            <label for="Image">Choose you video</label>
                            <input type="file" class="form-control" name="video">
                            @if($errors->has('video')) 
                                <p class="text-danger" id="er-video">{{$errors->first('video')}}</p>
                            @endif     													
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @else
                    <form action="{{route('update-video')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hiddenname" valye="{{$post->status}}">
                        <h4>Create a new video</h4>
                        <div class="form-group">
                            <label for="Image">Choose you video</label>
                            <input type="file" class="form-control" name="video">
                            @if($errors->has('video')) 
                                <p class="text-danger" id="er-video">{{$errors->first('video')}}</p>
                            @endif     													
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form><br>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" src="{{asset('/video-fromusers/'.$post->video)}}"></iframe>
                            </div>
                        
                    @endif
            @endif
        @endisset
        </div>
        <div class="col-lg-4">
        @include('components.user.sidebar')
        </div>
    </div>
  
</div>
</div>
@include('components.admin.footer')