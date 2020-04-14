<footer class="ftco-footer ftco-bg-dark ftco-section border-top">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Skillhunt Jobboard</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3" style="display: flex;">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Browse Candidates</a></li>
                <li><a href="#" class="pb-1 d-block">Post a Job</a></li>
                <li><a href="#" class="pb-1 d-block">Employer Listing</a></li>
                <li><a href="#" class="pb-1 d-block">Resume Page</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Job Packages</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Candidate</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Browse Jobs</a></li>
                <li><a href="#" class="pb-1 d-block">Submit Resume</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Browse Categories</a></li>
                <li><a href="#" class="pb-1 d-block">My Bookmarks</a></li>
                <li><a href="#" class="pb-1 d-block">Candidate Listing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">My Account</a></li>
                <li><a href="#" class="pb-1 d-block">Sign In</a></li>
                <li><a href="#" class="pb-1 d-block">Create Account</a></li>
                <li><a href="#" class="pb-1 d-block">Checkout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <script src="{{asset('/')}}js/select-search.js"></script>

  <script src="{{asset('/')}}js/jquery.min.js"></script>
  <script src="{{asset('/')}}js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/')}}js/popper.min.js"></script>
  <script src="{{asset('/')}}js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/')}}js/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}js/jquery.stellar.min.js"></script>
  <script src="{{asset('/')}}js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('/')}}js/aos.js"></script>
  <script src="{{asset('/')}}js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('/')}}js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('/')}}js/google-map.js"></script>
  <script src="{{asset('/')}}js/main.js"></script>
  <script src="{{asset('/')}}js/back.js"></script>

  <!-- Custom js - ajax -->
  <script src="{{asset('/')}}js/all-jobs-ajax.js"></script>
  <script src="{{asset('/')}}js/filter-ajax.js"></script>
  <script src="{{asset('/')}}js/contact-form.js"></script>
  <script>
  $(document).ready(function(){
    
    
    $('#apply').on('click',disableButton);
    
    $('#firstname').on('keyup',function(){
     
        let firstName = $('#firstname').val();
        
        if(firstName=="")
        {
            
            $('#firstname').css('border-color','red');
            checkErrors();
            disableButton();
            
        }
        else
        {
            $('#firstname').css('border-color','blue');
            checkErrors();
        }

        

    });

    $('#lastname').on('keyup',function(){

        let lastName = $('#lastname').val();

        if(lastName=="")
        {
            
            $('#lastname').css('border-color','red');
            checkErrors();
            disableButton();
            
        }
        else
        {
            $('#lastname').css('border-color','blue');
            checkErrors();
        }

    });

    $('#email').on('keyup',function(){

        let email = $('#email').val();

        let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if(!emailReg.test(email))
        {
            
            $('#email').css('border-color','red');
            checkErrors();
            disableButton();
        }
        else
        {
            $('#email').css('border-color','blue');
            checkErrors();
            
        }


    });
    
    

    
    

    function checkErrors(){
        
        let greske = [];
        let firstName = $('#firstname').val();

        if(firstName=="")
        {
            greske.push("bad");
            
        }

        let lastName = $('#lastname').val();

        if(lastName=="")
        {
            greske.push("bad");
          
        }

        let email = $('#email').val();

        if(email=="")
        {
            greske.push("bad");
        }    


    if(greske.length==0)
    {
        
        enableButton();
    }
        
    
} 
})

function enableButton(){

    $('#job-apply-popup').prop('disabled',false);  

}

function disableButton()
{
    $('#job-apply-popup').prop('disabled',true);
}


</script>


  </body>
</html>