
$(document).ready(function() {
    $(document).on('submit', '#my-form', function(e) {
      
      errors = [];

      var field_value = $('#sel_depart :selected').val();
      var field_value2 = $('#sel_depart2 :selected').val();
      var field_value3 = $('#sel_depart3 :selected').val();

      
      let mistakecat = document.getElementById('cat-mistake');
      let mistakecity = document.getElementById('city-mistake');
      let mistakesalary = document.getElementById('salary-mistake');

      if(field_value == 0)
      {
        mistakecat.innerHTML="Plase select category";
        e.preventDefault();
        errors.push = "mistake";
      }
      if(field_value2 == 0)
      {
        mistakecity.innerHTML="Please select city";
        e.preventDefault();
        errors.push = "mistake";
      }
      if(field_value3 == 0)
      {
        mistakesalary.innerHTML="Plase select salary";
        e.preventDefault();
        errors.push = "mistake";
      }
      
      if(errors.lenth == 0)
      {
        return true;
      }

    
    
     });
});