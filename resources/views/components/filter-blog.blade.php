<div class="sidebar-box">
                
                    <div class="sidebar-box ftco-animate">
                    <div class="categories">
                    <h3 class="heading-3">Jobs</h3>
                    @foreach($categories as $category)
                    <li><a href="{{asset('/jobscategory/'.$category->id)}}">{{$category->name}} <span>{{$category->jobs->count()}}</span></a></li>
                    @endforeach
                   
                    </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                    <h3 class="heading-3">Recent Blog</h3>
                    @foreach($blogsfilter as $bf)
                    <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url('{{asset('/img-blogs/'.$bf->url)}}');"></a>
                    <div class="text">
                    <h3 class="heading"><a href="{{asset('/blog/'.$bf->id)}}">{{$bf->title}}</a></h3>
                    <div class="meta">
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-calendar"></span> {{$bf->created_at->format('d-m-Y')}}</a></div>
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="{{asset('/blog/'.$bf->id)}}"><span class="icon-chat"></span> 19</a></div>
                    </div>
                    </div>
                    </div>
                    @endforeach
                    
                    </div>    
            </div> 