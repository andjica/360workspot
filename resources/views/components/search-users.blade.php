<section class="ftco-section-parallax">
<div class="parallax-img d-flex align-items-center">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h4 class="text-white">Find or post the perfect job and freelance services, employment and career opportunities today</h4>
<h2><i class="fas fa-search  text-warning"></i></i>&nbsp;Search Carreer Seakers</h2>
    <form action="{{route('search-user')}}" method="post">
    @csrf
<div class="row d-flex justify-content-center mt-4 mb-4">
<div class="col-md-12">
<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="name"><br>
<input type="submit" class="form-control" style="background-color:orange !important; color:white !important">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>