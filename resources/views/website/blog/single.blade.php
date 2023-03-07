@extends('layouts.website')

@section('title','Single Blog')

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
</header><!--header-->
    <section class="section-content-inner">
        <div class="container">
            <h2 class="title_inner">HTML5 & ANGULAR 4</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="owl-carousel" id="slide-course">
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{asset('assets/website/images/slide-co.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{asset('assets/website/images/slide-co.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_course_thumb">
                                <img src="{{asset('assets/website/images/slide-co.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-course-meta">
                        <p><img src="{{asset('assets/website/images/user.svg')}}">{{ Auth::user()->name }}</p>
                        <p><img src="{{asset('assets/website/images/clock2.svg')}}">34:12 <span><img src="{{asset('assets/website/images/date.svg')}}">12-1-2018</span></p>
                        <p><img src="{{asset('assets/website/images/clock.svg')}}">2 Month</p>
                        <p class="price-color"><img src="{{asset('assets/website/images/price.svg')}}">225 KD</p>
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
                <h2 class="title_inner">Description</h2>
                <p class="txt-description">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45  BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>
            </div>
            <div class="material-block">
                <h2 class="title_inner">Materials</h2>
                <ul class="material-list">
                    <li><a href="#"><img src="{{asset('assets/website/images/pdf_file.svg')}}">css3_and_html.pdf</li></a>
                    <li><a href="#"><img src="{{asset('assets/website/images/zip_file.svg')}}">css3_1.zip</li></a>
                </ul>
            </div>
            <div class="comment-block">
                <h2 class="title_inner">Comments</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="comment-block-in">
                            <div class="comment-head">
                                <h2>Mohammed abu sedo</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                            </div>
                            <div class="comment-body">
                                <div class="comment-item">
                                    <h3>Khaled abdullah</h3>
                                    <span>3 hrs ago</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="comment-item">
                                    <h3>Khaled abdullah</h3>
                                    <span>3 hrs ago</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="comment-footer">
                                <div class="comment-write">
                                    <textarea class="form-control" placeholder="write a comment..."></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
