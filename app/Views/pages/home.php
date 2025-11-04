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
    border-radius: 8px 8px 8px 8px;
    padding: 0px;
    display: flex;
    flex-direction: column;
    align-items: center;box-shadow:1px 4px 12px -2px rgba(0,0,0,.14);
}
.blogs .col img {
    border-radius: 8px 8px 0 0;
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
<div class="searchSec py-sm-5" style="margin-top:7rem;">

	<div class="container-fluid py-sm-5">

		<div class="row">

			<div class="col col-sm-6 offset-sm-6 form-section mt-2">

				<h3 class="title-xl black">Find a Dog Groomer <br />near you!</h3>

				<p class="title-sm text-grey mb-sm-5 fw-bold">We make it Easy to make the Best decision.</p>

				<form class="form-input col-sm-8 col-xxl-6" method='post' id="search-form" action='<?php echo base_url(); ?>/providers'>

					<div class="form-section">

						<!--<div class="form-group">

							<select name='category_id' class='form-control' >

								<option value=''>What are you searching for?</option>

								<?php if(!empty($categories_list)){

									foreach($categories_list as $row){ ?>

									<option value=<?php echo $row->permalink; ?>><?php echo $row->name; ?></option>

								<?php } } ?>

							</select>	

						</div>	-->

						<input type="hidden" name="category_id" value="" />		
						<!-- Text input field -->
						<input type="hidden" id="text-input" value="">						

						<select name='location_id' class='form-control locationhome' >

							<option value=''>Enter your Zip Code</option>

						</select>

						<input type='submit' value='Search' class='btn yellowbtn'>

					</div>

				</form>

				

			</div>

		</div>

	</div>

</div>

<!--<div class="services-list py-4 px-3">

Massage Therapists • Personal Trainers • Yoga Instructors • Chiropractors • Physical Therapists • Holistic Herbalist

</div> -->
			

	<?php if(!empty($featured)){ ?>
	<div class="container py-5">	
		<div class="wrapper filterResult featuredgrommers_ajax" id="demo">

		  <h3 class="title-md text-center mb-3 mb-sm-4 black">Featured Groomers</h3>

			<div class="owl-carousel-load">
			

			</div>
			<div class="row justify-content-center">
			<a href="<?php echo base_url('/providers'); ?>" class="btn bg-black minbtn mt-3 mt-sm-5">Find My Groomer</a>
			</div>
		</div>
	</div>
	<?php }else{ ?>
	<div class="container mys-sm-3">
	</div>		
	<?php } ?>

<div class="bg-dgray bg-popular-cities">

	<div class="container">

		<div class="row py-5">

			<div class="col-12 col-lg-4 m-auto mb-5 mb-lg-0 py-sm-4">

				<h3 class="title-md text-center mb-3 mb-sm-5 pb-sm-3 black">Popular Cities</h3>

				<div class="title-sm cats row row-cols-2 row-cols-md-2 g-2">

					<a class="col" onclick="provider_set_session(this)" data-value="Atlanta||GA||33.84437100000000||-84.47405000000000||30301||13078" href='javascript:void(0)'>Atlanta, GA</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Huntington Beach||CA||33.64030200000000||-117.76944200000000||92605||39191" href='javascript:void(0)'>Huntington Beach, CA</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Beverly Hills||CA||33.78659400000000||-118.29866200000000||90209||38340" href='javascript:void(0)'>Beverly Hills, CA</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Las Vegas||NV||36.17372000000000||-115.10647000000000||89101||38065" href='javascript:void(0)'>Las Vegas, NV</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Chicago||IL||41.81192900000000||-87.68732000000000||60601||26752" href='javascript:void(0)'>Chicago, IL</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Long Beach||CA||33.80430900000000||-118.20095700000000||90801||38489" href='javascript:void(0)'>Long Beach, CA</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Dallas||TX||32.78117900000000||-96.79032900000000||75201||32988" href='javascript:void(0)'>Dallas, TX</a>			

					<a class="col" onclick="provider_set_session(this)" data-value="Los Angeles||CA||33.97395100000000||-118.24840500000000||90001||38238" href='javascript:void(0)'>Los Angeles, CA</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Fort Lauderdale||FL||26.08511500000000||-80.15931700000000||33301||14598" href='javascript:void(0)'>Fort Lauderdale, FL</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Miami||FL||25.77907600000000||-80.19782000000000||33101||14493" href='javascript:void(0)'>Miami, FL</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Hallandale||FL||26.14572400000000||-80.44825400000000||33008||14424" href='javascript:void(0)'>Hallandale, FL</a>

					<a class="col" onclick="provider_set_session(this)" data-value="New York||NY||40.75042200000000||-73.99632800000000||10001||3585" href='javascript:void(0)'>New York, NY</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Hollywood||FL||26.09151400000000||-80.19296600000000||33019||14435" href='javascript:void(0)'>Hollywood, FL</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Newport Beach||CA||33.64030200000000||-117.76944200000000||92658||39224" href='javascript:void(0)'>Newport Beach, CA</a>

					

					<a class="col" onclick="provider_set_session(this)" data-value="Houston||TX||29.81314200000000||-95.30978900000000||77001||33887" href='javascript:void(0)'>Houston, TX</a>

					<a class="col" onclick="provider_set_session(this)" data-value="Orlando||FL||28.54517900000000||-81.37329100000000||32801||14307" href='javascript:void(0)'>Orlando, FL</a>

				</div>

			</div>

			</div>

			</div>

			</div>

<div class="testimonial text-center py-5">

	<div class="container py-sm-4">

		<h3 class="title-md mb-3 mb-sm-5 pb-sm-3 text-white">Testimonials</h3>

		<div class="owl-carousel testimonial-carousel owl-theme"  id="testimonial">

			<div class="col item">

				<div class="bg-white">

					<img src="<?= base_url('assets/frontend/images/stars.png') ?>">

					<p>I stumbled upon FindMyGroomer.com while searching for a reliable groomer for my furry friend. Thanks to this platform, I found a fantastic groomer who not only provides excellent service but also has flexible scheduling options. Finding availability has never been easier! Five stars for making pet grooming hassle-free.</p>

					<h6 class="black title-sm">- Susan V.</h6>

				</div>

			</div>

			<div class="col item">

				<div class="bg-white">

					<img src="<?= base_url('assets/frontend/images/stars.png') ?>">

					<p>FindMyGroomer.com is a game-changer for pet owners. I discovered a skilled groomer on this platform, and the best part is the ease of finding appointment slots that fit my schedule. It's like having a personal grooming concierge for my pup. Highly recommended!</p>

					<h6 class="black title-sm">- Mary S.</h6>

				</div>

			</div>

			<div class="col item">

				<div class="bg-white">

					<img src="<?= base_url('assets/frontend/images/stars.png') ?>">

					<p>I can't express how relieved I am to have found FindMyGroomer.com. The platform not only connects you with top-notch groomers but also simplifies the process of scheduling appointments. My pup looks forward to grooming days, and I look forward to the stress-free experience using this site.</p>

					<h6 class="black title-sm">- Stephen M.</h6>

				</div>

			</div>

		</div>

		<a href="<?php echo base_url('/testimonials'); ?>" class="btn bg-black minbtn mt-3 mt-sm-5">View All</a>

	</div>

</div>

<div class="wbprovider text-center">

	<div class="container py-sm-3 d-flex flex-column">

		<h3 class="title-md mb-0 mb-sm-2 text-black">Ready to sign up as a groomer?</h3>

		<p class="title-xs text-grey fw-bold">It’s easy and you can make a profile absolutely FREE!</p>

		<div class="d-flex justify-content-center gap-3 mt-4">

			<a href="<?php echo base_url('/pricing'); ?>" class="btn yellowbtn minbtn">Become a Groomer</a>

			<a href="<?php echo base_url('/how-it-works'); ?>" class="btn bg-black minbtn">How It Works</a>

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
		<a href="<?php echo base_url('/blog'); ?>" class="btn bg-black minbtn mt-3 mt-sm-5">View All</a>
	</div>

</div>
<?php } ?>
<div class="missionSec d-sm-none">
<div class="container">
	<div class="row">
		<div class="col-sm-12 my-4 my-sm-5">
			<h2 class="title-xl fw-900 mb-3 mb-md-4">Our Mission</h2>
			<p class="lh-sm">Our mission is to bridge the gap, to help people find groomers they can trust, and to assist groomers in finding clients who value their skills and care as much as they do. Together, we can create a harmonious space where dogs receive the best care, groomers find fulfillment in their work, and dog owners discover peace of mind in the hands of a devoted groomer.</p>
			<a href="<?php echo base_url('/about-us'); ?>" class="btn yellowbtn minbtn m-auto mb-3 d-block">Learn More</a>
		</div>
	</div>
