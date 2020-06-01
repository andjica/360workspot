<div class="row bg-white">
    <div class="col-lg-4 mr-4">
    <div class="rounded-circle mx-auto image-background5 m-2 shadow"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
     </div>
    </div>
    <div class="col-lg-3 mt-5 border shadow mb-3 p-3 rounded">
    <p>Category: {{$post->category->name}}<br>
        City: {{$post->city->name}} <br>
        Status: {{$post->status}}<br>
        Email: {{$post->user->email}}<br>
        Age: @isset($agenumber) {{$agenumber}} @endisset
     </p>
 
     <hr>

    </div>
    <div class="col-lg-3 mt-5">
    <a href="" class="btn bg-primary btn-lg btn-block text-white">
    <i class="fas fa-envelope-square text-white"></i>&nbsp;Contact this user
        </a>
        <ul class="list-group mt-2">
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
                        
                        @endforeach
                    @else
                   @endif
                
                </ul>
    </div>
</div>
<hr>
<div class="row mt-2 bg-white">
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
       
</div>
<Style>
.image-background5
{
    height:250px;
    width:250px;
    background-size: cover;
    background-repeat: no-repeat;
}
</style>