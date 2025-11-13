<?= $this->extend('layouts/main') ?>



<?= $this->section('content') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.carousel.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.theme.default.min.css">

<script src="<?php echo base_url(); ?>/assets/owlcarousel/owl.carousel.js"></script>  
<style>

.blogs {
	background:  url(../images/testibg.jpg) no-repeat center top / cover;
}
.blogs .container {
    max-width: 1140px;
}
.blogs .col > div {
    height: 100%;
    border-radius: 25px;
    padding: 0px;
    display: flex;
    flex-direction: column;
    align-items: center;box-shadow:1px 4px 12px -2px rgba(0,0,0,.14);
}
.blogs .col img {
    border-radius: 25px 25px 0 0;
    object-fit: contain;
}
.blogs .col h6 {
	margin-top: 15px;
	margin-bottom: 5px;
	font-size: 17px !important;min-height: 70px;
}
.blog_content{	
    text-align : left;min-height: 180px;
}
</style>
<main class="pt-4 pt-sm-5">

	<div class="container">
		<div class="row">
			<div class="col-sm-6 pe-xl-5">
				<h4 class="title-md">About FindMyLawfirm.org</h4>
				<h2 class="title-xl fw-900 mb-3 mb-md-4">We make it Easy </br>
				to make the </br>
				Best decision!</h2>
				<p>At <a href="<?php echo base_url(); ?>">findmylawfirm.org</a>, our mission is to make the process of finding the right law firm simple, transparent, and trustworthy for individuals and businesses, while helping reputable attorneys connect with clients who truly value their expertise.</p>
				<p>We’re committed to eliminating the stress and uncertainty that often comes with searching for legal representation. We understand that when legal matters arise, whether personal, professional, or unexpected, having the right law firm by your side can make all the difference. You deserve a legal partner who isn’t just skilled, but genuinely invested in protecting your rights, your interests, and your future.</p>
				<p>Our platform empowers clients with a seamless way to discover law firms that align with their needs, values, and expectations. It’s more than just finding a lawyer, it’s about finding a trusted advocate who will guide you, communicate clearly, and stand with you every step of the way.</p>
				<p>At the same time, we support law firms by connecting them with qualified leads, people actively seeking legal help. We aim to foster long-term relationships built on trust, professionalism, and results, helping law firms grow their practice while making a meaningful difference in the lives of their clients.</p>
			</div>
			<div class="col-sm-6 text-center">
				<img src="<?= base_url('assets/frontend/images/abtimg.jpg') ?>" class="img-fluid withShadow">
				<a href="<?php echo base_url('providers'); ?>" class="btn yellowbtn minbtn btnWicon"><span>Find My Law Firm</span></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 my-4 my-sm-5">
		<h2 class="title-xl fw-900 mb-3 mb-md-4">Our Mission</h2>
		<p>Our mission is to bridge the gap between people in need of legal support and law firms they can trust. We help individuals and businesses find attorneys who are not only highly skilled, but genuinely committed to advocating for their clients. At the same time, we empower law firms to connect with clients who value their expertise, professionalism, and dedication.</p>
		<p>Together, we aim to create a space where people feel confident navigating legal challenges, attorneys build meaningful and lasting client relationships, and every case receives the respect and attention it deserves.</p>
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

		<h3 class="title-md mb-2">Ready to list your Law Firm?</h3>

		<p class="title-xs text-grey fw-bold">It’s easy and you can make a profile absolutely FREE!</p>

		<div class="d-flex justify-content-center gap-3 mt-4">

			<a href="<?php echo base_url('/pricing'); ?>" class="btn yellowbtn minbtn">LIST YOUR LAW FIRM</a>

			<a href="<?php echo base_url('/how-it-works'); ?>" class="btn yellowbtn minbtn">HOW IT WORKS</a>

		</div>

	</div>

</div>
<?php if(!empty($blogs)){ ?>		
<div class="blog text-center py-5">

	<div class="container blogs">

		<h3 class="title-md mb-3 mb-sm-3 pb-sm-3 text-dark">Blog</h3>

		<div class="owl-carousel blog-carousel owl-theme"  id="blog">
		<?php  foreach($blogs as $blog){ ?>		
			<div class="col item">
				<div class="bg-white mb-3" style="position:relative;">
					<div class="mb-1 mb-md-3 w-100">
						<a href="<?php echo  base_url('blog_detail/'.$blog['clean_url']); ?>"><img src="<?php echo !empty($blog['image']) ? base_url().'/uploads/blog/'.$blog['image'] : base_url().'/assets/img/user.png'; ?>" class="d-block w-100" alt="..."></a>
					</div>
					<a href="<?php echo  base_url('blog_detail/'.$blog['clean_url']); ?>"><h6 class="black title-sm px-3 pb-4"><?php echo $blog['name']; ?></h6></a>
				</div>
			</div>
		<?php } ?>

		</div>
		<a href="<?php echo base_url('/blog'); ?>" class="btn minbtn mt-3 mt-sm-5">View All</a>
	</div>

</div>
<?php } ?>

</main>	

<?= $this->endSection() ?>