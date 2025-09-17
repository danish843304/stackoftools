@extends('users.layout.main')

@section('content')

<!-- =======================
Main Banner START -->

<!-- <section class="position-relative overflow-hidden pb-0 pb-sm-5">
	<div class="container">
		<div class="row align-items-center justify-content-xl-between g-4 g-md-5">
			<div class="col-lg-7 col-xl-5 position-relative z-index-1 text-center text-lg-start mb-2 mb-md-9 mb-xl-0">
				<h6 class="mb-3 font-base bg-primary bg-opacity-10 text-primary py-2 px-4 rounded-2 d-inline-block">Get started with Stackoftools</h6>
				<h1 class="mb-4 display-5">Smart Tools for Everyday
					<span class="position-relative d-inline-block">Digital Tasks.
						
					</span>
				</h1>
				<p class="mb-3">Stack of Tools offers a wide range of free, fast, and reliable online tools to simplify, convert, compress, and manage your digital tasks effortlessly all in one place.</p>
				<form class="border rounded p-2 mb-4">
					<div class="input-group">
						<input class="form-control border-0 me-1" type="search" placeholder="Find your course">
						<button type="button" class="btn btn-primary mb-0 rounded"><i class="fas fa-search"></i></button>
					</div>
				</form>
				
			</div>

			<div class="col-lg-5 col-xl-6 text-center position-relative">
				<figure class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5 ps-5 d-none d-md-block">
					<svg width="297.5px" height="295.9px">
					<path stroke="#F99D2B" fill="none" stroke-width="13" d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9"></path>
					</svg>
				</figure>

				<div class=" position-relative">
					<div class="bg-warning rounded-4 border border-white border-5 h-200px h-sm-300px shadow"></div>
					<img src="assets/images/element/06.png" class="position-absolute bottom-0 start-50 translate-middle-x"  alt="">
				</div>

			</div>
		</div>
	</div>
</section> -->

<section class="position-relative pb-0 pb-sm-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2>Smart Tools for Everyday Digital Tasks.</h2>
				<p class="mb-0">Stack of Tools offers a wide range of free, fast, and reliable online tools to simplify, convert, compress, and manage your digital tasks effortlessly all in one place.</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/data-science.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Image Format Converter</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/online.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Image Resizer</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/engineering.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Image Compressor</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/coding.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Image Crop Tool</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/profit.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Image to Base64</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/medical.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Base64 to Image</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/home.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">CSV to Excel</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/artist.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Word to PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/data-science.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">TXT to PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/online.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">PDF to TXT</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/engineering.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">HTML to PDF</a></h5>
					<span class="mb-0">53 Course</span>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/coding.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Markdown to HTML/PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/profit.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Merge PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/medical.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Split PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/home.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Compress PDF</a></h5>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="assets/images/element/artist.svg" alt="">
					</div>
					<h5 class="mb-1"><a href="#" class="stretched-link">Add Watermark to PDF</a></h5>
				</div>
			</div>

		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bg-light rounded-3 p-4">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover py-1">
						<div class="tiny-slider-inner" data-autoplay="true" data-gutter="80" data-arrow="true" data-dots="false" data-items="5" data-items-lg="3" data-items-md="2" data-items-xs="1">
							
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/22.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Chemistry</span></a>
								</div>
							</div>
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/23.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Physics</span></a>
								</div>
							</div>
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/21.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Technology</span></a>
								</div>
							</div>
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/24.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Health</span></a>
								</div>
							</div>
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/25.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Business</span></a>
								</div>
							</div>
							<!-- Item -->
							<div>
								<div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
									<img src="assets/images/element/26.svg" class="h-40px" alt="">
									<a href="#" class="text-primary-hover stretched-link"><span class="h6 ms-2">Engineer</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider END -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>

@endsection