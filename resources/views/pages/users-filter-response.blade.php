@include('components.header')
@include('components.nav')


        <div class="container mt-5 bg-light" style="margin-top:120px !important;">
        <div class="row">
        <div class="col-lg-12 justify-content-center p-2 bg-white shadow" style="border-radius: 20px;">
        <div class="tag-widget post-tag-container text-center">
                    <div class="tagcloud">
                    <h3 class="tag-cloud-link bg-white p-2" style="    font-size: 17px;"><i class="fas fa-sort fa-1x"></i> 
                    &nbsp;Category : @isset($categoryname){{$categoryname}}@endisset 
                    <i class="fas fa-city"></i> City : @isset($cityname){{$cityname}}@endisset
                    <i class="fab fa-pagelines text-success"></i>
                    </h3>
                    <hr class="mt-0">
                    
                        @foreach($subcats as $sub)
                        <form action="{{route('search-company-category-subcategory')}}" method="GET">
                    
                    <input type="hidden" name="categoryId" value="{{$cat}}">
                    <input type="hidden" name="cityId" value="{{$cit}}">
                    <input type="hidden" name="subcatId" value="{{$sub->id}}">
                   <ul style="    float: left; list-style:none;">
                    <li><button type="submit" class="btn border bg-light">{{$sub->name}}</button></li>
                    </ul>
                    </form>
                        @endforeach
                        
                    </div>
                    </div>
        </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 justify-content-center">
                <div class="row justify-content-center">
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

       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }
            </style>