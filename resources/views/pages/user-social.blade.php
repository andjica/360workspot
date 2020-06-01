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
                @if($post->website == null && $post->youtube == null && $post->instagram == null)
                    <form action="{{route('update-social')}}" method="post">
                        @csrf
                        <input type="hidden" name="hiddenname" valye="{{$post->status}}">
                        <h4>Create a new links</h4>
                        <div class="form-group">
                            <label for="Link">Give link for your youtube</label>
                            <input type="text" class="form-control" name="youtube">
                            @if($errors->has('youtube')) 
                                <p class="text-danger" id="er-video">{{$errors->first('youtube')}}</p>
                            @endif     													
                        </div>
                        <div class="form-group">
                            <label for="Link">Give link for your instgram</label>
                            <input type="text" class="form-control" name="instagram">
                            @if($errors->has('instagram')) 
                                <p class="text-danger" id="er-video">{{$errors->first('instagram')}}</p>
                            @endif     													
                        </div>
                        <div class="form-group">
                            <label for="Link">Give link for your website</label>
                            <input type="text" class="form-control" name="website">
                            @if($errors->has('website')) 
                                <p class="text-danger" id="er-video">{{$errors->first('website')}}</p>
                            @endif     													
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @else
                    <form action="{{route('update-social')}}" method="post">
                        @csrf
                        <input type="hidden" name="hiddenname" valye="{{$post->status}}">
                        <h4>Create a new links</h4>
                        <div class="form-group">
                            <label for="Link">Give link for your youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{$post->youtube}}">
                            @if($errors->has('youtube')) 
                                <p class="text-danger" id="er-video">{{$errors->first('youtube')}}</p>
                            @endif     													
                        </div>
                        <div class="form-group">
                            <label for="Link">Give link for your instgram</label>
                            <input type="text" class="form-control" name="instagram" value="{{$post->instagram}}">
                            @if($errors->has('instagram')) 
                                <p class="text-danger" id="er-video">{{$errors->first('instagram')}}</p>
                            @endif     													
                        </div>
                        <div class="form-group">
                            <label for="Link">Give link for your website</label>
                            <input type="text" class="form-control" name="website" value="{{$post->website}}">
                            @if($errors->has('website')) 
                                <p class="text-danger" id="er-video">{{$errors->first('website')}}</p>
                            @endif     													
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        
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