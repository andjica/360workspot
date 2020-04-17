$(document).ready(function(){
    $('#form-search').submit(function(e){
        let category = $('#categorys').val();
        let ercategory = document.getElementById('er-category');

        let city = $('#citys').val();
        let ercity = document.getElementById('er-city');

        let errors = [];

        if(category == "")
        {
            e.preventDefault();
            ercategory.innerHTML = "Please select category";
            errors.push('Mistake');
        }
        
        if(city == "")
        {
            e.preventDefault();
            ercity.innerHTML = "Please select city";
            errors.push('Mistake');
        }

        if(errors.length == 0)
        {
            return true;
        }


    });
});