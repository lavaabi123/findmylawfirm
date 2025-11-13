<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- reCAPTCHA JS-->
<script src="https://www.google.com/recaptcha/api.js?render=<?= getenv('GOOGLE_RECAPTCHAV3_SITEKEY') ?>"></script>
<!-- Include script -->
<script type="text/javascript">
	grecaptcha.ready(function() {
		 grecaptcha.execute("<?= getenv('GOOGLE_RECAPTCHAV3_SITEKEY') ?>", {action: 'validate'}).then(function(token) {
			  // Store recaptcha response
			  $("#g-recaptcha-response").val(token);

		 });
	});
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.theme.default.min.css">
<script src="<?php echo base_url(); ?>/assets/owlcarousel/owl.carousel.js"></script>
 
<?php
$img = '';
if(!empty($user_detail->avatar)){
	$img = base_url()."/uploads/userimages/".$userId."/".$user_detail->avatar;
	$user_photos = array_merge(array(array('file_name'=>$user_detail->avatar,'image_tag'=>'')),$user_photos);
}else if(!empty($user_photos)){
	$img = base_url()."/uploads/userimages/".$userId."/".$user_photos[0]['file_name'];
}else{ 
	$img =  base_url()."/assets/img/user.png";				
}

?>
    <div class="viewProfile pt-4 pt-sm-5">
        <?php echo $this->include('Common/_messages') ?>
		<div class="container pb-5">
			<div class="row text-black">
				<div class="col-sm-6">
					<?php if($user_detail->plan_id >0 ){ if(!empty($user_photos)){ ?>
					<div class="product-slider">
						<div id="sync1" class="owl-carousel owl-theme">
						<?php if(!empty($user_photos)){
								foreach($user_photos as $p => $photo){ ?>
						  <div class="item">
							<a class="proPic example-image-link" href="<?php echo base_url()."/uploads/userimages/".$userId."/".$photo['file_name']; ?>" data-lightbox="example-1">
							  <img
								src="<?php echo base_url()."/uploads/userimages/".$userId."/".$photo['file_name']; ?>"
								alt="image-1" class="example-image"
							  /></a>
						  </div>
						  <?php } } ?>
						</div>

						<div id="sync2" class="owl-carousel owl-theme">
						<?php if(!empty($user_photos)){
								foreach($user_photos as $p => $photo){ ?>
						  <div class="item">
							<img
							  src="<?php echo base_url()."/uploads/userimages/".$userId."/".$photo['file_name']; ?>"
							  alt="landscape"
							/>
						  </div>
						  <?php } } ?>
						</div>
						
					 </div>
					<?php } else{
					if($user_detail->gender == 'Female'){ ?>
						<div class="proPic gender">
						<img class="img-fluid" src="<?php echo base_url()."/assets/img/female_user.png"; ?>">
						</div>
					<?php }else{ ?>
					<div class="proPic gender">
					<img class="img-fluid" src="<?php echo base_url()."/assets/img/user.png"; ?>">
					</div>
					<?php } } ?>
					<div class="d-block d-sm-none mt-3 mt-lg-5">
						<h3 class="title-sm dblue mb-0"><?php echo $user_detail->rate_type.' by'; ?> <?php echo $user_detail->fullname; ?></h3>
						<p class="dblue mb-4"><?php echo $user_detail->category_name; ?> in <?php echo $user_detail->city.', '.$user_detail->state_code.' '.$user_detail->zipcode; ?></h3>
						
						<div class="my-4 my-sm-5">
						<?php if(!empty($user_detail->mobile_no)){ ?>
							<a href="javascript:void(0)" data-phone="<?php echo phoneFormat($user_detail->mobile_no); ?>" data-label="<?php if(!empty($user_detail->business_name)){ echo "Us"; }else{ echo "Me"; } ?>" class="showPhone button btn yellowbtn minbtn" onclick="showPhone(this)"><i class="fas fa-phone"></i> CALL ME</a>
						<?php } ?>	
						</div>
				    </div>
					<?php 
					if(!empty($user_photos)){ ?>					
					<a href="<?php echo base_url('provider_gallery/'.$userId); ?>" class="button btn mt-3 mt-lg-5">View Photo Gallery</a>
					<?php }
					if(!empty($user_detail->about_me)){
					?>
					<hr class="my-4">
					<div class="abtSec">
						<h6 class="dblue"><?php echo trans('About Us'); ?></h6>
						<p><?php echo $user_detail->about_me; ?></p>
					</div>
					<?php }  ?>					
						
					<?php } /*else{ if(!empty($user_photos)){ ?>
					<div class="proPic">
					<img class="img-fluid" src="<?php echo base_url()."/uploads/userimages/".$userId."/".$user_photos[0]['file_name']; ?>">
					</div>
					<?php } else{ if($user_detail->gender == 'Female'){ ?>
						<div class="proPic gender">
						<img class="img-fluid" src="<?php echo base_url()."/assets/img/female_user.png"; ?>">
						</div>
					<?php }else{ ?>
					<div class="proPic gender">
					<img class="img-fluid" src="<?php echo base_url()."/assets/img/user.png"; ?>">
					</div>
					<?php } } } */ ?>						
					<hr class="my-4">		
					<?php if(!empty($user_detail->facebook_link) || !empty($user_detail->insta_link) || !empty($user_detail->twitter_link)){ ?>
					<h6 class="dblue mb-3">Social Media</h6>					
					<div class="socialMedia">					
					<?php if(!empty($user_detail->facebook_link)){ ?><a target="_blank" href="<?php echo !empty($user_detail->facebook_link)? $user_detail->facebook_link : '#'; ?>"><i class="fab fa-facebook-f"></i></a>	<?php } ?>				
					<?php if(!empty($user_detail->insta_link)){ ?><a target="_blank" href="<?php echo !empty($user_detail->insta_link)? $user_detail->insta_link : '#'; ?>"><i class="fab fa-instagram"></i></a>	<?php } ?>				
					<?php if(!empty($user_detail->twitter)){ ?><a target="_blank" href="<?php echo !empty($user_detail->twitter_link)? $user_detail->twitter_link : '#'; ?>"><i class="fab fa-x-twitter"></i></a>	<?php } ?>				
					</div>					
					<?php } ?>
					
					<h6 class="dblue mt-4 mb-3">Share Profile</h6>						
					<div class="socialMedia">
						<a href="javascript:void(0)" onclick="open_social_share()">
							<svg id="uploadIcon" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g><g id="Icon-Share-Apple" transform="translate(332.000000, 375.000000)"><polyline class="st0" id="Fill-74" points="-292.6,-355.7 -300,-363.1 -307.4,-355.7 -309.2,-357.5 -300,-366.8 -290.8,-357.5      -292.6,-355.7    "/>
									<polygon class="st0" id="Fill-75" points="-301.4,-364.9 -298.6,-364.9 -298.6,-335.9 -301.4,-335.9    "/>
									<path class="st0" d="M-286.2-319.2h-27.7c-2.3,0-4.2-1.9-4.2-4.2v-24.9c0-2.3,1.9-4.2,4.2-4.2h9.7v2.8h-9.7     c-0.8,0-1.4,0.6-1.4,1.4v24.9c0,0.8,0.6,1.4,1.4,1.4h27.7c0.8,0,1.4-0.6,1.4-1.4v-24.9c0-0.8-0.6-1.4-1.4-1.4h-9.7v-2.8h9.7     c2.3,0,4.2,1.9,4.2,4.2v24.9C-282-321.1-283.9-319.2-286.2-319.2" id="Fill-76"/>
								</g></g>
							</svg>
						</a>					
					</div>
					<hr class="my-4">
					
					<?php if(!empty($user_detail->question1) || !empty($user_detail->question2)){ ?>
						<div class="quesAns">	
							<h3 class="title-md dblue mb-4 mb-sm-5">A little about me <i class="toolTipinfo" data-toggle="popover">i</i></h3>
							<?php if(!empty($user_detail->question1)){ ?>
								<h6 class="dblue mb-3">Why did I become a law firm?</h6>					
								<p><?php echo !empty($user_detail->question1) ? $user_detail->question1 : '-'; ?></p>
							<?php }
							if(!empty($user_detail->question2)){ ?>					
								<h6 class="dblue mb-3">What kind of pets do I have and what are their names?</h6>
								<p><?php echo !empty($user_detail->question2) ? $user_detail->question2 : '-'; ?></p>
							<?php } ?>										
						</div>
					<?php } ?>
					
				</div>
				<div class="col-sm-6 proDetails px-sm-5">
				  <div class="d-none d-sm-block">
					<h3 class="title-md dblue mb-0"><?php //echo $user_detail->rate_type.' by'; ?> <?php echo !empty($user_detail->business_name) ? $user_detail->business_name : $user_detail->fullname; ?></h3>
					<p class="dblue mb-4"><?php echo $user_detail->category_name; ?> in <?php echo $user_detail->city.', '.$user_detail->state_code.' '.$user_detail->zipcode; ?></p>
										
					<?php if(!empty($rating)){ ?>
						<div class="d-flex">
						<img class="me-3" style="width: 80px;height: 30px;" src="<?php echo base_url('assets/frontend/images/yelp_logo.png'); ?>" />
						<p><?php
							$cfg_min_stars = 1;
						    $cfg_max_stars = 5;

						  $average_stars = $rating;
						  $temp_stars = $average_stars;

						  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) {
							if ($temp_stars >= 1) {
							  print '<i class="fa fa-star text-orange"></i> ';
							  $temp_stars--;
							}
							else {
							  if ($temp_stars >= 0.5) {
								print '<i class="fa fa-star-half-o text-orange"></i> ';
								$temp_stars -= 0.5;
							  }
							  else {
								print '<i class="fa fa fa-star-o text-orange"></i> ';
							  }
							}
						  }
						  //echo '<span>'.$rating.'</span>';
						  ?>
						</p>
					</div>
					<?php } ?>
										
					<?php if(!empty($user_detail->google_rating)){ ?>
						<div class="d-flex">
						<img class="me-3" style="height: 27px;" src="<?php echo base_url('assets/frontend/images/google_logo.png'); ?>" />
						<p><?php
							$cfg_min_stars = 1;
						    $cfg_max_stars = 5;

						  $average_stars = $user_detail->google_rating;
						  $temp_stars = $average_stars;

						  for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) {
							if ($temp_stars >= 1) {
							  print '<i class="fa fa-star text-orange"></i> ';
							  $temp_stars--;
							}
							else {
							  if ($temp_stars >= 0.5) {
								print '<i class="fa fa-star-half-o text-orange"></i> ';
								$temp_stars -= 0.5;
							  }
							  else {
								print '<i class="fa fa fa-star-o text-orange"></i> ';
							  }
							}
						  }
						  //echo '<span>'.$rating.'</span>';
						  ?>
						</p>
					</div>
					<?php } ?>
					<hr>
					<div class="">
					<?php if(!empty($user_detail->mobile_no)){ ?>
						<span class="dblue fw-bold mb-4"><?php echo phoneFormat($user_detail->mobile_no); ?></span>
						<a href="javascript:void(0)" data-phone="<?php echo phoneFormat($user_detail->mobile_no); ?>" data-label="<?php if(!empty($user_detail->business_name)){ echo "Us"; }else{ echo "Me"; } ?>" class="showPhone button btn yellowbtn mx-3" data-id="<?php echo $userId; ?>" onclick="showPhone(this)"> CALL </a>	
					<hr>
					<?php } ?>	
					</div>
				  </div>
					<?php if(!empty($user_detail->website)){ ?>
						<a href="<?php echo prep_url($user_detail->website);?>" target="_blank" class="fw-normal text-orange webLink">
						<svg enable-background="new 0 0 512 512" height="32px" id="globeIcon" version="1.1" viewBox="0 0 512 512" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256.002,7c-0.068,0-0.137,0-0.213,0c-0.029,0-0.061,0-0.098,0c-0.098,0-0.195,0.02-0.293,0.02  C118.146,7.331,7,118.68,7,256c0,137.281,111.146,248.65,248.398,248.98c0.098,0,0.195,0.02,0.293,0.02c0.037,0,0.068,0,0.098,0  c0.076,0,0.145,0,0.213,0C393.494,505,505,393.494,505,256C505,118.486,393.494,7,256.002,7z M265.957,156.011  c26.398-0.72,52.096-4.202,76.82-10.232c7.471,29.355,12.082,63.184,12.82,100.261h-89.641V156.011z M265.957,136.091V28.496  c26.865,7.431,54.061,43.225,71.395,98.122C314.357,132.161,290.488,135.391,265.957,136.091z M246.042,28.262v107.829  c-24.724-0.7-48.789-3.988-71.967-9.629C191.553,71.234,219.012,35.304,246.042,28.262z M246.042,155.991v90.048h-90.253  c0.729-37.136,5.369-71.004,12.829-100.378C193.547,151.75,219.43,155.291,246.042,155.991z M135.742,246.04H27.173  c2.198-51.2,21.272-98.121,51.813-135.277c22.177,12.217,45.706,22.216,70.354,29.686  C141.296,172.215,136.471,208.028,135.742,246.04z M135.742,265.96c0.729,37.992,5.554,73.805,13.599,105.572  c-24.639,7.489-48.177,17.488-70.354,29.704c-30.541-37.155-49.615-84.075-51.813-135.276H135.742z M155.789,265.96h90.253v89.932  c-26.611,0.7-52.504,4.261-77.433,10.368C161.148,336.906,156.518,303.058,155.789,265.96z M246.042,375.792v107.946  c-27.049-7.062-54.527-43.031-71.996-98.317C197.233,379.78,221.307,376.493,246.042,375.792z M265.957,483.504V375.792  c24.531,0.701,48.4,3.949,71.414,9.493C320.037,440.221,292.822,476.073,265.957,483.504z M265.957,355.892V265.96h89.641  c-0.738,37.038-5.35,70.828-12.781,100.164C318.053,360.093,292.375,356.592,265.957,355.892z M375.635,265.96h109.191  c-2.197,51.201-21.262,98.103-51.803,135.258c-22.354-12.295-46.086-22.371-70.947-29.88  C370.109,339.609,374.914,303.874,375.635,265.96z M375.635,246.04c-0.721-37.972-5.545-73.727-13.578-105.475  c24.842-7.509,48.576-17.566,70.908-29.86c30.58,37.155,49.664,84.096,51.861,135.335H375.635z M419.25,95.492  c-19.822,10.543-40.736,19.258-62.582,25.873c-11.652-37.467-27.994-68.047-47.33-88.123  C351.746,43.417,389.621,65.359,419.25,95.492z M201.874,33.437c-19.23,20.037-35.502,50.481-47.106,87.753  c-21.633-6.595-42.37-15.232-62.007-25.698C122.192,65.554,159.777,43.669,201.874,33.437z M92.692,416.43  c19.657-10.485,40.404-19.122,62.056-25.717c11.604,37.311,27.876,67.794,47.125,87.85  C159.748,468.312,122.144,446.407,92.692,416.43z M309.338,478.738c19.357-20.076,35.697-50.676,47.35-88.201  c21.865,6.635,42.797,15.33,62.621,25.912C389.68,446.602,351.785,468.583,309.338,478.738z" fill="#425661"/></svg>
						<?php echo $user_detail->website;?></a>
                    	<hr>						
					<?php } ?>	
					
					<div class="row fw-bold storeDetail mb-0">
					<?php
						if(!empty($user_detail->clientele) && in_array(1, json_decode($user_detail->clientele,true))){
							$class = 'fa-store';
							echo '<label><img src="'.base_url('assets/frontend/images/store.png').'" />Storefront</label>';
						}else if(!empty($user_detail->clientele) && in_array(2, json_decode($user_detail->clientele,true))){
							$class = 'fa-truck';
							echo '<label><img src="'.base_url('assets/frontend/images/truck.png').'" />Mobile</label>';
						}else if(!empty($user_detail->clientele) && in_array(3, json_decode($user_detail->clientele,true))){
							$class = 'fa-truck';
							echo '<label><img src="'.base_url('assets/frontend/images/store.png').'" />Storefront<img src="'.base_url('assets/frontend/images/truck.png').'" style="margin-left: 30px;" />Mobile</label>';
						}else{
							echo '<label>-</label>';
						}
					?>
					</div>										<hr>										
					<?php if((!empty($user_detail->clientele) && is_array(json_decode($user_detail->clientele,true)) && !in_array(2, json_decode($user_detail->clientele,true)))){ ?>					
					<div class="mb-0">
						<div id="map" class="col-sm-9 mb-3" style="height:200px;"></div>
						<span class="d-block"><?php echo $user_detail->address; ?></span>
						<span class="d-block"><?php echo $user_detail->city.', '.$user_detail->state_code.' '.$user_detail->zipcode; ?></span>
						<a class="fw-bold" href="https://maps.google.com/?q=<?php echo $user_detail->business_name.', '.$user_detail->address.', '.$user_detail->city.', '.$user_detail->state_code.', '.$user_detail->zipcode; ?>" target="_blank" onclick="direction_count(<?php echo $userId; ?>)">Get Directions ></a>					
					</div>
					<hr>					
					<?php } ?>
					
					<?php  /*if(!empty($user_detail->licensenumber)){ ?>
						<h3 class="title-sm dblue mb-0"><?php echo trans('License #'); ?></h3>
						<?php echo $user_detail->licensenumber;?>
                    	<hr>						
					<?php }*/ ?>	
					<?php if(!empty($user_detail->experience)){ ?>
						<h6 class="dblue mb-0"><?php echo trans('Years Of Experience'); ?></h6>
						<span class="fw-semibold"><?php echo $user_detail->experience;?> Years</span>
                    	<hr>						
					<?php } ?>	
					<?php //if($user_detail->plan_id == 3){ ?>
						
					<div class="row">
					<?php 
						$hoo = array();
						if(!empty($hours_of_operation)){
							foreach($hours_of_operation as $row){
								$hoo[$row['weekday']] = $row;	
							}
						}
						
						for($i = 1; $i <= 7; $i++){
							$last_sunday = strtotime('last Sunday');
							$cur = date('l', strtotime('+'.$i.' day', $last_sunday));
							$opat = !empty($hoo[$i]['opens_at']) ? date('g:ia', strtotime($hoo[$i]['opens_at'])) : '';
							$clat = !empty($hoo[$i]['closes_at']) ? date('g:ia', strtotime($hoo[$i]['closes_at'])) : '';
							echo '
							
								<div class="thick d-flex dblue justify-content-between"><div>'.$cur."</div><span class='mb-0 fw-bold'>
									";
								if(!empty($hoo[$i]['closed_all_day'])){
									echo trans("Unavailable");
								}	else{
									if(empty($opat) && empty($clat)){
										echo "By Appointments Only";
									}else{
									echo $opat." - ".$clat;
									}
								}					
								echo "</span></div>";
						} ?>
					</div>
					<hr>
					<h6 class="dblue mb-0"><?php echo trans('Rates'); ?></h6>
					<div class="row">
					<?php 
						$durations = array('m'=>'Minute '.$user_detail->rate_type, 'h'=>'Hour '.$user_detail->rate_type);
						if(!empty($rate_details)){
							foreach($rate_details as $row){
							echo "<div class='thick col-12 d-flex justify-content-between'><div>".$row->duration_amount." ".$durations[$row->duration]." </div><div class='fw-bold text-black'> $".$row->price."</div></div>";
							}
						}else{
							echo "<div class='col-12'>Yet to add Rates</div>";
						} ?>
						</div>
					<hr>
					<?php //} ?>
					<!--<h3 class="title-sm dblue mt-3 mt-lg-5 border-bottom"><?php echo trans('Basic Info'); ?></h3>
					<div class="row row-cols-1 row-cols-md-3">
						<div class="col">
							<h6><?php echo trans('License #'); ?></h6>
							<p><?php echo $user_detail->licensenumber; ?></p>
						</div>
						<div class="col">
							<h6><?php echo trans('Experience'); ?></h6>
							<p><?php echo $user_detail->experience; ?></p>
						</div>
						<div class="col">
							<?php //if($user_detail->plan_id == 3){ ?>
							<h6><?php echo trans('Website'); ?></h6>
							<p><?php echo $user_detail->website; ?></p>
							<?php //} ?>
						</div>
					</div>-->
						
						<?php 
						if(!empty($user_detail->offering) && is_array(json_decode($user_detail->offering,true)) && !empty(json_decode($user_detail->offering,true)[0])){ ?>
						<h6 class="dblue mt-3 mb-0"><?php echo trans('Services'); ?></h6>
						<?php
						$offeringyes = 0;
						if(!empty($offering)){
							foreach($offering as $offer){ 
								$offeringyes = 1;
							}
						}
						
						if($offeringyes == 1){
						?>
						
						<!--<h6 class="title-xs dblue"><?php echo trans('Training Type:'); ?></h6>-->
						<div class="row row-cols-1 row-cols-md-2 mb-4 mt-2">
						<?php
						if(!empty($offering)){
							foreach($offering as $offer){ ?>
								<?php echo (!empty($user_detail->offering) && is_array(json_decode($user_detail->offering,true)) && in_array($offer->id, json_decode($user_detail->offering,true))) ? '<label><i class="fas fa-check"></i>'.$offer->name.'</label>': ''; ?>
						<?php }
						}
						?>
						</div>
						<?php } echo '<hr>'; }  ?>
					<?php 						
						if(!empty($categories_skills) && !empty($user_detail->categories_skills) && $user_detail->categories_skills != 'null' && is_array(json_decode($user_detail->categories_skills,true)) && !empty(json_decode($user_detail->categories_skills,true)[0])){ ?>
						
						<h6 class="dblue mt-3 mb-0"><?php echo $user_detail->skill_name ?></h6>
						<div class="row row-cols-1 row-cols-md-2 mb-4 mt-2">
						<?php foreach($categories_skills as $row){ ?>
							<?php echo (!empty($user_detail->categories_skills) && $user_detail->categories_skills != 'null' && is_array(json_decode($user_detail->categories_skills,true)) && in_array($row->id, json_decode($user_detail->categories_skills,true))) ? '<label><i class="fas fa-check"></i>'.$row->name.'</label>':''; ?>
						<?php } ?>
						</div><hr>
						<?php } ?>
					<!-- MESSAGE ME - START -->
					<div id="contact-provider" class="providerMsg rounded-5 p-4 mt-4 mb-5" style="background: #f7f7f7;">
					<h6 class="text-dark text-center">Message Your Law Firm Directly</h6>
						<form action="" method="post" id="messageProviderForm" class="form-input mt-4">
							<input type="hidden" id="userId" name="userId" value="<?php echo $userId;?>">
							<div class="form-section">
								<div class="form-group"><input type="text" name="name" id="name" class="ucwords form-control" placeholder="Your Name"></div>
								<div class="form-group"><input type="text" name="email" id="email"placeholder="Your Email" class="form-control"></div>
								<div class="form-group"><input type="text" name="phone" id="phone" data-max="10" class="onlyNum form-control" placeholder="Your Phone"></div>
								<div class="form-group">
								<select name="best_way" id="best_way" class="form-control">
								<option value="" >Best way to reach you?</option>
								<option value="Text">Text</option>
								<option value="Call">Call</option>
								<option value="Email">Email</option>
								</select>
								</div>
								<div class="form-group"><textarea name="message" id="message" class="form-control" placeholder="Message"></textarea></div>
								<input type="hidden" id="g-recaptcha-response"  class="form-control" name="check_bot" value="" >
								<input type="submit" value="Submit" class="button btn w-100 mb-4 yellowbtn">
							</div>
						</form>	
					</div><!-- MESSAGE ME - END -->
					<!--<hr>
					<a href="javascript:void(0);" class="open-report-modal"><h6 class="dblue mt-3 mb-0">Report ></h6></a>
					<hr>-->
					<!--<div class="px-4 mb-4 providerMsg">
					<?php if(!empty($user_detail->mobile_no)){ ?>
						<a href="javascript:void(0)" data-phone="<?php echo phoneFormat($user_detail->mobile_no); ?>" data-label="<?php if(!empty($user_detail->business_name)){ echo "Us"; }else{ echo "Me"; } ?>" class="showPhone button btn w-100 yellowbtn" onclick="showPhone(this)"><i class="fas fa-phone"></i> CALL ME</a>
					<?php } ?>	
					</div>-->
				</div>
			</div>
		</div>
		<div class="bg-gray py-5">
			<div class="container">
				<?php if(!empty($featured[0]['total_users'])){ ?>
				<div class="wrapper">
				   <h3 class="title-md dblue text-center mb-3 mb-sm-5">Featured <?php echo $user_detail->category_name; ?> near <?php echo $search_location_name; ?></h3>
					<div class="owl-carousel owl-theme">
						<?php foreach($featured[0]['providers'] as $p => $provider ){ 
						$busin_name = !empty($provider['business_name']) ? str_replace(' ','-',strtolower($provider['business_name'])) : $user_detail->permalink ;
						?>					
						<div class="item">
							<a href="<?php echo base_url('/provider/'.$busin_name.'/'.$provider['id']); ?>">
								<div class="provider-Details">
									<div class="proPic">
									<img src="<?php echo $provider['image']; ?>" class="img-fluid">
									</div>
									<div class="pro-content py-3">
										<p class="text-grey mb-0 fw-bold"><?php echo $provider['name']; ?></p>

							<p class="text-orange mb-0 fw-bold"><?php echo $provider['business_name']; ?></p>

							<h6 class="text-grey"><?php echo $provider['city'].', '.$provider['state_code'].' '.$provider['zipcode']; ?></h6>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>	
					</div>	
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModal-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo trans('Report Profile'); ?></h4>
				<a data-bs-dismiss="modal"><i class="fa fa-times pe-0"></i></a>
            </div>
            <div class="modal-body form-section">
			<div class="form-group">
                <label><input type="radio" name="report" value="Spam" />Spam</label>
                <label><input type="radio" name="report" value="Wrong Content" />Wrong Content</label>
			</div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="save_report()" class="btn yellowbtn m-auto">Submit</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<style>
#sync1 .item {
  margin: 5px;
  color: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

#sync2 .item {
  background: #c9c9c9;
  /* padding: 10px 0px; */
  margin: 5px;
  color: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
  cursor: pointer;
}

#sync2 .item h1 {
  font-size: 18px;
}

