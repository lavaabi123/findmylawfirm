<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<main class="pt-4 pt-sm-5">
	<div class="pageTitle py-2 text-center">
		<h2 class="title-xxl black fw-900 mb-0">Frequently Asked Questions</h2>
    </div>
	<div class="container py-3 py-xl-5">
		<div class="m-auto faqs" id="">
		  <div class="border-bottom mb-4">
			<h6>What is Findmygroomer.com?</h6>
			<p>Findmygroomer.com is a nationwide online directory that helps dog owners find professional dog groomers in their area. It also provides a platform for dog groomers to create and manage their business profiles online.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can I use Findmygroomer.com as a dog owner?</h6>
			<p>As a dog owner, you can simply enter your location, browse through groomer profiles, and contact groomers directly to book an appointment for your pet. <a href="<?php echo base_url('providers'); ?>">Find your groomer here!</a></p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is Findmygroomer.com available nationwide?</h6>
			<p>Yes, Findmygroomer.com covers dog groomers all across the United States, making it a comprehensive resource for dog owners.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Can I search for specific grooming services, such as mobile grooming or special breed grooming?</h6>
			<p>Absolutely! You can filter your search based on specific grooming services and even search for groomers specializing in certain dog breeds.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can dog groomers benefit from Findmygroomer.com?</h6>
			<p>Dog groomers can <a href="<?php echo base_url('pricing'); ?>">create a business profile</a>, gain online visibility, and receive leads from potential clients through our platform.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is it free for dog groomers to create a business profile?</h6>
			<p>No, We offer 2 different plan options to choose from. Please visit our pricing page to learn more about the different plans we currently offer.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Why is there not a free listing option?</h6>
			<p>We prioritize the verification of dog groomers and grooming shop owners to ensure their legitimacy and commitment to their businesses. Requiring payment information during registration serves as a significant step in confirming their authenticity. This process helps maintain the quality and credibility of our platform, ensuring that only serious individuals and businesses can create profiles.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>What are the benefits of a premium business profile?</h6>
			<p>Premium profiles receive priority placement in search results, the ability to showcase more photos and services, and access to advanced marketing tools.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How do I claim or create my business profile on Findmygroomer.com?</h6>
			<p>Simply sign up, <a href="<?php echo base_url('pricing'); ?>">create an account</a>, and follow the step-by-step instructions to add or claim your business profile.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Can I update my business information on my profile?</h6>
			<p>Yes, you can edit and update your business information at any time through your account dashboard.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How do I contact a dog groomer through the website?</h6>
			<p>You can contact a groomer directly through their profile page by using the provided contact information or any contact forms they may have.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>
				Is there a mobile app for Findmygroomer.com?
			  </h6>
			<p>We currently do not have a mobile app, but our website is fully optimized for mobile use.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>
				Can I report a problem or inappropriate content on the website?
			  </h6>
			<p>Yes, we have a reporting system in place. If you encounter any issues or inappropriate content, please use the provided reporting tools.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>
				Is my personal information safe when using Findmygroomer.com?
			  </h6>
			<p>We take your privacy seriously and have security measures in place to protect your personal information. Please review our <a href="<?php echo base_url('privacy'); ?>">Privacy Policy</a> for more details.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can I provide feedback or get in touch with customer support?</h6>
			<p>You can contact our customer support team through the <a href="<?php echo base_url('contact'); ?>">Contact Us</a> page on the website. We appreciate your feedback and are here to assist you.</p>
		  </div>
		  
		  
		</div>
	</div>
	<div class="wbprovider text-center">	<div class="container py-sm-3 d-flex flex-column">		<h3 class="title-md mb-2 text-black">Want to become a groomer?</h3>		<p class="title-xs text-grey fw-bold">It’s easy and you can make a profile absolutely FREE!</p>		<div class="d-flex justify-content-center gap-3 mt-4">			<a href="<?php echo base_url('/pricing'); ?>" class="btn yellowbtn minbtn">Become a Groomer</a>			<a href="<?php echo base_url('/how-it-works'); ?>" class="btn yellowbtn minbtn">How It Works</a>		</div>	</div></div>
</main>
<?= $this->endSection() ?>