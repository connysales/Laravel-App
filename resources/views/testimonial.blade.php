

@extends('index')
@section('title','HOME')
@section('content')


<!-- Testimonial Block 01-->
<section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-97vh bg-overlay">
	<div class="container">
		<div class="row">
			<div class="head-box text-center mb-3 col-md-12 mt-5">
				<h2 class="font-abril text-white">What Our Clients Says About Us</h2>
			</div>
		</div>
		<div class="single-testimonial">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <div class="carousel-inner pt-5" role="listbox">
		      <div class="carousel-item active">
		        <div class="testimonial-box text-center">
					<div class="testimonial-content w-100 bg-faded">
						<p class="mb-0"><i class="fa fa-quote-left fa-3x text-white" aria-hidden="true"></i></p>
						<p class="lead font-abril text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<div class="testimonial-footer">
							<h4 class="mt-2 mb-0 text-primary">Gerald Montgomery</h4>
							<p class="white text-white">-United States</p>
						</div>
					</div>
				</div>
		      </div>
		      <div class="carousel-item">
		        <div class="testimonial-box text-center">
					<div class="testimonial-content w-100 bg-faded">
						<p class="mb-0"><i class="fa fa-quote-left fa-3x text-white" aria-hidden="true"></i></p>
						<p class="lead font-abril text-white">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
						<div class="testimonial-footer">
							<h4 class="mt-2 mb-0 text-primary">Harper Robertson</h4>
							<p class="white text-white">-United States</p>
						</div>
					</div>
				</div>
		      </div>
		    </div>
		    <div class="navigator-box">
		    	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="fa fa-angle-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="fa fa-angle-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
		    </div>
		  </div>
		</div>
	</div>
</section>
@endsection