<div class="card">
            <div class="card-body text-dark">
                <h4>Your current information:</h4>
                @if($postcount > 0)
                @if($post->image == null)

                @else
                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
                </div>
                @endif
                @endif
                <hr>
                <ul class="list-group">
                    <li class="list-group-item">{{auth()->user()->name}}</li>
                    <li class="list-group-item">Email: {{auth()->user()->email}}</li>
                    <li class="list-group-item">Created account: {{auth()->user()->created_at}}</li>
                    <a href=""><li class="list-group-item active"><i class="fa fa-user-cog fa-2x"></i>&nbsp;Edit your main information</li></a>
                </ul>
               
                <hr>
                <ul class="list-group">
                <li class="list-group-item">Skills from {{auth()->user()->name}}</li>
                    @if($skillcount > 0)
                        @foreach($skill as $sk)
                        <li class="list-group-item">
                        {{$sk->skill_one}} {{$sk->percent_one}}%
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$sk->percent_one}}%" aria-valuenow="{{$sk->percent_one}}%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                        {{$sk->skill_two}} {{$sk->percent_two}}%
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$sk->percent_two}}%" aria-valuenow="{{$sk->percent_two}}%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('create-skills')}}">View more skills</a>
                        </li>
                        @endforeach
                    @else
                   @endif
                
                </ul>
            </div>