</div>
<img src="<?= base_url('assets/frontend/images/aboutus.jpg') ?>" class="img-fluid w-100 d-block">
</div>
<script>


	$(document).ready(function(){		

		attachLocationHome();

	})

	function attachLocationHome(){

		$('select.locationhome').selectize({

			valueField: 'homesearch',

			labelField: 'zipcode',

			searchField: 'zipcode',

			create: false,

			//preload: true,

			render: {

				option: function(item, escape) {

					return '<div>'+escape(item.zipcode)+'</div>';

				}

			},

			load: function(query, callback) {
				$('#text-input').val(query);

				$.ajax({

					url: '<?php echo base_url(); ?>/providerauth/get-locations?from=home&q=' + encodeURIComponent(query),

					type: 'GET',

					error: function() {

						callback();

					},

					success: function(res) {

						res = $.parseJSON(res);

						callback(res.locations);

					}

				});

			}

		});

	}

	function provider_set_session(_this){

		var location = $(_this).attr('data-value');

		var city_state = location.split('||')[0]+', '+location.split('||')[1];

		var city_state1 = city_state.replace(', ', '-').replace(' ', '-').toLowerCase();

		window.location = '<?php echo base_url(); ?>/providers/'+city_state1;     

	}

</script>
<script>
	jQuery(document).ready(function($){
		showLocation('');
	
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }


	function showLocation(position){
		console.log(position);
		var latitude = (position.coords!== undefined) ? position.coords.latitude : '';
		var longitude = (position.coords!== undefined) ? position.coords.longitude : '';
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>'+'/providerauth/set-location',
			data:'latitude='+latitude+'&longitude='+longitude,
			success:function(msg){
				//$('#demo').html('<div id="testing" class="owl-carousel"></div>');            
				$(".owl-carousel-load").html('<div id="testing" class="owl-carousel featured-carousel">'+msg+'</div>');
				
				$(".featured-carousel").owlCarousel({
					loop:false,
					margin:10,
					nav:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:3
						},
						1000:{
							items:4
						}
					}
				})
				
				$(".testimonial-carousel").owlCarousel({
					loop:false,
					margin:10,
					nav:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1000:{
							items:3
						}
					}
				})
				$(".blog-carousel").owlCarousel({
					loop:false,
					margin:10,
					nav:true,
					responsive:{
						0:{
							items:1
						},
						600:{
							items:2
						},
						1000:{
							items:3
						}
					}
				})
			
			}
		})
	}
	})
</script>
<?= $this->endSection() ?>