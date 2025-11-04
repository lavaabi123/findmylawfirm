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
<style>
.form-group.dd label::after {
    content: "*";
    color: red;
    font-size: 25px;
}.slider-container {
    text-align: center;
    margin-bottom: 25px;
    padding: 10px;
  }

  .slider-container label {
    display: block;
  }

  .slider-container input[type="range"] {
    width: 100%;
    margin: 0 auto;
    display: block;
  }
  
  
  /* Styles for the range slider */
  input[type="range"] {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    background: linear-gradient(to right, #ff6c00 0%, #ff6c00 30%, #e0dcd7 30%, #e0dcd7 100%);
    outline: none;
    opacity: 1;
    -webkit-transition: .2s;
    transition: opacity .2s;
    border-radius: 5px;
    margin: 10px 0;
  }

  /* Style for the thumb of the slider */
  input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    background: #ff6c00;
    border-radius: 50%;
    cursor: pointer;
  }

  /* Style for the thumb of the slider in Firefox */
  input[type="range"]::-moz-range-thumb {
    width: 20px;
    height: 20px;
    background: #ff6c00;
    border-radius: 50%;
    border: 2px solid #ccc;
    cursor: pointer;
  }
  @media (min-width:768px){
  .pr-md-0{
	padding-right:0px;  
  }
  .pl-md-0{
	padding-left:0px;  
  }
  }
  .pac-container:after {
    /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */

    background-image: none !important;
    height: 0px;
}
label#postcode-error, label#locality-error {
    opacity: 0;
}label#location_id-error {
    display: none !important;
}
</style>
    <div class="front-login-box">
        <!-- /.login-logo -->

                <?php echo $this->include('Common/_messages') ;
				?>
               
