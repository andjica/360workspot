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