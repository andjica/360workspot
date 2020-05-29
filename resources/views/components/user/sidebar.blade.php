<div class="card">
            <div class="card-body text-dark">
                <h4>Your current information:</h4>
                <hr>
                <ul class="list-group">
                    <li class="list-group-item active">{{auth()->user()->name}}</li>
                    <li class="list-group-item">Email: {{auth()->user()->email}}</li>
                    <li class="list-group-item">Created account: {{auth()->user()->created_at}}</li>
                
                </ul>
                @if($postcount > 0)
                @if($post->image == null)

                @else
                <div class="rounded-circle mx-auto image-background2"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
                </div>
                @endif
                @endif
            </div>
            </div>