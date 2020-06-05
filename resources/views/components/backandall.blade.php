        <button type="button" class="btn btn-primary my-2 text-right" onclick="goBack()">
            <i class="fas fa-arrow-left"></i> Back
        </button>
        <a href="#" class="btn my-2 text-right style-orange text-white my-all">
            <i class="fas fa-city"></i> See all jobs from all country and city
        </a>
        @isset($categoryname)
                <h4 class="mb-4 lead"> Category > {{$categoryname->name}} >&nbsp; @isset($cityname) {{$cityname->name}} @endisset</h4>
        @endisset
       

        

   