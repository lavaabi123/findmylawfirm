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
			<div class="col-sm-12 my-4 my-sm-5">
		<h2 class="title-xl fw-900 mb-3 mb-md-4 text-center">Resources</h2>
		<p></p>
		</div>
		</div>
	</div>

</main>	

<?= $this->endSection() ?>