<div class="wizard-main">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-md-5 banner-sec">
                <img class="img-fluid" id="slide1" src="<?php echo base_url(); ?>/assets/frontend/images/slider-01.jpg" alt="First slide">
				<img class="img-fluid" id="slide2" src="<?php echo base_url(); ?>/assets/frontend/images/slider-02.jpg" alt="Second slide" style="display: none;">
				<img class="img-fluid" id="slide3" src="<?php echo base_url(); ?>/assets/frontend/images/slider-03.jpg" alt="Third slide" style="display: none;">
            </div>
            <div class="col-md-7 login-sec">
                <div class="login-sec-bg">
                    <form id="example-advanced-form" method="post" action="<?php echo base_url(); ?>/providerauth/register-post" style="display: none;">
					<?php echo csrf_field() ?>
					<input type="hidden" id="fullname" name="fullname" value="">
                        <h3></h3>
                        <fieldset class="form-input">
						<div class="titleSec">
							<h3 class="title-xl black mb-0"><?php echo trans('Sign Up as a Groomer') ?></h3>
							<p class="text-grey fs-6"><?php echo trans('Get started for FREE with no obligation') ?></p>
						</div>
							<div class="form-section">
								<div class="form-group">
									<input class="form-control required" type="text" id="first_name" name="first_name" placeholder="<?php echo trans('form_firstname') ?>" value="<?php echo old('first_name') ?>">
								</div>
								<div class="form-group">
									<input class="form-control required" type="text" id="last_name" name="last_name" placeholder="<?php echo trans('form_lastname') ?>" value="<?php echo old('last_name') ?>">
									<input type="hidden" id="role" name="role" value="2">
								</div>
								<div class="form-group">
									<input class="form-control required email" type="email" id="email" name="email" placeholder="<?php echo trans('form_email') ?>" value="<?php echo old('email') ?>">
								</div>
								<div class="form-group">
									<input class="form-control required" type="password" id="password" name="password" placeholder="<?php echo trans('form_password') ?>">
								</div>
								<div class="form-group">
									<input type="password" name="confirm_password" class="form-control required" placeholder="<?php echo trans("form_confirm_password"); ?>" data-parsley-equalto="#password">
								</div>
							</div>
                        </fieldset>

                        <h3></h3>
                        <fieldset class="form-input">
						<div class="titleSec">
                            <h3 class="title-xl black mb-0"><?php echo trans('Provide Additional Information') ?></h3>
                            <p class="text-grey fs-6"><?php echo trans('This way you can serve better!') ?></p>
							</div>
							<div class="form-section">
                            <div class="form-group">
                                <select name="category_id" onchange="change_category_offering(this)"  class="form-control required" required>
                                    <option value=""><?php echo trans('Select Your Title') ?></option>
									<?php
									if(!empty($categories)){
										foreach($categories as $category){ ?>
											<option value="<?php echo $category->id; ?>" <?php echo (old('category_id') == $category->id) ? 'selected':''; ?>><?php echo $category->name; ?></option>
									<?php }
									}
									?>
                                </select>
                            </div>
							
                            <div class="form-group">
                                <input class="form-control required" type="text" id="mobile_no" name="mobile_no" placeholder="<?php echo trans('Telephone Number') ?>" value="<?php echo old('mobile_no') ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="referredby" name="referredby" placeholder="<?php echo trans('Referred By') ?>" value="<?php echo old('referredby') ?>">
                            </div>
                            </div>
                        </fieldset>

                        <h3></h3>
                        <fieldset class="form-input">
						<div class="titleSec">
                            <h3 class="title-xl black mb-0"><?php echo trans('Please finalize the details!') ?></h3>
                            <p class="text-grey fs-6"><?php echo trans('This way we get you the right customers.') ?></p>
							</div>
							<div class="form-section">
							<input type="hidden" name="gender" value="Male" />
                            <!--<div class="form-group">
                                <select name="gender" class="form-control required">
                                    <option><?php echo trans('Gender') ?></option>
                                    <option value="Male" <?php echo (old('gender') == 'Male') ? 'selected':''; ?>>Male</option>
                                    <option value="Female" <?php echo (old('gender') == 'Female') ? 'selected':''; ?>>Female</option>
                                </select>
                            </div>-->
                            <h4 class="title-md black mt-3 mt-lg-5"><?php echo trans('Type of Business') ?>:</h4>
                            <div class="form-group">
								<select class="form-control required" name="clientele[]" onchange="getComboB(this)">
								<option value="">Select</option>
								<?php
								if(!empty($client_types)){
									foreach($client_types as $clientele){ ?>
										<option value="<?php echo $clientele->id; ?>"><?php echo $clientele->name; ?></option>
										<!--<label><input type="radio" <?php echo (is_array(old('clientele')) && in_array($clientele->id, old('clientele'))) ? 'checked':''; ?> name="clientele[]" value="<?php echo $clientele->id; ?>"><?php echo $clientele->name; ?></label>-->
								<?php }
								}
								?>
								</select>
                            </div>							
                            <div class="form-group">
                                <input class="form-control" type="text" id="business_name" name="business_name" placeholder="<?php echo trans('Business Name(if applicable)') ?>" value="<?php echo old('business_name') ?>">
                            </div>
													
                            <div class="form-group">
                                <input class="form-control required" type="text" id="address" name="address" placeholder="<?php echo trans('Address') ?>" autocomplete="off" value="<?php echo old('address') ?>" >
                            </div>	


	  
                            <div class="form-group">
                                <input class="form-control" type="text" id="address2" name="suite" placeholder="<?php echo trans('Suite, Apartment, etc') ?>" value="<?php echo old('suite') ?>" >
                            </div>
							<!--
							<div class="form-group">
								<input type="text" class="form-control" value="" id="load_location_field" readonly disabled />
							</div>-->
							<input type="hidden" id="cityLat" name="city_lat" value="" />
							<input type="hidden" id="cityLng" name="city_lng" value="" />
							<input type="hidden" id="location_id" name="location_id" value="" />
							
							<div class="form-group row">
                            <div class="col-12 col-md-5 pr-md-0">							
								<input type="text" value="" placeholder="City" name='locality' id="locality" class='form-control required' />
                            </div>
                            <div class="col-12 col-md-4 px-md-1">							
								<input type="text" value="" placeholder="State" name='state' id="state" class='form-control required' />
                            </div>
                            <div class="col-12 col-md-3 pl-md-0">							
								<input type="text" value="" placeholder="Zip Code" name='postcode' id="postcode" class='form-control required' />
                            </div>
							</div>
                            <!--<div class="form-group">							
								<select name='location_id' id="select_location_id" class='form-control location required'>
									<option value='<?php echo old('location_id') ?>'>City, State and Zip Code</option>
								</select>
                            </div>-->
							
							<input type="hidden" name="licensenumber" value="123" />
                            <!--<div class="form-group">
                                <input class="form-control" type="text" id="licensenumber" name="licensenumber" placeholder="<?php echo trans('License #') ?>" value="<?php echo old('licensenumber') ?>">
                            </div>-->
							
							<div class="form-group slider-container">
								<label for="miles" class="text-start mb-4">Service Area From Address (in miles):&nbsp;<span class=" text-orange"> <input type="number" class="form-control mb-0" value="15" name="miles" id="selectedMiles" /></span></label><input type="range" id="miles" name="miles_range" min="0" max="50" value="15">
								
								<div class="d-flex justify-content-between"><span>0 miles</span><span>50 miles</span></div>
								
							</div>
							
                            <div class="form-group">
                                <input class="form-control required" type="text" id="experience" name="experience" placeholder="<?php echo trans('Years of Experience') ?>" value="<?php echo old('experience') ?>">
                            </div>
							<div class="load_category_offering">
							<?php
							$offeringyes = 0;
							if(!empty($offering)){
								foreach($offering as $offer){ 
								if((!empty(old('category_id')) && old('category_id') == $offer->category_id ) || (empty(old('category_id')))){
									$offeringyes = 1;
								} }
							}
							?>
							<?php if($offeringyes == 1){ ?>
                            <h4 class="title-md black mt-3 mt-lg-5"><?php echo trans('Services') ?>:</h4>
                            <div class="form-group">
							<?php
							$offeringyes = 0;
							if(!empty($offering)){
								foreach($offering as $offer){ 
								if((!empty(old('category_id')) && old('category_id') == $offer->category_id ) || (empty(old('category_id')))){
									$offeringyes = 1;
								?>
									<label><input type="checkbox" <?php echo (is_array(old('offering')) && in_array($offer->id, old('offering'))) ? 'checked':''; ?> name="offering[]" value="<?php echo $offer->id; ?>"><?php echo $offer->name; ?></label>
								<?php } }
							}
							?>
                            </div>
							<?php } ?>						
							
							</div>							
							
							<h4 class="title-md black mt-3 mt-lg-5">Specializing In:</h4>
							<?php 						
							if(!empty($categories_skills)){ ?>
							<div class="form-group mb-5">
							<?php foreach($categories_skills as $row){ ?>
								<label><input type="checkbox" name="categories_skills[]" value="<?php echo $row->id; ?>"><?php echo $row->name; ?></label>
							<?php } ?>
							</div>
							<?php } ?>
							
							<h4 class="title-md black mt-3 mt-lg-5">A Little About Me <i class="toolTipinfo" data-toggle="popover">i</i></h4>
							<div class="form-group dd">
								<label class="ques">Why Did I Become A Dog Groomer?</label>
							</div>
							<div class="form-group mb-5">
								<textarea class="form-control required" name="question1"></textarea>
							</div>
							<div class="form-group dd">
								<label class="ques">What Kind Of Pets Do I Have And What Are Their Names?</label>
                            </div>
							<div class="form-group mb-5">
								<textarea class="form-control required" name="question2"></textarea>
                            </div>
							
							<input type="hidden" id="g-recaptcha-response"  class="form-control required" name="check_bot" value="" >
							
							<input type="hidden" name="register_plan" value="<?php echo !empty(session()->get('selected_plan_id')) ? session()->get('selected_plan_id') : 1; ?>" >

                            </div>
                        </fieldset>
                    </form>         
                </div>
            </div>          
        </div>
    </div>
