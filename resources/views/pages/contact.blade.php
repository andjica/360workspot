@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        <h2 class="text-white"><i class="fas fa-info-circle fa-2x text-white"></i>&nbsp;Contact page</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in<br>
    360WorkSpot
</p>
       
        </div>
        </div>
        </div>
        </div>
        <section class="ftco-section contact-section bg-light">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h3">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3">
<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
<div class="col-md-3">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
<div class="col-md-3">
<p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#c1a8afa7ae81b8aeb4b3b2a8b5a4efa2aeac"><span class="__cf_email__" data-cfemail="aac3c4ccc5ead3c5dfd8d9c3decf84c9c5c7">[email&#160;protected]</span></a></p>
</div>
<div class="col-md-3">
<p><span>Website</span> <a href="#">yoursite.com</a></p>
</div>
</div>
    <div class="row block-9">

        <div class="col-md-6 order-md-last d-flex">
        
            <form action="{{route('email-contact')}}" class="bg-white p-5 contact-form" id="contact-form" method="POST">
                @csrf
            <h3>For more information contact us:</h3> <Br>
            @if(session('success'))
                <div class="alert" style="background: linear-gradient(to right, #207dff 0%, #a16ae8 100%); color:white">
                    {{session('success')}}
                    <img src="{{asset('/images/')}}/message4.png" widht="150px" class="img-fluid">

                </div>
                @endif<br>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" id="name" name="name">
            <p id="pname"></p>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email" id="email" name="email">
            <p id="pemail"></p>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
            <p id="psubject"></p>
            </div>
            <div class="form-group">
            <textarea  id="message" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
            <p id="pmessage"></p>
            </div>
            <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
            </form>
        </div>
        <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
        </div>
    </div>
</div>
</section>
        @include('components.footer')