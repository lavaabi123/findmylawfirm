<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
p.mb-0::before {
    content: "*";
    padding-right: 10px;
}
</style>
<main class="pt-4 pt-sm-5">	<div class="container max-1170">		<h4 class="title-md fw-normal text-black">How it Works!</h4>		<h2 class="title-xl mb-0 fw-900 text-black">For Pet Owners</h2>		<ul class="tick list-unstyled my-3">			<li><strong>Search for Groomers:</strong>				<p>There's no need to create an account to begin your search for the perfect groomer for your pet. Simply enter your location and the specific services you need for your furry friend.</p>			</li>			<li><strong>Browse Groomer Profiles:</strong>				<p>Explore detailed profiles of groomers and grooming businesses to learn more about their expertise, services, and pricing.</p>			</li>			<li><strong>Contact Your Groomer:</strong>				<p>After finding the perfect grooming service, you can easily contact the groomer through our platform to book an appointment.</p>			</li>			<li><strong>Enjoy Grooming Services:</strong>				<p>Bring your pet to the chosen groomer, and they will take care of the rest, ensuring your pet looks and feels their best.</p>			</li>		</ul>		<a href="<?= base_url('/providers') ?>" class="btn bg-black minbtn py-3 mt-4 mb-5">FIND A GROOMER</a>				<h2 class="title-xl mb-0 fw-900 text-orange mt-sm-4">For Groomers</h2>		<ul class="tick list-unstyled my-3 text-orange">			<li><strong>Choose A Plan & Create Your Profile:</strong>				<p>If you're a grooming business owner or groomer looking to expand your reach, start by choosing either our standard or premium plan. Create a professional profile and fill in details about your services, expertise, and location.</p>			</li>			<li><strong>Showcase Your Skills:</strong>				<p>Use your profile to showcase your grooming skills with high-quality images and descriptions. Highlight what sets your services apart from the rest.</p>			</li>			<li><strong>Connect with Pet Owners:</strong>				<p>As pet owners search for grooming services, your profile will be visible to potential clients in your area. This exposure helps you reach a broader audience and attract new customers.</p>			</li>			<li><strong>Booking Requests:</strong>				<p>Once pet owners discover your services, you'll receive messages and booking requests and can manage your grooming schedule effortlessly.</p>			</li>			

<li>
	<strong>Deliver Quality Grooming:</strong>				
	<p>Provide exceptional grooming services to your clients and their pets, ensuring a positive experience that keeps them coming back.</p>			
</li>
<li>
	<strong>Why Become A Groomer on FindMyGroomer.com?</strong>	
		<p class="mb-0">You can use your profile as your website</p> 
		<p class="mb-0">Exclusive for Dog Groomers and Pet Owners</p>
		<p class="mb-0">We do the SEO for you</p> 
		<p class="mb-0">We do the Advertising for you</p>
		<p class="mb-0">Data/ Analytics</p>
		<p class="mb-0">Started by Groomers for Groomers</p>
		<p class="mb-0">One lead will pay for your entire year</p>	
</li>


</ul>		<a href="<?php echo base_url('pricing'); ?>" class="btn yellowbtn minbtn py-3 mt-4 mb-5">BECOME A GROOMER</a>	</div>	<img src="<?= base_url('assets/frontend/images/howitworks.jpg') ?>" class="img-fluid w-100 mt-sm-5" alt="" />	<div class="container max-1170">		<div class="row py-md-5 position-relative">			<div class="col-sm-12 py-5">				<div class="position-relative z-1">				<h4 class="title-md mb-2">Have questions?</h4>				<h2 class="title-xl fw-900 mb-2">Visit our FAQs!</h2>				<p>We’ve answered a lot of common questiions here or you can visit our <a href="<?php echo base_url('/contact'); ?>">Contact Page</a> to message us directly.</p>				<a href="<?php echo base_url('/faq'); ?>" class="btn yellowbtn minbtn">FAQs</a>				</div>			</div>		</div>	</div>
</main>			
<?= $this->endSection() ?>