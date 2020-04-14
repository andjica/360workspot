$(document).ready(function(){
    $('.my-all').click(function(event){

        event.preventDefault();
        $.ajax({
            method: 'GET',
            url: "http://localhost/workspot/public/jobsajax",
            success: function(data) {
                console.log(data.jobs);
                
                
                text = "";
                
                $.each(data.jobs, function(index, jobs){
                text+= "<div class=''col-md-12 ftco-animate' style='width:100%;'><div class='job-post-item p-4 d-block d-lg-flex align-items-center'><div class='one-third mb-4 mb-md-0'><div class='job-post-item-header align-items-center'><span class='subadge'>"+jobs['salary']['salary_between']+"<i class='fas fa-euro-sign'></i> per year</span><br><img src='http://localhost/workspot/public/img-jobs/"+jobs['url']+"' class='img-fluid' width='170px'><h2 class='mr-3 text-black'><a href=''>"+jobs['title']+"</a></h2></div><div class='job-post-item-body d-block d-md-flex'><div class='mr-3'><span class='icon-layers'></span> <a href='#'>Google, Inc.</a></div><div><span class='icon-my_location'>"+jobs['city']['name']+"</span> <span></span></div></div><p>Posted on: "+jobs['created_at']+"</p></div><div class='one-forth ml-auto d-flex align-items-center mt-4 md-md-0'><div><a href='#' class='icon text-center d-flex justify-content-center align-items-center icon mr-2'><span class='icon-heart'></span></a></div><a href='http://localhost/workspot/public/job/"+jobs['id']+"' class='btn btn-primary py-2'>Apply Job</a></div></div></div>";
                   
                })

                $('#jobsall').html(text);
                console.log(data);
            }
        })
            
    });

   
});

