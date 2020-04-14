@include('components.admin.header')

<div id="wrapper">
@include('components.admin.nav')

<div class="container">

    <section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="{{route('email-contact')}}" method="POST">
        @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                    <img src="{{asset('/images/')}}/message.png" widht="150px" class="img-fluid">
                </div>
        @endif<br>
        @csrf
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        @isset($username)
                        <input type="text" id="name" name="name" class="form-control" value="{{$username}}">
                        <label for="name" class="">Your name</label>
                        @endisset
                       <p id="pname"></p>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    @isset($useremail)
                        <input type="text" id="email" name="email" class="form-control" value="{{$useremail}}">
                        <label for="email" class="">Your email</label>
                        @endisset
                        <p id="pemail"></p>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                        <p id="psubject"></p>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                        <p id="pmessage"></p>

                    </div>

                </div>
            </div>
            <!--Grid row-->

            <div class="text-center text-md-left">
            <input type="submit" class="btn btn-primary text-white" type="submit" value="Send">
        </div>
        </form>

        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>San Francisco, CA 94126, USA</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>contact@mdbootstrap.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
    
</div>

@include('components.admin.footer')
<script>

$(document).ready(function() {
    $(document).on('submit', '#contact-form', function(e) {

        let name = $('#name').val();
        let ername = document.getElementById('pname');

        let email = $('#email').val();
        let eremail = document.getElementById('pemail');

        let subject = $('#subject').val();
        let ersubject = document.getElementById('psubject');

        let message = $('#message').val();
        let ermessage = document.getElementById('pmessage');


        let errors = [];

        if(name == "")
        {
          $('#name').css('border-color','red');
            ername.innerHTML = "Please enter your name";
            errors.push = ("nije ok");
            e.preventDefault();
        }
        else
        {
          $('#name').css('border-color','blue');
          ername.innerHTML = 'Name ok <i class="fas fa-check text-success"></i>';
        }

        if(email == "")
        {
          $('#email').css('border-color','red');
            eremail.innerHTML = "Please enter email address";
            errors.push = ("nije ok");
            e.preventDefault();
        }
        else
        {
          $('#email').css('border-color','blue');
          eremail.innerHTML = 'Email ok <i class="fas fa-check text-success"></i>';

        }
        


        let emailReg = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        if(!emailReg.test(email))
        {
              $('#email').css('border-color','red');
              eremail.innerHTML = "Please enter a valid email address";
              errors.push = ("nije ok");
              e.preventDefault();
        }
        else
        {
          $('#email').css('border-color','blue');
          eremail.innerHTML = 'Email ok <i class="fas fa-check text-success"></i>';
        }


        if(subject == "")
        {
          $('#subject').css('border-color','red');
            ersubject.innerHTML = "Please enter subject";
            errors.push = ("nije ok");
            e.preventDefault();
        }
        else
        {
          $('#subject').css('border-color','blue');
          ersubject.innerHTML = 'Subject ok <i class="fas fa-check text-success"></i>';
        }

        if(message == "")
        {
          $('#message').css('border-color','red');
            ermessage.innerHTML = "Please write your message";
            errors.push = ("nije ok");
            e.preventDefault();
        }
        else
        {
          $('#message').css('border-color','blue');
          ermessage.innerHTML = 'Message ok <i class="fas fa-check text-success"></i>';

        }

        if(errors.length == 0)
        {
            
           return true;
        }

    });
  });
</script>
