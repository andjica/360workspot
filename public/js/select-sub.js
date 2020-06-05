$(document).ready(function(){
      

    $('select.andjicakat').change(function(){
   　
  
      
      let value = $('#selecandjica').val(); 
    
        $.ajax({
            type: 'GET',
            URL: 'http://localhost/workspot/public/editpost/',
            data: {
              value : value
            },
            
            success:function(response){
           
             
              text = "";
            
            $.each(response.subcategories, function(index, subcategories){
              text+= "<option class='form-control' value='"+subcategories['id']+"'>"+subcategories['name'];
               
            })
           

            $("#selectsub").css("display", "block");

            $('#selectsub').html(text);
            
            }
            
        });
        $.ajax({
          type: 'GET',
          URL: 'http://localhost/workspot/public/user-panel',
          data: {
            value : value
          },
          
          success:function(response){
         
           console.log(response.subcategories);
            text = "";
          
          $.each(response.subcategories, function(index, subcategories){
            text+= "<option class='form-control' value='"+subcategories['id']+"'>"+subcategories['name'];
             
          })
         

          $("#selectsub").css("display", "block");

          $('#selectsub').html(text);
          
          }
          
      });
    
  });

  
  });