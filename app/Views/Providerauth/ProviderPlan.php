<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <div class="plan bg-gray pt-2 pb-4 pb-xl-5">
        <?php echo $this->include('Common/_messages') ?>
		<div class="titleSec text-center mb-5">
			<h3 class="title-lg text-black mb-2"><?php echo $title; ?></h3>
			<p class="text-grey">Now it’s time to select the plan that’s right for you.</p>
		</div>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 mb-3 gx-md-5 text-center package">
			  <div class="col">
				<div class="card mb-4 rounded-5 shadow-sm">
				  <div class="card-header py-3 py-xl-4">
					<h4 class="my-0 fw-normal">Get Seen</h4>
				  </div>
				  <div class="card-body px-3 px-xl-5 pb-xl-5">
					<h3 class="card-title title-xl text-black py-2 py-xl-4">Standard<br/>$19.99<small class="text-body-secondary fw-light">/mo</small></h3>
					<?php if(!empty($user_plan_details) && $user_plan_details->plan_id == 2){  ?>					
					<a href="javascript:void(0);" class="w-100 btn btn-black btn-lg py-3 py-xl-4">Active</a>
					<a></a>
					<?php }else{ ?>
					<?php if(empty($standard_trial) && empty($premium_trial)){ ?>
					<a href="<?php echo base_url('/providerauth/select-plan?id=2&type=trial'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4">Start Free Trial</a>
					<p class="fw-bold mt-4 text-orange">30 Day Free Trial</p>
					<?php }else{ ?>
						<a href="<?php echo base_url('/providerauth/select-plan?id=2'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4"><?php echo (!empty($user_plan_details) && $user_plan_details->plan_id == 3) ? 'Choose Standard' : 'Select';  ?></a>
					<?php } ?>
					<?php } ?>
					
					
					<ul class="list-unstyled my-3 my-xl-5">
					  <li>About (Me/Us)
					  <span>(Tell customers who you are in your own words)</span></li>
					  <li>Add a Phone Number
					  <span>(Gain a business advantage by including a direct phone number)</span></li>
					  <li>Website Links
					  <span>(Lead customers to your personal/business website)</span></li>
					  <li>Include Rates/Fees
					  <span>(Adjust and display current rates for your services)</span></li>
					  <li>Hours of Operations
					  <span>(Let customers know when you're available)</span></li>
					  <li>Email Contact Form
					  <span>(Receive email messages directly from potential clients)</span></li>
					  <li>Search Results Inclusion
					  <span>(Your profile will be included in local search results on our website)</span></li>
					  <li>Edit Profile Anywhere, Anytime
					  <span>(Login on our website to easily update your profile)</span></li>
					</ul>
					<?php if(!empty($user_plan_details) && $user_plan_details->plan_id == 2){  ?>					
					<a href="javascript:void(0);" class="w-100 btn btn-black btn-lg py-3 py-xl-4 mt-auto">Active</a>
					<a></a>
					<?php }else{ ?>					
					<?php if(empty($standard_trial) && empty($premium_trial)){ ?>
					<a href="<?php echo base_url('/providerauth/select-plan?id=2&type=trial'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4 mt-auto">Start Free Trial</a>
					<p class="fw-bold mt-4 text-orange">30 Day Free Trial</p>
					<?php }else{ ?>
						<a href="<?php echo base_url('/providerauth/select-plan?id=2'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4 mt-auto"><?php echo (!empty($user_plan_details) && $user_plan_details->plan_id == 3) ? 'Choose Standard' : 'Select';  ?></a>
					<?php } 
					} ?>
				  </div>
				</div>
			  </div>
			  <div class="col plan-2">
				<div class="card mb-4 rounded-5 shadow-sm">
				  <div class="card-header py-3 py-xl-4">
					<h4 class="my-0 fw-normal">Best Results</h4>
				  </div>
				  <div class="card-body px-3 px-xl-5 pb-xl-5">
					<h3 class="card-title title-xl text-black py-2 py-xl-4">Premium<br/>$29.99<small class="text-body-secondary fw-light">/mo</small></h3>
					<?php if(!empty($user_plan_details) && $user_plan_details->plan_id == 3){  ?>					
					<a href="javascript:void(0);" class="w-100 btn btn-lg yellowbtn py-3 py-xl-4">Active</a>
					<a></a>
					<?php }else{ ?>
					<?php if(empty($standard_trial) && empty($premium_trial)){ ?>
					<a href="<?php echo base_url('/providerauth/select-plan?id=3&type=trial'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4">Start Free Trial</a>
					<p class="fw-bold mt-4 text-orange">30 Day Free Trial</p> 
					<?php }else{ ?>
						<a href="<?php echo base_url('/providerauth/select-plan?id=3'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4"><?php echo (!empty($user_plan_details) && $user_plan_details->plan_id == 2) ? 'Upgrade' : 'Select';  ?></a>
					<?php } ?>
					<?php } ?>
					
					
					<ul class="list-unstyled my-3 my-xl-5">
					  <li>Featured Profile
					  <span>(Your profile will be highlighted in local search results)</span></li>
					  <li>About (Me/Us)
					  <span>(Tell customers who you are in your own words)</span></li>
					  <li>Add a Phone Number
					  <span>(Gain a business advantage by including a direct phone number)</span></li>
					  <li>Include Multiple Photos
					  <span>(Free profiles are allowed only a single image)</span></li>
					  <li>Website Links
					  <span>(Lead customers to your personal/business website)</span></li>
					  <li>Include Rates/Fees
					  <span>(Adjust and display current rates for your services)</span></li>
					  <li>Hours of Operations
					  <span>(Let customers know when you're available)</span></li>
					  <li>Email Contact Form
					  <span>(Receive email messages directly from potential clients)</span></li>
					  <li>Search Results Inclusion
					  <span>(Your profile will be included in local search results on our website)</span></li>
					  <li>Edit Profile Anywhere, Anytime
					  <span>(Login on our website to easily update your profile)</span></li>
					</ul>
					<?php if(!empty($user_plan_details) && $user_plan_details->plan_id == 3){  ?>					
					<a href="javascript:void(0);" class="w-100 btn btn-lg yellowbtn py-3 py-xl-4 mt-auto">Active</a>
					<a></a>
					<?php }else{ ?>					
					<?php if(empty($standard_trial) && empty($premium_trial)){ ?>
					<a href="<?php echo base_url('/providerauth/select-plan?id=3&type=trial'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4 mt-auto">Start Free Trial</a>
					<p class="fw-bold mt-4 text-orange">30 Day Free Trial</p>
					<?php }else{ ?>
						<a href="<?php echo base_url('/providerauth/select-plan?id=3'); ?>" class="w-100 btn btn-black btn-lg py-3 py-xl-4 mt-auto"><?php echo (!empty($user_plan_details) && $user_plan_details->plan_id == 2) ? 'Upgrade' : 'Select';  ?></a>
					<?php } 
					} ?>
				  </div>
				</div>
			  </div>
			</div>
		</div>
		</div>
<?= $this->endSection() ?>