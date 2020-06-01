@include('components.header')
@include('components.nav')
@include('components.search-users-bar')
<section class="ftco-section bg-light no-padding m-5">
        <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-lg-10 pt-5">
                <div class="row">
                    @if($postcount == 0)
                        <div class="alert alert-danger">
                            <h4>There is no result in this kind of filtering, search another user</h4>
                        </div>
                    @else
                        @include('components.users-response')
                    @endif
                </div>
            </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                <div class="block-27">
                <ul>
                <li>  {{$posts->links()}}</li>

                </ul>
                </div>
                </div>
                </div>
            </div>
            </section>
       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }
            </style>