#sync2 .current .item {
  background: #0c83e7;
}

.owl-theme .owl-nav [class*="owl-"] {
  transition: all 0.3s ease;
}

.owl-theme .owl-nav [class*="owl-"].disabled:hover {
  background-color: #d6d6d6;
}

#sync1.owl-theme {
  position: relative;
}

#sync1.owl-theme .owl-next,
#sync1.owl-theme .owl-prev {
  width: 22px;
  height: 40px;
  margin-top: -20px;
  position: absolute;
  top: 50%;
}

#sync1.owl-theme .owl-prev {
  left: 10px;
}

#sync1.owl-theme .owl-next {
  right: 10px;
}
/* animate fadin duration 1.5s */
.owl-carousel .animated {
  animation-duration: 1.5s !important;
}
/* 輪播的前後按鈕背景調大 */
#sync1.owl-theme .owl-next,
#sync1.owl-theme .owl-prev {
  width: 35px !important;
  height: 55px !important;
}
#sync1 svg {
  width: 22px !important;
}
.popover {
    --bs-popover-max-width: 310px;
}
.fs-8 {
font-size: 15px;
}
.a2a_logo_color {
    background-color: #ff6c00;
}
#messageProviderForm select { background: #ffffff url(../images/triangle.png) no-repeat 95% center / 26px 14px; }

