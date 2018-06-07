@extends('layouts.app')

@section('content')
    <!-- Content Section -->
    <section class="page-section">
        <div class="container">

            <div class="row">

                <!-- Content -->
                <div class="col-sm-7 col-sm-offset-1">


                    <!-- Post -->
                    @foreach($posts as $post)
                        <div class="blog-item">

                            <!-- Date -->
                            <div class="blog-item-date">
                                <span class="date-num">{{$post->created_at->format('d.m.Y H:i')}}</span>
                            </div>
                            <!-- Post Title -->
                            <h2 class="blog-item-title animate"><a href="blog-post.html">{{$post->title}}</a></h2>

                            <!-- Author, Categories, Comments -->
                            {{--<div class="blog-item-data">--}}
                                {{--Posted by <a href="#">Mark Brin</a>--}}
                                {{--<span class="separator">&mdash;</span>--}}
                                {{--<a href="">Video</a>--}}
                                {{--<span class="separator">&mdash;</span>--}}
                                {{--<a href="#">23&nbsp;Comments</a>--}}
                            {{--</div>--}}

                            <!-- Image -->
                        {{--<div class="blog-media">--}}
                        {{--<a href="blog-post.html"><img src="images/portfolio/full-project-4.jpg" alt="" /></a>--}}
                        {{--</div>--}}

                        <!-- Text Intro -->
                            <div class="blog-item-body">
                                <p>
                                    {!! substr($post->content, 0, 250) !!}
                                </p>
                            </div>

                            <!-- Read More Link -->
                            <div class="blog-item-foot">
                                <a href="{{Route('blog.show', ['id' => $post->id, 'slug' => str_slug($post->title)])}}" class="btn btn-mod  btn-small">Read More <i
                                            class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                @endforeach
                <!-- End Post -->

                    <!-- Pagination -->
                    <div class="pagination">
                        {{$posts->links()}}
                    </div>
                    <!-- End Pagination -->

                </div>
                <!-- End Content -->

                <!-- Sidebar -->
                <div class="col-sm-3 col-sm-offset-1 sidebar">

                    <!-- Search Widget -->
                    <div class="widget">
                        <form class="form-inline form" role="form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Start Search">
                                    <span class="icon-magnifier"></span>
                                </button>
                                <input type="text" class="form-control search-field" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!-- End Search Widget -->

                    <!-- Widget -->
                    <div class="widget">

                        <h5 class="widget-title">Categories</h5>

                        <div class="widget-body">
                            <ul class="clearlist widget-menu">

                                <li>
                                    <a href="#" title="">Branding</a>
                                    <small>
                                        - 7
                                    </small>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <!-- End Widget -->

                </div>
                <!-- End Sidebar -->
            </div>

        </div>
    </section>
    <!-- End Content Section -->
@endsection
