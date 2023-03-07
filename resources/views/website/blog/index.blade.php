@extends('layouts.website')

@section('content')

		<!--Home start-->
		<section id="home">
		    <div class="swiper-container parallax-slider" id="gradient">
		        <div class="swiper-wrapper">
	                <div class="swiper-slide" style="background: transparent">
	                    <div class="swiper--img">
	                        <img src="{{asset('assets/website/images/slider_bg@1x.jpg')}}" alt="" class="img-responsive">
	                    </div>
	                    <div class="container">
	                        <div class="slider-content">
	                        	<h2 style="text-align:center">Courses with</h2>
	                        	<h3 style="text-align:center">Distinction</h3>
	                        	<a class="btn button special" href="#">LEARN MORE</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="swiper-slide" style="background: transparent">
	                    <div class="swiper--img">
	                        <img src="{{asset('assets/website/images/slider_bg@1x.jpg')}}" alt="" class="img-responsive">
	                    </div>
	                    <div class="container">
	                        <div class="slider-content">
	                        	<h2 style="text-align:center">Courses with</h2>
	                        	<h3 style="text-align:center">Distinction</h3>
	                        	<a class="btn button special" href="#">LEARN MORE</a>
	                        </div>
	                    </div>
	                </div>
		        </div>
		        <!-- Add Arrows -->
		        <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
		        <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>

		    </div>
		</section>
		<!--Home end-->
		<section class="section-content-academy">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="course-item">
							<div class="course-thumb">
								<a href="#" class="img-hover">
									<img src="{{asset('assets/website/images/1@1x.png')}}" alt="" class="img-responsive">
								</a>
							</div>
							<div class="course-txt">
								<div class="cour__top clearfix">
									<h2><a href="#">CSS3 Essentials</a></h2>
									<div class="c-tags"><i class="fa fa-tag"></i>Software</div>
								</div>
								<div class="cour__bottom clearfix">
									<div class="cb-left">
										<div class="c-avatar">
                                            {{-- image user --}}
											<img src="{{asset('assets/website/images/s.jpeg')}}" alt="" class="avatar-thumb">
											<h2>Yasser ahmed</h2>
										</div>
										<ul class="meta-course clearfix">
											<li><img src="{{asset('assets/website/images/clock2.svg')}}" alt="">34:12</li>
											<li><img src="{{asset('assets/website/images/date.svg')}}" alt="">12-01-2018</li>
										</ul>
									</div>
									<div class="cb-right">
										<div class="cour-salary">255 KD</div>
									</div>
								</div>
								<a href="#" class="book-now">Book now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="loader-block">
					Waiting<img src="{{asset('assets/website/images/loader.svg')}}" alt="">
				</div>
			</div>
		</section>

@endsection