</div>


            
    </div>
    <!-- /.login-box -->
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbBKfGnxtUfSe3EpjdIbaiafOMTvk1rg8&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
<script>
	$(document).ready(function() {
		attachLocation();
		
		var simg = '<?php echo base_url().'/assets/img/favicon.png'; ?>';
		$('[data-toggle="popover"]').popover({
			placement : 'right',
			trigger : 'hover',
			html : true,
			content : '<div class="tooltip-inner text-start"><p class="dblue mb-2 d-flex align-items-center gap-1 fw-bold fs-8"><img width="24" src="'+simg+'"> A little extra about your groomer!</p><p class="mb-0">These are 2 mandatory questions for your groomer to answer when creating a profile.</p><p>This givens you a little more insight into who you choose to groom your furry baby!</p></div>'
		});
		
		const milesRangeInput = document.getElementById('miles');
		const selectedMilesSpan = document.getElementById('selectedMiles');
			
		// Update the selected miles value when the slider value changes
		milesRangeInput.addEventListener('input', function() {
			selectedMilesSpan.value = milesRangeInput.value;
			const value = (milesRangeInput.value - milesRangeInput.min) / (milesRangeInput.max - milesRangeInput.min) * 100;
			console.log(value);
			milesRangeInput.style.background = 'linear-gradient(to right, #ff6c00 0%, #ff6c00 '+value+'%, #e0dcd7 '+value+'%, #e0dcd7 100%)';
		});
	
	});	
  
