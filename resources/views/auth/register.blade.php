@extends('layouts.website')

@section('content')

<header id="header" class="header-inner">
    <div class="container">
        <div class="logo-site">
            <a href="#"><img src="{{asset('assets/website/images/logo.svg')}}" alt=""></a>
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
        <div class="box-form-layout">
            <div class="bf-head">
                <h2>Register</h2>
                <h3>Line Academy sign in account</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <x-input-label for="name" :value="__('Name')" />
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    <span class="f-icon fi1"></span>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <span class="f-icon fi4"></span>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" />
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <span class="f-icon fi5"></span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <input type="password" id="password_confirmation"  name="password_confirmation" class="form-control" placeholder="Password">
                    <span class="f-icon fi5"></span>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-submit-st1">{{ __('Register') }}</button>
                </div>
            </form>
            <div class="bf-footer">
                <p>By creating an account, you agree to Boomset's <a href="#">Terms of Service</a> and <a href="#">Privacy Notice</a></p>
                <p>Dont have an account yet? <a href="{{ route('login') }}">Sign in</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
