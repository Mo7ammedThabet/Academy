@extends('layouts.website')

@section('title', $course->name)




@section('content')
    <header id="header" class="header-inner">
        <div class="container">
            <div class="logo-site">
                <a href="#"><img src="images/logo.svg" alt=""></a>
            </div>
            <div class="col-header-right">
                <ul class="head-menu clearfix">
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Sign in</a></li>
                    <li class="focus-line"><a href="#">lineKW</a></li>
                </ul>
                <div id="menu_bars" class="right hidden visible-xs">
                    <span class="t1"></span>
                    <span class="t2"></span>
                    <span class="t3"></span>
                </div>
                <a href="#search" class="search-icon">
                    <img src="images/search.svg" alt="">
                </a>
            </div>
            <div class="sidebar_menu">
                <nav class="pushmenu pushmenu-right">
                    <a class="push-logo" href="#">
                        <img src="images/logo-xs.svg" alt="Line Technology"></a>
                    <ul class="push_nav centered">
                        <li class="clearfix">
                            <a href="#"><span>01.</span>Sign up</a>
                        </li>
                        <li class="clearfix">

                            <a href="#"> <span>02.</span>Sign in</a>
                        </li>
                        <li class="clearfix">
                            <a href="#"> <span>03.</span>lineKW</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <ul class="social_icon black top25 bottom20 list-inline">
                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--header-->

    <section class="section-content-inner">
        <div class="container">
            <h2 class="title_inner">{{ $course->title }}</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel" id="slide-course">
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{ asset('storage/' . $course->image) }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{ asset('assets/website/images/slide-co.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{ asset('assets/website/images/slide-co.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-8">
                    <div class="item">
                        <div class="item_course_thumb">
                            <div class="item_course_thumb">
                                <img src="{{ asset('storage/' . $course->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="box-course-meta">
                        <p><img src="{{ asset('assets/website/images/user.svg') }}">{{ $course->user->name }}</p>
                        <p><img src="{{ asset('assets/website/images/clock2.svg') }}">{{ $course->time_course }} <span><img
                                    src="{{ asset('assets/website/images/date.svg') }}">{{ $course->date }}</span></p>
                        <p><img src="{{ asset('assets/website/images/clock.svg') }}">2 Month</p>
                        <p class="price-color"><img src="{{ asset('assets/website/images/price.svg') }}">
                            {{ $course->price }} KD</p>
                        <div class="share-course">
                            <h3>Share course</h3>
                            <ul class="share-social clearfix">
                                <li class="s-facebook">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="s-twitter">
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="s-linkedin">
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-subscribe-link">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="description-block">
                <h2 class="title_inner">{{ __('Description') }}</h2>
                <p class="txt-description">{{ $course->description }}</p>
            </div>
            <div class="material-block">
                <h2 class="title_inner">{{ __('Materials') }}</h2>
                <ul class="material-list">
                    <li><a href="#"><img src="{{ asset('assets/website/images/pdf_file.svg') }}">css3_and_html.pdf
                    </li></a>
                    <li><a href="#"><img src="{{ asset('assets/website/images/zip_file.svg') }}">css3_1.zip</li>
                    </a>
                </ul>
            </div>
            <div class="comment-block">
                <h2 class="title_inner">{{ __('Comments') }}</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="comment-block-in">

                            <div class="comment-body">
                                @foreach ($course->comments as $comment)
                                    <div class="comment-item">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <span>{{ $comment->created_at }}</span>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                @endforeach


                            </div>
                            <div class="comment-footer">
                                <div class="comment-write">
                                    <form action="{{ route('website.comment') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        <textarea name="content" class="form-control" placeholder="write a comment..."></textarea>
                                        <button type="submit">حفظ</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
