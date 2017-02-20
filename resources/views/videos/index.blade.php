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
			<h1>Videos</h1>
			<span>See how our product works</span>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">Videos</li>
			</ol>
		</div>

	</section><!-- #page-title end -->
	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">
				<video poster="{{ asset('assets/images/the_cozzy_mattress.png')}}" preload="auto" controls style="display: block; width: 100%;">
					<source src='{{ asset('assets/videos/the_cozzy_mattress.mp4')}}' type='video/mp4' />
					{{-- <source src='images/videos/explore.mp4' type='video/mp4' /> --}}
				</video>
			</div>
		</div>

	</section><!-- #content end -->
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