const getLinkTitle = (id) => {
  let title;
  if (id) {
    const selectedLink = _.find(selectLinks, (link) => {
      return link.id === parseInt(id);
    });
    if (selectedLink) {
      title = selectedLink.title;
    }
  }
  return title;
};
	
	function attachLocation(){
		$('select.location').selectize({
			valueField: 'id',
			labelField: 'location',
			searchField: 'location',
			create: false,
			preload: true,
			render: {
				option: function(item, escape) {
					return '<div>'+escape(item.location)+'</div>';
				}
			},
			load: function(query, callback) {
				
				$.ajax({
					url: '<?php echo base_url(); ?>/providerauth/get-locations?q=' + encodeURIComponent(query),
					type: 'GET',
					error: function() {
						callback();
					},
					success: function(res) {
						res = $.parseJSON(res);
						callback(res.locations);
					}
				});
			},onChange:function(value){
				$("#load_location_field").val(this.getItem(value)[0].innerHTML);
			}
		});
	}
	
	function change_category_offering(_this){
		$(".load_category_offering").html('');
		var category_id = $(_this).val()
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>/providerauth/get-category-offering',
			data:{csrf_token:'1e78598ff0fc7c5d22b2b579edcdc3db',category_id:category_id,from:'register'},   
			dataType: 'HTML',			
			success: function (data) {  	
				$(".load_category_offering").html(data);       
			}
		});		
	}
	
	function getComboA(selectObject) {
	  var value = $(selectObject).val(); 
		if(value == 2){
			$('#address').removeClass('required');
			$('#address').val('');
			$('#address').hide();
			$('#load_location_field').hide();
		}else{
			$('#address').addClass('required');
			$('#address').val('');
			$('#address').show();
			$('#load_location_field').show();
		}
	}
	function getComboB(selectObject) {
	  var value = $(selectObject).val(); 
		if(value == 1){
			$('.slider-container').hide();
		}else{
			$('.slider-container').show();
		}
	}
	let autocomplete;
let address1Field;
let address2Field;
let postalField;

function initAutocomplete() {
  address1Field = document.querySelector("#address");
  address2Field = document.querySelector("#address2");
  postalField = document.querySelector("#postcode");
  // Create the autocomplete object, restricting the search predictions to
  // addresses in the US and Canada.
  autocomplete = new google.maps.places.Autocomplete(address1Field, {
    componentRestrictions: { country: ["us", "ca"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });
  address1Field.focus();
  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener("place_changed", fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  const place = autocomplete.getPlace();
  let address1 = "";
  let postcode = "";
	document.getElementById('cityLat').value = place.geometry.location.lat();
	document.getElementById('cityLng').value = place.geometry.location.lng();

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  // place.address_components are google.maps.GeocoderAddressComponent objects
  // which are documented at http://goo.gle/3l5i5Mr
  for (const component of place.address_components) {
    // @ts-ignore remove once typings fixed
    const componentType = component.types[0];
console.log(component);
    switch (componentType) {
      case "street_number": {
        address1 = `${component.long_name} ${address1}`;
        break;
      }

      case "route": {
        address1 += component.short_name;
        break;
      }

      case "postal_code": {
        postcode = `${component.long_name}${postcode}`;
        break;
      }

      case "postal_code_suffix": {
        //postcode = `${postcode}-${component.long_name}`;
        break;
      }
      case "locality":
        document.querySelector("#locality").value = component.long_name;
        break;
      case "administrative_area_level_1": {
        document.querySelector("#state").value = component.long_name;
        break;
      }
      case "country":
        //document.querySelector("#country").value = component.long_name;
        break;
    }
  }

  address1Field.value = address1;
  postalField.value = postcode;
  
  //document.querySelector("#full_location").value = document.querySelector("#locality").value+', '+document.querySelector("#state").value+' '+postcode;
  
  //get location id
  $.ajax({
		type: "POST",
		url: '<?php echo base_url(); ?>/providerauth/get-location-id',
		data:{csrf_token:'1e78598ff0fc7c5d22b2b579edcdc3db',zipcode:postcode},   
		dataType: 'HTML',			
		success: function (data) { 
			if(data != ''){
				document.querySelector("#location_id").value = data;
			}	      
		}
	});	
	
	
  // After filling the form with address components from the Autocomplete
  // prediction, set cursor focus on the second address line to encourage
  // entry of subpremise information such as apartment, unit, or floor number.
  address2Field.focus();
}

window.initAutocomplete = initAutocomplete;
</script>
<?= $this->endSection() ?>