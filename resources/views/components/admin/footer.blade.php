<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/')}}vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/')}}vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/')}}js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('/')}}vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('/')}}js/demo/chart-area-demo.js"></script>
  <script src="{{asset('/')}}js/demo/chart-pie-demo.js"></script>
  <script src="{{asset('/')}}js/search.js"></script>
  <script src="{{asset('/')}}js/create-job-ajax.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('/')}}js/counter-effect.js"></script>
  <script src="{{asset('/')}}js/back.js"></script>

  <script>
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
                
            })
        
      });
      });
  </script>
</body>

</html>
