<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
<img src="{{asset('/')}}images/version15.png" width="170" class="img-fluid">
</a>



<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{route('home')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
    
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <span><i class="fas fa-fw fa-user"></i> {{ Auth::user()->name }}</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a href="{{ url('/logout') }}" class="collapse-item"> <i class="fas fa-sign-out-alt"></i>Logout </a>
     
    </div>
  </div>
</li>
<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.html">Colors</a>
      <a class="collapse-item" href="utilities-border.html">Borders</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Addons
</div>


@if(auth()->user()->role_id == 3)
<li class="nav-item">
  <a class="nav-link" href="{{asset('/user-panel')}}">
  <i class="fas fa-briefcase"></i>
    <span>Your profile</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="">
  <i class="fas fa-key"></i>
    <span>Change password</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('create-image')}}">
  <i class="fas fa-images"></i>
    <span>Add images</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('create-skills')}}">
  <i class="fas fa-dumbbell"></i>
    <span>Add skills</span></a>
</li>
@if($postcount > 0)
<li class="nav-item">
  <a class="nav-link" href="{{route('create-video')}}">
  <i class="fas fa-video"></i>    
  <span>Insert video</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('create-social')}}">
  <i class="fas fa-share-alt"></i>
    <span>Manage your social network</span></a>
</li>
@else
@endif
@endif

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>