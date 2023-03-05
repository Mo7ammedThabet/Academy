@extends('layouts.website')

@section('title','Contact Us')

@section('content')

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
