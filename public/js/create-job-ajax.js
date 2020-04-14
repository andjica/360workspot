$(document).ready(function() {
    $(document).on('submit', '#create-job', function(e) {
      

        var  errors = [];
        
        let title = $('#title').val();
        let titleer = document.getElementById('tl2');

        let company = $('#company').val();
        let comper = document.getElementById('comper');

        let category = $('#categories').val();
        let categoryer = document.getElementById('cater');

        let city = $('#cities').val();
        let cityer = document.getElementById('cityer');

        let desc = $('#desc').val();
        let descer = document.getElementById('descer');

        let salary = $('#salaries').val();
        let salaryer = document.getElementById('saler');

        let image = $('#img').val();
        let imger = document.getElementById('imger');

        let desc2 = $('#desc2').val();
        let descer2 = document.getElementById('descer2');

       if(title == "")
        {
            $('#title').css('border-color','red');
            titleer.innerHTML = "Title field is required";
            errors.push = ("nije ok");
            e.preventDefault();
           
        }


        if(company == "")
        {
            
            $('#company').css('border-color','red');
            comper.innerHTML = "Company field is required";
            errors.push = ("error company");
            e.preventDefault();
            
          
           
        }  
        
       
        if(category == 0)
        {
            categoryer.innerHTML = "Please select category"; 
            errors.push = "error category";
            e.preventDefault();
          
        }
        

        if(city == 0)
        {
            cityer.innerHTML = "Please select city";
            errors.push = "error city";
            e.preventDefault();
          
           
        }
       
        

        if(desc == "")
        {
            $('#desc').css('border-color','red');
            descer.innerHTML = "Description field is required";
            errors.push = "error description";
           
           
            
        }
       
        if(salary == 0)
        {
            salaryer.innerHTML = "Please select salary";
            errors.push = "error salary";
            e.preventDefault();
           
        }
       

        if(image == 0)
        {
            imger.innerHTML = "Please choose a image";
            errors.push = "error image";
            e.preventDefault();
        }   
        
        if(desc2 == "")
        {
            $('#desc2').css('border-color','red');
            descer2.innerHTML = "Description two field is required";
            errors.push = "error description";
           
           
            
        }

        if(errors.length == 0)
        {
            
           return true;
        }

        
        
    });
});