#messageProviderForm select,
#messageProviderForm select option {
  color: #000000;
}

#messageProviderForm select:invalid,
#messageProviderForm select option[value=""] {
  color: #999999;
}
.empty { color: #999 !important; }

</style>

		
<div id="social-share" class="modal fade">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header bg-solid-warning justify-content-start p-4">
			<a href="javascript:void(0);" data-bs-dismiss="modal" class="fs-5"><i class="fa-solid fa-xmark"></i></a>
			<h6 class="ms-2 mb-0">Share Business</h6>
			</div>
			<div class="modal-body p-4">
			<img src="<?php echo $img; ?>" width="100%" class="rounded-4" />
			<h6 class="mb-0 text-black"><?php echo !empty($user_detail->business_name) ? $user_detail->business_name : $user_detail->fullname; ?></h6>						
			<p class="fs-7"><?php echo $user_detail->city.', '.$user_detail->state_code.' '.$user_detail->zipcode; ?></p>
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			<a class="a2a_button_facebook w-100">Facebook</a>
			<a class="a2a_button_x w-100">Twitter</a>
			<a onclick="copyURI(event)" data-link="<?php echo $share_url; ?>" class="w-100" target="_top" rel="nofollow noopener" ><span class="a2a_svg a2a_s__default a2a_s_link a2a_img_text" style="background-color: rgb(136, 137, 144);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M7.591 21.177c0-.36.126-.665.377-.917l2.804-2.804a1.235 1.235 0 0 1 .913-.378c.377 0 .7.144.97.43-.026.028-.11.11-.255.25-.144.14-.24.236-.29.29a2.82 2.82 0 0 0-.2.256 1.056 1.056 0 0 0-.177.344 1.43 1.43 0 0 0-.046.37c0 .36.126.666.377.918a1.25 1.25 0 0 0 .918.377c.126.001.251-.015.373-.047.125-.037.242-.096.345-.175.09-.06.176-.127.256-.2.1-.094.196-.19.29-.29.14-.142.223-.23.25-.254.297.28.445.607.445.984 0 .36-.126.664-.377.916l-2.778 2.79a1.242 1.242 0 0 1-.917.364c-.36 0-.665-.118-.917-.35l-1.982-1.97a1.223 1.223 0 0 1-.378-.9l-.001-.004Zm9.477-9.504c0-.36.126-.665.377-.917l2.777-2.79a1.235 1.235 0 0 1 .913-.378c.35 0 .656.12.917.364l1.984 1.968c.254.252.38.553.38.903 0 .36-.126.665-.38.917l-2.802 2.804a1.238 1.238 0 0 1-.916.364c-.377 0-.7-.14-.97-.418.026-.027.11-.11.255-.25a7.5 7.5 0 0 0 .29-.29c.072-.08.139-.166.2-.255.08-.103.14-.22.176-.344.032-.12.048-.245.047-.37 0-.36-.126-.662-.377-.914a1.247 1.247 0 0 0-.917-.377c-.136 0-.26.015-.37.046-.114.03-.23.09-.346.175a3.868 3.868 0 0 0-.256.2c-.054.05-.15.148-.29.29-.14.146-.222.23-.25.258-.294-.278-.442-.606-.442-.983v-.003ZM5.003 21.177c0 1.078.382 1.99 1.146 2.736l1.982 1.968c.745.75 1.658 1.12 2.736 1.12 1.087 0 2.004-.38 2.75-1.143l2.777-2.79c.75-.747 1.12-1.66 1.12-2.737 0-1.106-.392-2.046-1.183-2.818l1.186-1.185c.774.79 1.708 1.186 2.805 1.186 1.078 0 1.995-.376 2.75-1.13l2.803-2.81c.751-.754 1.128-1.671 1.128-2.748 0-1.08-.382-1.993-1.146-2.738L23.875 6.12C23.13 5.372 22.218 5 21.139 5c-1.087 0-2.004.382-2.75 1.146l-2.777 2.79c-.75.747-1.12 1.66-1.12 2.737 0 1.105.392 2.045 1.183 2.817l-1.186 1.186c-.774-.79-1.708-1.186-2.805-1.186-1.078 0-1.995.377-2.75 1.132L6.13 18.426c-.754.755-1.13 1.672-1.13 2.75l.003.001Z"></path></svg></span>Copy Link</a>
			</div>
			<!-- AddToAny END -->
			</div>
			<!--<div class="modal-footer p-4">
				<button type="button" data-bs-dismiss="modal" class="btn btn-secondary m-0">Close</button>
				
			</div>-->
		</div>
	</div>
</div>	
<div class="alert text-white bg-success sticky-top alert alert-dismissible alert-dismissible" id="suc-alert" style="top: 10px;
    position: fixed;
    right: 20px;
    display: none;
    z-index: 9999;">
	<i class="icon fas fa-check me-2"></i> Copied to Clipboard !
</div>
<div class="loader"></div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

			<script>
			var a2a_config = a2a_config || {};
			a2a_config.onclick = 1;
			</script>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
function open_social_share(){
	$("#social-share").modal('show');
}
function save_report(){
	var report_type = $('input[name="report"]:checked').val();
	var user_id = '<?php echo $userId; ?>';
	$.ajax({
		url: '<?php echo base_url(); ?>/providerauth/save_report',
		type: 'POST',
		data: {report_type:report_type,user_id:user_id},
		success: function(res) {
			$('#myModal').modal('hide');
			Swal.fire({
				text: "Reported Profile!",
				icon: "success",
				confirmButtonColor: "#34c38f",
				confirmButtonText: "<?php echo trans("ok"); ?>",
			})
			
		}
	});
}
$(document).ready(function(){
	$("#best_way").change(function () {
		if($(this).val() == "") $(this).addClass("empty");
		else $(this).removeClass("empty")
	});
	$("#best_way").change();
	
	$('.open-report-modal').on('click', function(e){
			e.preventDefault();
			$('#myModal').modal('show');
		});
	var simg = '<?php echo base_url().'/assets/img/favicon.png'; ?>';
    $('[data-toggle="popover"]').popover({
        placement : 'right',
		trigger : 'hover',
        html : true,
        content : '<div class="tooltip-inner text-start"><p class="dblue mb-2 d-flex align-items-center gap-1 fw-bold fs-8"><img width="24" src="'+simg+'"> A little extra about your groomer!</p><p class="mb-0">These are 2 mandatory questions for your groomer to answer when creating a profile.</p><p>This givens you a little more insight into who you choose to groom your furry baby!</p></div>'
    });
});
</script>
<style>
	.bs-example{
    	margin: 200px 150px 0;
    }
	.bs-example button{
		margin: 10px;
    }
	.a2a_full_footer{
		display:none;
	}
</style>


		<script>    var geocoder;	var map;	var address = "<?php echo $user_detail->business_name.', '.$user_detail->address.', '.$user_detail->city.', '.$user_detail->state_code.', '.$user_detail->zipcode; ?>";	function initMap() {		geocoder = new google.maps.Geocoder();		codeAddress(address);	}	function codeAddress(address) {		geocoder.geocode({ 'address': address }, function (results, status) {			console.log(results);			var latLng = {lat: results[0].geometry.location.lat (), lng: results[0].geometry.location.lng ()};			console.log (latLng);			map = new google.maps.Map(document.getElementById('map'), {				zoom: 11,				center: latLng,				disableDefaultUI: true,			});			if (status == 'OK') {				var marker = new google.maps.Marker({					position: latLng,					map: map				});				console.log (map);			} else {				alert('Geocode was not successful for the following reason: ' + status);			}		});	}</script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVOEBebUkCDtSrIMdFekS9T9CcmRECNPo&callback=initMap"></script>
<script>
function phprun(target) { // <-----( INJECT THE EVENT TARGET)

    // get the video element from the target
    let videoEl = target.parentNode.parentNode.childNodes[0];

    // retrieve the data you want (eg. the video url and title)
    let videoUrl = 'http';
    let videoTitle = 'tit';

    // inject it into the desired containers
    h1.innerHTML = 'Share:' + videoTitle;
    h2.innerHTML = videoUrl;

    // do more stuff...
    if (copy.style.display === "none") {
        copy.style.display = "block";
    } else {
        copy.style.display = "none";
    }

}

    var sync1 = jQuery("#sync1");
    var sync2 = jQuery("#sync2");
    var slidesPerPage = 5; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
		items: 1,
		slideSpeed: 3000,
		nav: false,
		margin:10,
		animateIn: "fadeIn",
		autoplayHoverPause: true,
		autoplaySpeed: 1400, //過場速度
		dots: false,
		loop: false,
		responsiveClass: true,
		responsive: {
			0: {
			item: 1
			},
			600: {
			items: 1
			},
			1000:{
			items:1
			}
		},
		responsiveRefreshRate: 200,
		navText: [
		'<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
		'<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
		]
	});

    sync2.owlCarousel({
      loop:false,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:3
			},
			600:{
				items:4
			},
			1000:{
				items:5
			}
		}
    });

    function syncPosition(el) {
      //if you set loop to false, you have to restore this next line
      //var current = el.item.index;

      //if you disable loop you have to comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }

      //end block

      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find(".owl-item.active").length - 1;
      var start = sync2
      .find(".owl-item.active")
      .first()
      .index();
      var end = sync2
      .find(".owl-item.active")
      .last()
      .index();

      if (current > end) {
        sync2.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        sync2.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        sync1.data("owl.carousel").to(number, 100, true);
      }
    }

    sync2.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = jQuery(this).index();
      sync1.data("owl.carousel").to(number, 300, true);
    });
