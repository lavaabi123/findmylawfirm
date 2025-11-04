<?= $this->extend('layouts/main') ?>



<?= $this->section('content') ?>

<main class="pt-4 pt-sm-5">

	<div class="container">
		<div class="row">
			<div class="col-sm-6 pe-xl-5">
				<h4 class="title-md">About Find My Groomer</h4>
				<h2 class="title-xl fw-900 mb-3 mb-md-4">We make it Easy </br>
				to make the </br>
				Best decision!</h2>
				<p>At <a href="<?php echo base_url(); ?>">findmygroomer.com</a>, our mission is to make the quest for the perfect groomer a seamless and trustworthy experience for dog owners, while simultaneously helping groomers find loyal clientele and wonderful canine companions.</p>
				<p>We're dedicated to simplifying the process of finding a groomer in your area whom you can trust wholeheartedly. We understand the profound bond that exists between dogs and their owners, and we believe this bond deserves to be celebrated with groomers who are not just skilled but deeply committed to the well-being of our beloved fur babies.</p>
				<p>In pursuit of this mission, we're determined to empower dog owners with a platform where they can discover grooming professionals who share their passion and dedication. This connection goes beyond the technicalities of grooming; it's about finding someone who will treat your dog like family.</p>
				<p>Simultaneously, we're committed to supporting groomers in building a thriving business by connecting them with a community of dog lovers who appreciate their expertise. We aim to create an environment where groomers can develop lasting relationships with both clients and the incredible dogs they care for.</p>
			</div>
			<div class="col-sm-6 text-center">
				<img src="<?= base_url('assets/frontend/images/abtimg.jpg') ?>" class="img-fluid withShadow">
				<a href="<?php echo base_url('providers'); ?>" class="btn yellowbtn minbtn btnWicon"><img src="<?= base_url('assets/frontend/images/ficon.png') ?>" class="img-fluid"> <span>Find a Groomer</span></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 my-4 my-sm-5">
		<h2 class="title-xl fw-900 mb-3 mb-md-4">Our Mission</h2>
		<p>Our mission is to bridge the gap, to help people find groomers they can trust, and to assist groomers in finding clients who value their skills and care as much as they do. Together, we can create a harmonious space where dogs receive the best care, groomers find fulfillment in their work, and dog owners discover peace of mind in the hands of a devoted groomer.</p>
		</div>
		</div>
	</div>
	<img src="<?= base_url('assets/frontend/images/aboutus.jpg') ?>" class="img-fluid w-100">
	<div class="container">
		<div class="row py-md-5 position-relative">
			<div class="col-sm-12 py-5">
				<div class="position-relative z-1">
				<h4 class="title-md mb-2">Have questions?</h4>
				<h2 class="title-xl fw-900 mb-2">Visit our FAQs!</h2>
				<p>We’ve answered a lot of common questiions here or you can visit our <a href="<?php echo base_url('/contact'); ?>">Contact Page</a> to message us directly.</p>
				<a href="<?php echo base_url('/faq'); ?>" class="btn yellowbtn minbtn">FAQs</a>
				</div>
				<img src="<?= base_url('assets/frontend/images/findicon.png') ?>" class="img-fluid searchIcon">
			</div>
		</div>
	</div>

	<div class="wbprovider text-center">

	<div class="container py-sm-3 d-flex flex-column">

		<h3 class="title-md mb-2 text-black">Want to become a groomer?</h3>

		<p class="title-xs text-grey fw-bold">It’s easy and you can make a profile absolutely FREE!</p>

		<div class="d-flex justify-content-center gap-3 mt-4">

			<a href="<?php echo base_url('/pricing'); ?>" class="btn yellowbtn minbtn">Become a Groomer</a>

			<a href="<?php echo base_url('/how-it-works'); ?>" class="btn yellowbtn minbtn">How It Works</a>

		</div>

	</div>

</div>

</main>	

<?= $this->endSection() ?>