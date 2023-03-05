@extends('layouts.website')

@section('title','Faq')

@section('content')

<div class="bg_top_page" style="background-image: url(images/_11517470351_88347.jpg);">
    <div class="container">
        <h2 class="page_title">FAQ</h2>
    </div>
</div>
<section class="section-content-inner">
    <div class="container">
        <div class="sec-head">
            <div class="row">
                <div class="col-sm-8 margin-auto">
                    <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">FREQUENTLY ASKED QUESTIONS</h2>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="sec-warpper">
            <div class="col-md-6 col-sm-8 margin-auto">
                <div class="asked-list panel-group" id="accordion">
                    <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="panel-heading accordion-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</a>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="panel-heading accordion-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</a>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="panel-heading accordion-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</a>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="panel-heading accordion-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">Lorem ipsum dolor sit amet, consectetur adipisicing elit ?</a>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
