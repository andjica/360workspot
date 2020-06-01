@include('components.header')
@include('components.nav')
<section class="ftco-section bg-light no-padding m-5">
        <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-lg-12 pt-5 shadow m-3 back-sg">
         
                 
                        @include('components.user')
                
       
            </div>
            </div>
         
            </div>
            </section>
       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }
                .back-sg
                {
                   background: linear-gradient(to right, #207dff 0%, #a16ae8 100%);
                }
            </style>