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
                <h2>Sign in</h2>
                <h3>Line Academy sign in account</h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" :value="old('email')">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <span class="f-icon fi4"></span>
                </div>
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" />
                    <input type="password" id="password"  name="password" required autocomplete="current-password" class="form-control" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <span class="f-icon fi6"></span>
                </div>
                <div class="form-group form-remm-forget clearfix">
                    <div class="remmber-pass ui_checkbox ui_checkbox-st2">
                        <input type="checkbox">
                        <label>Remember me</label>
                    </div>
                    <a href="#" class="forget-pass">Forget password ?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-submit-st1">{{ __('Log in') }}</button>
                </div>
            </form>
            <div class="bf-footer">
                <p>Dont have an account yet? <a href="{{ route('register') }}">Sign up</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
