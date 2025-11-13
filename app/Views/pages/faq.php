<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<main class="pt-4 pt-sm-5">
	<div class="pageTitle py-2 text-center">
		<h2 class="title-xxl black fw-900 mb-0">Frequently Asked Questions</h2>
    </div>
	<div class="container py-3 py-xl-5">
		<div class="m-auto faqs" id="">
		  <div class="border-bottom mb-4">
			<h6>What is <a href="<?php echo base_url('providers'); ?>">FindMyLawFirm.org</a>?</h6>
			<p><a href="<?php echo base_url('providers'); ?>">FindMyLawFirm.org</a> is a nationwide online directory that helps individuals and businesses find reputable law firms and attorneys in their area. It also provides a platform for law firms to create and manage their online business profiles.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can I use <a href="<?php echo base_url('providers'); ?>">FindMyLawFirm.org</a> to find a lawyer?</h6>
			<p>Simply enter your location, browse through attorney and law-firm profiles, and contact them directly to schedule a consultation. Start your search here!</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is FindMyLawFirm.org available nationwide?</h6>
			<p>Yes. FindMyLawFirm.org includes law firms and legal professionals across the United States, making it a comprehensive resource for anyone seeking legal services.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Can I search for specific legal services or practice areas?</h6>
			<p>Absolutely. You can filter your search based on the services you need—such as personal injury, family law, criminal defense, real estate, business law, and more.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can law firms benefit from FindMyLawFirm.org?</h6>
			<p>Law firms can create a business profile, increase their online visibility, and receive leads from potential clients actively seeking legal representation.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is it free for law firms to create a business profile?</h6>
			<p>No. We offer multiple plan options. Please visit our Pricing page to learn more about available plans.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Why is there not a free listing option?</h6>
			<p>We prioritize credibility and verification. Requiring payment information during registration helps verify that the law firm is legitimate and actively practicing. This ensures that only serious, verified firms appear on the platform—maintaining quality, trust, and safety for users.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>What are the benefits of a premium business profile?</h6>
			<p>Premium profiles receive higher placement in search results, the ability to showcase more practice areas, attorneys, case highlights/reviews, and access to additional marketing and lead-generation tools.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How do I claim or create my law firm profile on FindMyLawFirm.org?</h6>
			<p>Just sign up, create an account, and follow the step-by-step instructions to build or claim your firm’s profile.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Can I update my firm’s information after creating a profile?</h6>
			<p>Yes. You can edit and update your firm’s information at any time through your dashboard.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How do I contact a law firm through the website?</h6>
			<p>You can contact a law firm directly through its profile using the provided contact details or any available contact forms.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is there a mobile app for FindMyLawFirm.org?</h6>
			<p>Not at this time, but our website is fully optimized for mobile use.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Can I report a problem or inappropriate content on the website?</h6>
			<p>Yes. We have a reporting system in place. If you encounter inaccurate information or inappropriate content, please use the “Report” feature on the site.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>Is my personal information safe when using FindMyLawFirm.org?</h6>
			<p>Yes. We prioritize privacy and have secure systems in place to protect your information. You can read more in our Privacy Policy.</p>
		  </div>
		  <div class="border-bottom mb-4">
			<h6>How can I provide feedback or contact customer support?</h6>
			<p>Visit our Contact Us page and send us a message. We welcome feedback and are here to help.</p>
		  </div>
		  
		  
		</div>
	</div>
	<div class="wbprovider text-center">	<div class="container py-sm-3 d-flex flex-column">		<h3 class="title-md mb-2 text-black">Want to become a law firm?</h3>		<p class="title-xs text-grey fw-bold">It’s easy and you can make a profile absolutely FREE!</p>		<div class="d-flex justify-content-center gap-3 mt-4">			<a href="<?php echo base_url('/pricing'); ?>" class="btn yellowbtn minbtn">Become a Law Firm</a>			<a href="<?php echo base_url('/how-it-works'); ?>" class="btn yellowbtn minbtn">How It Works</a>		</div>	</div></div>
</main>
<?= $this->endSection() ?>