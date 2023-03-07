@extends('layouts.website')

@section('title','Contact Us')

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
                <img src="{{asset('assets/website/images/search.svg')}}" alt="">
            </a>
        </div>
        <div class="sidebar_menu">
            <nav class="pushmenu pushmenu-right">
                <a class="push-logo" href="#">
                    <img src="{{asset('assets/website/images/logo-xs.svg')}}" alt="Line Technology"></a>
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
<section class="section-map">
    <div id="googleMap"></div>
</section><!--section-map-->
<section class="section-content-innerPage">
    <div class="container">
        <div class="contact-box">
            <div class="contact-head">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>contact us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            <form class="contact-form" action="#">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <textarea class="form-control" placeholder="Write Massage"></textarea>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-contact">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
