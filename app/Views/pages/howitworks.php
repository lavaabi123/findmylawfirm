<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
p.mb-0::before {
    content: "*";
    padding-right: 10px;
}
</style>
<main class="pt-4 pt-sm-5">	<div class="container max-1170">		
<h4 class="title-md fw-normal text-black">How it Works!</h4>		
<h2 class="title-lg mb-0 text-black">For Clients - It’s Free!</h2>		
<ul class="tick list-unstyled my-3">			
<li><strong>Search for Law Firms: </strong>				
	<p>You don’t need to create an account to begin your search for trusted legal representation. Simply enter your location and select the area of law you need help with, such as personal injury, family law, business law, criminal defense, or more.
</p></li>			
<li><strong>Browse Law Firm Profiles:</strong>				
	<p>Explore detailed profiles of verified law firms and attorneys. Learn about their experience, practice areas, case results, client reviews, and credentials to help you make an informed decision.
</p>			
</li>			
<li><strong>Contact Your Attorney:</strong>
<p>Once you find the right law firm, you can contact them directly through our platform to schedule a consultation or request more information about their services.</p>
</li>
<li><strong>Get the Legal Help You Deserve:</strong>
<p>Your chosen attorney will guide you through the legal process with professionalism and care — helping you protect your rights, resolve your case, and move forward with confidence.</p>
</li>
</ul>
<a href="<?= base_url('/providers') ?>" class="btn bg-black minbtn py-3 mt-4 mb-5">FIND MY LAW FIRM</a>				
<h2 class="title-lg mb-0 mt-sm-4">For Lawyers and Law Firms</h2>		
<ul class="tick list-unstyled my-3 text-orange">			
<li><strong>Choose A Plan & Create Your Profile:</strong>				
<p>If you’re a law firm or attorney looking to grow your client base, start by selecting one of our listing plans. Create a professional profile with your firm’s name, practice areas, location, and key information that helps clients find and trust you.</p>			
</li>			
<li><strong>Showcase Your Expertise:</strong>				
<p>Use your profile to highlight your experience, case successes, and areas of specialization. Add professional photos, team bios, and client testimonials to set your firm apart.</p>			
</li>			
<li><strong>Connect with Clients:</strong>				
<p>As people search for attorneys in your area, your profile appears in relevant results — connecting you with qualified leads actively seeking legal help.</p>			
</li>			
<li><strong>Receive Inquiries:</strong>				
<p>Manage and respond to inquiries directly from potential clients. Streamline your intake process and focus on delivering results.</p>			
</li>			

<li>
	<strong>Build Trust and Grow Your Practice:</strong>				
	<p>Provide exceptional legal service, earn positive reviews, and watch your client base expand through ongoing visibility on FindMyLawFirm.org.</p>			
</li>

</ul>		
<a href="<?php echo base_url('pricing'); ?>" class="btn minbtn py-3 mt-4 mb-5">LIST YOUR LAW FIRM</a>	
</div>
<div class="container join-list">
<h2 class="title-lg mb-md-5">Why Join FindMyLawFirm.org</h2>
<ul class="line-list">
<li>Use your profile as a professional mini-website</li>
<li>Exclusive to verified law firms and attorneys</li>
<li>We handle the SEO for you</li>
<li>We manage advertising and lead generation</li>
<li>Access data and analytics about your listing performance</li>
<li>Founded by marketing professionals who understand the legal industry</li>
</ul>
</div>
	
<img src="<?= base_url('assets/frontend/images/howitworks.jpg') ?>" class="img-fluid w-100 mt-sm-5" alt="" />	<div class="container max-1170">		<div class="row py-md-5 position-relative">			<div class="col-sm-12 py-5">				<div class="position-relative z-1">				<h4 class="title-md mb-2">Have questions?</h4>				<h2 class="title-xl fw-900 mb-2">Visit our FAQs!</h2>				<p>We’ve answered a lot of common questiions here or you can visit our <a href="<?php echo base_url('/contact'); ?>">Contact Page</a> to message us directly.</p>				<a href="<?php echo base_url('/faq'); ?>" class="btn yellowbtn minbtn">FAQs</a>				</div>			</div>		</div>	</div>
</main>			
<?= $this->endSection() ?>