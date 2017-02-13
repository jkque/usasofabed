@extends('layouts.app')
@section('style')
<style>
	
</style>
@endsection

@section('content')

	<!-- Page Title
	============================================= -->
	<section id="page-title">

		<div class="container clearfix">
			<h1>Contact</h1>
			<span>Get in Touch with Us</span>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>

	</section><!-- #page-title end -->

	<!-- Google Map
	============================================= -->
	<section id="google-map" class="gmap slider-parallax"></section>

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Postcontent
				============================================= -->
				<div class="postcontent nobottommargin">

					<h3>Send us an Email</h3>

					<div class="contact-widget">

						<div class="contact-form-result"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_two_third">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

			{{-- 				<div class="col_one_third col_last">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div> --}}

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>
					</div>

				</div><!-- .postcontent end -->

				<!-- Sidebar
				============================================= -->
				<div class="sidebar col_last nobottommargin">

					<address>
						<strong>Headquarters:</strong><br>
						A.S FORTUNA ST., BANILAD, MANDUE CITY <br> 
						100 MTRS FROM HOME BUILDERS AND OAKRIDGE<br>
					</address>
					<abbr title="Phone Number"><strong>Phone:</strong></abbr> (032) 272-7434<br>
					<abbr title="Mobile Number"><strong>Mobile:</strong></abbr> (+63) 927 168 6970<br>
					<abbr title="Mobile Number"><strong>Mobile:</strong></abbr> (+63) 927 168 6970<br>
					<abbr title="Email Address"><strong>Email:</strong></abbr> bellacaprisusasofabed@yahoo.com

{{-- 					<div class="widget noborder notoppadding">

						<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
							<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
							<div class="flexslider" style="width: auto;">
								<div class="slider-wrap">
									<div class="slide"></div>
								</div>
							</div>
						</div>

					</div> --}}

{{-- 					<div class="widget noborder notoppadding">

						<a href="#" class="social-icon si-small si-dark si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon si-small si-dark si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon si-small si-dark si-dribbble">
							<i class="icon-dribbble"></i>
							<i class="icon-dribbble"></i>
						</a>

						<a href="#" class="social-icon si-small si-dark si-forrst">
							<i class="icon-forrst"></i>
							<i class="icon-forrst"></i>
						</a>

						<a href="#" class="social-icon si-small si-dark si-pinterest">
							<i class="icon-pinterest"></i>
							<i class="icon-pinterest"></i>
						</a>

						<a href="#" class="social-icon si-small si-dark si-gplus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

					</div> --}}

				</div><!-- .sidebar end -->

			</div>

		</div>

	</section><!-- #content end -->
@endsection

@section('script')
<script type="text/javascript">

	jQuery('#google-map').gMap({

		address: 'BTC Alumni Dr, Mandaue City, 6014 Cebu',
		maptype: 'ROADMAP',
		zoom: 14,
		markers: [
			{
				address: "BTC Alumni Dr, Mandaue City, 6014 Cebu",
				html: "A.S FORTUNA ST., BANILAD, MANDUE CITY <br> 100 MTRS FROM HOME BUILDERS AND OAKRIDGE",
				icon: {
					image: "assets/images/icons/map-icon-red.png",
					iconsize: [32, 39],
					iconanchor: [13,39]
				}
			}
		],
		doubleclickzoom: false,
		controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: true,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
	});
	
</script>
@endsection
