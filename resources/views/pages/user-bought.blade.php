@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')
<div class="container">
        @if($countpurcase == 0)
        <div class="row">
            <div class="col-lg-8">
               <div class="alert alert-danger mt-5"> This user still doesn't make any purcahes </div>
               <button type="button" class="btn btn-primary my-2 text-right" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
            </div>
        </div>
        @else
 
        <div class="row">
            <div class="col-lg-10 mt-3 p-3 border border-secondary rounded bg-light">
            @isset($user)
            <ul class="list-group mb-3 mt-2">
            <li class="list-group-item">Name: <b>{{$user->name}}</b></li>
            <li class="list-group-item">Email: <b>{{$user->email}}</b></li>
            <li class="list-group-item">Created account at: <b>{{$user->created_at}}</b></li>
            </ul>
           @endisset
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Total count of posted jobs</h6>
                <small class="text-muted">Brief description</small>
              </div>
            @isset($countjobs)
              <span class="text-muted">{{$countjobs}}</span>
              @endisset
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Total number of purchases</h6>
               
              </div>
              @isset($countpurcase)
              <span class="text-success">{{$countpurcase}}</span>
              @endisset
            </li>
            @foreach($purchases as $pu)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Boughted account name</h6>
                <span class="text-muted">{{$pu->accounttype->type}}</span>
              </div>
             <div>
                <h6 class="my-0">Created at</h6>
                <small class="text-muted">{{$pu->created_at}}</small>
              </div>
              <div>
                <h6 class="my-0">Valid until</h6>
                <small class="text-muted">{{$pu->valid_until}}</small>
              </div>
              <div>
                <h6 class="my-0">Price</h6>
                <small class="text-muted">{{$pu->price}},00</small>
              </div>
             </li>
            @endforeach
           
           
            <li class="list-group-item d-flex justify-content-between">
             <b> <span>Total (USD)</span></b>
              @isset($sum)
              <strong>{{$sum}},00</strong>
              @endisset
            </li>
          </ul>
          <button type="button" class="btn btn-primary my-2 text-right" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
        </div>
   </div>
@endif
</div>
@include('components.admin.footer')