<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
@include('components.header')
@include('components.nav')
<section class="pricing py-5">
  <div class="container sectioning">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/1 month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Test Envoirement</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Month free testing </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Activate</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Super Pro</h5>
            <h6 class="card-price text-center">$420<span class="period">/3 months</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Top ranking position on searches</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Direct contact with job seakers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>All categories available</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>5 days support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>full acces to the panel</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>12 Jobs post available</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
           @if(auth()->check())
            @if(auth()->user()->account->account_type_id == 2)
            <button type="button" class="btn btn-warning">You have already bought this type of account</button>
            @else
              <form action="{{route('upgrade-pro')}}" method="POST">
                @csrf
             
                <button type="submit" class="btn btn-block btn-success text-uppercase">Purchase</button>
              </form>
               @endif
            @else
              <a href="{{route('login')}}" class="btn btn-block btn-primary text-uppercase">Purchase</a>
            @endif
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Business Pro</h5>
            <h6 class="card-price text-center">$2400<span class="period">/6 months</span></h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>10 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Top ranking position on searches</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Direct contact with job seakers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>All categories available</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>7 days support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>full acces to the panel</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50 Jobs post available</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            @if(auth()->check())
            @if(auth()->user()->account->account_type_id == 3 )
            <button type="button" class="btn btn-warning">You have already bought this type of account</button>
            @else
              <form action="{{route('upgrade-professional')}}" method="POST">
                @csrf
             
                <button type="submit" class="btn btn-block btn-success text-uppercase">Purchase</button>
              </form>
               @endif
            @else
              <a href="{{route('login')}}" class="btn btn-block btn-primary text-uppercase">Purchase</a>
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Business Exclusive</h5>
            <h6 class="card-price text-center">$7200 <span class="period">/12 months</span></h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Top ranking position on searches</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Direct contact with job seakers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>All categories available</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>24/7 days support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>full acces to the panel</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Jobs post available</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            @if(auth()->check())
            @if(auth()->user()->account->account_type_id == 4)
            <button type="button" class="btn btn-warning">You have already bought this type of account</button>
            @else
              <form action="{{route('upgrade-exclusive')}}" method="POST">
                @csrf
             
                <button type="submit" class="btn btn-block btn-success text-uppercase">Purchase</button>
              </form>
               @endif
            @else
              <a href="{{route('login')}}" class="btn btn-block btn-primary text-uppercase">Purchase</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('components.footer')