$('.owl-carousel').owlCarousel({
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
            items:5
        }
    }
})

function showPhone(ths){
    let phone = $(ths).data('phone');
    let label = $(ths).data('label');
    let uid = $(ths).data('id');
	$.ajax({
		type: "GET",
		url: '<?php echo base_url(); ?>' + "/update_call_count/"+uid,
		success: function (data) {
		}
	});
    Swal.fire({
      title: 'Contact '+label+' Now!',
      html: '<a href="tel:+1'+phone+'">'+phone+'</a>',
      imageUrl: '<?php echo base_url(); ?>' + '/assets/img/sawMeOn.png',
      imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Say you saw me on findmylawfirm.com',
	  showConfirmButton: false,
	  customClass: {
		  container: 'callmePopup',
		}
    })
}
function direction_count(id){
	$.ajax({
		type: "GET",
		url: '<?php echo base_url(); ?>' + "/update_direction_count/"+id,
		success: function (data) {
		}
	});
}
function copyURI(evt) {
    evt.preventDefault();
    navigator.clipboard.writeText(evt.target.getAttribute('data-link')).then(() => {
      /* clipboard successfully set */
	  $("#social-share").modal('hide');
	  $("#suc-alert").fadeIn().delay(2000).fadeOut();
    }, () => {
      /* clipboard write failed */
    });
}


</script>
<?= $this->endSection() ?>