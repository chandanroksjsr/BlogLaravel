@extends('layouts.app')

@section('content')
    <!-- Content Section -->
    <section class="page-section">
        <div class="container">

            <div class="row">

                <!-- Content -->
                <div class="col-sm-8">

                    <!-- Post -->
                    <div class="blog-item mb-80 mb-xs-40">

                        <h1 class="mt-0">{{$post->title}}</h1>

                        <!-- Media Gallery -->
                        {{--<div class="blog-media mt-40 mb-40 mb-xs-30">--}}
                            {{--<ul class="clearlist content-slider">--}}
                                {{--<li>--}}
                                    {{--<img src="images/portfolio/full-project-1.jpg" alt=""/>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<img src="images/portfolio/full-project-2.jpg" alt=""/>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<img src="images/portfolio/full-project-3.jpg" alt=""/>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    <!-- Text -->
                        <div class="lead">
                            <p>
                                {{$post->content}}
                            </p>
                        </div>
                        <!-- End Text -->

                    </div>
                    <!-- End Post -->

                    <!-- Comments -->
                    <div class="mb-80 mb-xs-40">

                        <h6 class="blog-page-title uppercase">Comments
                            <small class="number">(3)</small>
                        </h6>

                        <ul class="media-list text comment-list">

                            <!-- Comment Item -->
                            <li class="media comment-item">

                                <a class="pull-left" href="#"><img class="media-object comment-avatar"
                                                                   src="images/user-avatar.png" alt="" width="50"
                                                                   height="50"></a>

                                <div class="media-body">

                                    <div class="comment-item-data">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        Feb 9, 2014, at 10:23<span class="separator">&mdash;</span>
                                        <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                        ante eleifend eleifend.
                                    </p>

                                    <!-- Comment of second level -->
                                    <div class="media comment-item">

                                        <a class="pull-left" href="#"><img class="media-object comment-avatar"
                                                                           src="images/user-avatar.png" alt=""></a>

                                        <div class="media-body">

                                            <div class="comment-item-data">
                                                <div class="comment-author">
                                                    <a href="#">Sam Brin</a>
                                                </div>
                                                Feb 9, 2014, at 10:27<span class="separator">&mdash;</span>
                                                <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                            </div>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at
                                                magna ut ante eleifend eleifend.
                                            </p>


                                        </div>

                                    </div>
                                    <!-- End Comment of second level -->

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item -->
                            <li class="media comment-item">

                                <a class="pull-left" href="#"><img class="media-object comment-avatar"
                                                                   src="images/user-avatar.png" alt=""></a>

                                <div class="media-body">

                                    <div class="comment-item-data">
                                        <div class="comment-author">
                                            <a href="#">Emma Johnson</a>
                                        </div>
                                        Feb 9, 2014, at 10:37<span class="separator">&mdash;</span>
                                        <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                        ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item -->
                            <li class="media comment-item">

                                <a class="pull-left" href="#"><img class="media-object comment-avatar"
                                                                   src="images/user-avatar.png" alt=""></a>

                                <div class="media-body">

                                    <div class="comment-item-data">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        Feb 9, 2014, at 10:3<span class="separator">&mdash;</span>
                                        <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                        ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                        </ul>

                    </div>
                    <!-- End Comments -->


                    <!-- Add Comment -->
                    <div class="mb-80 mb-xs-40">

                        <h6 class="blog-page-title uppercase">Leave a comment</h6>

                        <!-- Form -->
                        <form method="post" action="#" id="form" role="form" class="form">

                            <div class="row mb-20 mb-md-10">

                                <div class="col-md-6 mb-md-10">
                                    <!-- Name -->
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name *"
                                           maxlength="100" required>
                                </div>

                                <div class="col-md-6">
                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Email *" maxlength="100" required>
                                </div>

                            </div>

                            <div class="mb-20 mb-md-10">
                                <!-- Website -->
                                <input type="text" name="website" id="website" class="form-control"
                                       placeholder="Website" maxlength="100" required>
                            </div>

                            <!-- Comment -->
                            <div class="mb-30 mb-md-10">
                                <textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment"
                                          maxlength="400"></textarea>
                            </div>

                            <!-- Send Button -->
                            <button type="submit" class="btn btn-mod btn-medium">
                                Send comment
                            </button>

                        </form>
                        <!-- End Form -->

                    </div>
                    <!-- End Add Comment -->

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
                                <li>
                                    <a href="#" title="">Design</a>
                                    <small>
                                        - 15
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Development</a>
                                    <small>
                                        - 3
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Photography</a>
                                    <small>
                                        - 5
                                    </small>
                                </li>
                                <li>
                                    <a href="#" title="">Other</a>
                                    <small>
                                        - 1
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