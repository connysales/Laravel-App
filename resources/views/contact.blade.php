

@extends('index')
@section('title','Contact')
@section('content')

<!-- Contact Block -->
<section id="contact" class="contact-section bg-dark">
	<div id="map" class="bg-overlay"></div>
	<div class="container py-5">
		<div class="col-lg-8 col-md-6 col-sm-10 form-sec bg-white my-5 p-5 mx-auto">
				<form>
				  <h2 class="mb-4">Contact Us!</h2>
				  <div class="row">
				  	<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput">Full Name</label>
							<input class="form-control" id="formGroupExampleInput" placeholder="Full Name" onfocus="this.placeholder=''" onblur="this.placeholder='Full Name'" type="text">
						</div>
				  	</div>
				  	<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Phone Number</label>
							<input class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder='Phone Number'" type="text">
						</div>		
				  	</div>
				  </div>
				  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Email Address</label>
							<input class="form-control" id="formGroupExampleInput2" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" type="email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Address</label>
							<input class="form-control" id="formGroupExampleInput2" placeholder="Enter Address" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Address'" type="email">
						</div>
					</div>
				  </div>
				  <div class="row">
				  	<div class="col-md-12">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Message</label>
							<textarea class="form-control" placeholder="Enter your message here!" rows="4" onfocus="this.placeholder=''" onblur="this.placeholder='Enter your message here!'"></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-capsul px-4">Submit</button>
						</div>		
				  	</div>
				  </div>
			  </form>
			</div>
	</div>
</section>

@endsection