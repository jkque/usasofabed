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
			<h1>About</h1>
			<span>Our history</span>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">About</li>
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
			</div>
		</div>

	</section><!-- #content end -->
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
