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