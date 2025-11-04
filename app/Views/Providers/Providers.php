<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ;

$orders = array('created_at', 'location_id', 'name');
$order = !empty($_GET['order']) && in_array($_GET['order'], $orders) ? 'u.'.$_GET['order']:'u.created_at';
if($order == 'u.name'){ $order = 'name'; $dir = 'asc'; }elseif($order == 'u.created_at'){ $dir = 'desc'; }else{ $dir = 'asc'; }

function createUrl($key, $val, $add){
	return changeQuery($key, $val, $add, false, array('location', 'category'));
}
function checkbox($name){
	$return = "data-href='"; 
	if(!empty($_GET[$name])){ 
		$return .= createUrl($name, '0', false)."' checked='checked"; 
	}else{ 
		$return .= createUrl($name, '1', true); 
	}
	$return .= "'";
	return $return;
}
function radio($name, $val){
	if(!empty($_GET[$name]) && $_GET[$name] == $val){ 
		$return = "data-href='".createUrl($name, false, false)."'";
	}else{
		$return = "data-href='".createUrl($name, $val, false)."'";	
	} 
	if(!empty($_GET[$name]) && $_GET[$name] == $val){ 
		$return .= " checked='checked'"; 
	}
	return $return;
}
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owlcarousel/assets/owl.theme.default.min.css">
<script src="<?php echo base_url(); ?>/assets/owlcarousel/owl.carousel.js"></script>   
    <div class="fb-filter bg-gray pt-4 pt-sm-5 pb-4 pb-xl-5">
        <?php echo $this->include('Common/_messages') ?>
		<div class="container">
			<h3 class="title-md text-black text-center">Find a Dog Groomer near you!</h3>
			<form class="form-input mb-5 mb-sm-1" id="search-form">
				<div class="form-section row align-items-end justify-content-center my-3 my-sm-5">
					<!--<div class="col-3 form-group">
						<span>I'm looking for a</span>
						<div class="form-group">
							<select class="noMarg form-control mb-0" id="category_id" onchange="get_providers()">
								<option value="">Select Type</option>
								<?php
								foreach($categories_list as $row){
									echo "<option value='".$row->permalink."'";
									if($category != 'all' &&!empty($categories[0]['name']) && $row->name == $categories[0]['name']){
										echo " selected='selected'";
									}
									echo ">".$row->name."</option>";
								} ?>
							</select>
						</div>
					</div> -->
					<input type="hidden" name="category_id" value="" />
					<div class="col-3 form-group">
						<span>Within </span>
						<select class="noMarg form-control mb-0" id="radius">
							<?php for($i=0; $i<=30;){
								if($i == 0){
									$is = $i+1;
								}else{
									$is = $i;
								}
								echo "<option value='".$is."'";
								if($is == $radius){
									echo " selected='selected'";
								}
								echo ">$is miles of</option>";
								$i = $i+5;
							} ?>
						</select>
					</div>	
					<div class="col-4 form-group">	
						<span>Location</span>					
						<input type="hidden" name="search_location_name" value="<?php echo $search_location_name ?>" id="search_location_name" />				
						<input type="hidden" name="search_location_url" value="<?php echo $search_location_url ?>" id="search_location_url" />					
						<select name='location_id' id='location_id' class='locationsearch form-control noMarg mb-0 w-100' required>
							<option value='<?php echo $search_location_id ?>'><?php echo !empty($search_location_name) ? $search_location_name :'Enter Your Zip Code' ?></option>
						</select>
					</div>
					<div class="align-items-end justify-content-center mb-3 d-inline-flex d-sm-none">
						<label class='btn w-auto <?php echo !empty($_GET['client-types_1']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?>'><?php echo "<input type='checkbox' data-urlkey='client-types_1' data-url='client-types_1=1' class='filterOpt noMarg' ".checkbox("client-types_1").">" ?>Storefront</label>
						<a href='javascript:void(0);' class='btn w-auto <?php echo !empty($_GET['client-types_2']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?> mx-2'><?php echo "<input type='checkbox' data-urlkey='client-types_2' data-url='client-types_2=1' class='filterOpt noMarg' ".checkbox("client-types_2").">" ?>Mobile</a>
						<a href='javascript:void(0);' class='btn w-auto <?php echo !empty($_GET['availableNow']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?> '><?php echo "<input type='checkbox' data-urlkey='availableNow' data-url='availableNow=1' class='filterOpt noMarg' ".checkbox("availableNow").">" ?>Open Now</a>
					</div>
					<div class='col-2 text-right advancedBtn'>
						<a href='javascript:void(0);' onclick="get_providers()" class='btn bg-orange w-100 searchbutton'>Search</a>
					</div>
					<!--<div class='col-2 text-right advancedBtn'>
						<a href='#' class='btn toggleAdvanced'>Filter</a>
					</div>-->
				</div>
				<div class="row align-items-end justify-content-center mt-4 d-none d-sm-flex">
					<label class='btn w-auto <?php echo !empty($_GET['client-types_1']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?>'><?php echo "<input type='checkbox' data-urlkey='client-types_1' data-url='client-types_1=1' class='filterOpt noMarg' ".checkbox("client-types_1").">" ?>Storefront</label>
					<a href='javascript:void(0);' class='btn w-auto <?php echo !empty($_GET['client-types_2']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?> mx-2'><?php echo "<input type='checkbox' data-urlkey='client-types_2' data-url='client-types_2=1' class='filterOpt noMarg' ".checkbox("client-types_2").">" ?>Mobile</a>
					<a href='javascript:void(0);' class='btn w-auto <?php echo !empty($_GET['availableNow']) ? 'bg-orange text-white' : 'bg-dgray text-dark'; ?> '><?php echo "<input type='checkbox' data-urlkey='availableNow' data-url='availableNow=1' class='filterOpt noMarg' ".checkbox("availableNow").">" ?>Open Now</a>
				</div>
			</form>
				
				
				<div class='advancedOptions form-section' style='display: none'>
                    <div class="row mt-3 mt-sm-5">
                        <div class="col-12">
							 <h4 class="border-bottom dblue pb-2 mb-3 mt-3">Only show Groomers</h4>
							 <div class="form-group row row-cols-1 row-cols-md-3 row-cols-xl-4">
								<label class="col"><input type='checkbox' data-urlkey="hasPhoto" data-url="hasPhoto=1" <?php echo checkbox('hasPhoto'); ?> class='filterOpt' > With Photo</label>
								<label class="col"><input type='checkbox' data-urlkey="availableNow" data-url="availableNow=1" <?php echo checkbox('availableNow'); ?> class='filterOpt' > Available Now</label>
							 </div>
                        </div>
                        <div class="col-12">
                            <h4 class="border-bottom dblue pb-2 mb-3 mt-3">Gender:</h4>
							<div class="form-group row row-cols-1 row-cols-md-3 row-cols-xl-4">
								<label class="col"><input type='checkbox' data-urlkey="male" data-url="male=1" class='filterOpt noMarg' <?php echo checkbox('male'); ?>> Male<br></label>
								<label class="col"><input type='checkbox' data-urlkey="female" data-url="female=1" class='filterOpt noMarg' <?php echo checkbox('female'); ?>> Female</label>
							</div>
                        </div>
						<div class="col-12">
                            <h4 class="border-bottom dblue pb-2 mb-3 mt-3">Type of Business:</h4>
							<div class="form-group row row-cols-1 row-cols-md-3 row-cols-xl-4">
								<?php 
								if(!empty($client_types)){
								foreach($client_types as $k=>$v){
									echo "<label class='col'><input type='checkbox' data-urlkey='client-types_".$v->id."' data-url='client-types_".$v->id."=1' class='filterOpt noMarg' ".checkbox('client-types_'.$v->id).">".$v->name."</label>";
								}} ?>
							</div>
						</div>
						<?php if(!empty($offering)){ ?>
						<div class='col-12'>
							<h4 class="border-bottom dblue pb-2 mb-3 mt-3">Services:</h4>
							<div class="form-group row row-cols-1 row-cols-md-3 row-cols-xl-4">
							<?php
							foreach($offering as $row){
								echo "<label class='col'><input type='checkbox' data-urlkey='offering_".$row->id."' data-url='offering_".$row->id."=1' class='filterOpt noMarg' ".checkbox("offering_".$row->id)."> ".$row->name."</label>";
							} ?>
							</div>
						</div>
						<?php } ?>
					</div>
                    <div class='row'>
                        <div class='col-12'>
							<?php 						
							if(!empty($categories_skills)){ ?>
							<h4 class="border-bottom dblue pb-2 mb-3 mt-3">Specializing in:</h4>
							<div class="form-group row row-cols-1 row-cols-md-3 row-cols-xl-4">
							<?php foreach($categories_skills as $row){ ?>
								<label class='col'><input type="checkbox" data-urlkey="skill_<?php echo $row->id; ?>" data-url="skill_<?php echo $row->id; ?>=1" class='filterOpt noMarg' <?php echo checkbox("skill_".$row->id); ?>><?php echo $row->name; ?></label>
							<?php } ?>
							</div>
							<?php } ?>
							<div class='small-6 medium-3 large-3 columns'></div>
							<div class='small-6 medium-3 large-3 columns'></div>
						</div>
						<br>
					</div>
					<div class='row'>
						<button class="btn filterOptSave m-auto w-auto">Save</button>
						<br>
					</div>
			</div>
			<?php if(!empty($featured[0]['total_users'])){ ?>
		<div class="viewProfile wrapper">
		<?php   
			echo '<h3 class="title-md text-center mb-3 mb-sm-5 mt-3 mt-sm-5 dblue">';
			echo 'Featured';
			if(!empty($search_location_name) && empty($categories[0]['name'])){
				echo ' Groomers - '.$search_location_name;
			}else if(empty($search_location_name) && !empty($categories[0]['name'])){
				echo ' Groomers';
			}else if(empty($search_location_name) && empty($categories[0]['name']) && (array_key_exists("availableNow",$_GET) || array_key_exists("hasPhoto",$_GET) || array_key_exists("gender",$_GET) || array_key_exists("client-types",$_GET) || array_key_exists("offering",$_GET))){
				echo ' Groomers';
			}else if(empty($search_location_name) && empty($categories[0]['name']) ){
				echo ' Groomers';
			}else{
				echo ' Groomers - '.$search_location_name;
			}
			echo '</h3>';
		?>
			<div class="owl-carousel owl-theme">
				<?php foreach($featured[0]['providers'] as $p => $provider ){ 
				
			$busin_name = !empty($provider['business_name']) ? cleanURL(str_replace(' ','-',strtolower($provider['business_name']))) : cleanURL($provider['permalink']) ;
				?>
					<div class="item"><a href="<?php echo base_url('/provider/'.$provider['clean_url']); ?>">
						<div class="provider-Details">
							<div class="providerImg mb-3">
							<img src="<?php echo $provider['image']; ?>" class="img-fluid">
							</div>
							<div class="pro-content">
								<p class="text-grey mb-0 fw-bold"><?php echo $provider['name']; ?></p>

							<p class="text-orange mb-0 fw-bold"><?php echo $provider['business_name']; ?></p>

							<h6 class="text-grey"><?php echo $provider['city'].', '.$provider['state_code'].' '.$provider['zipcode']; ?></h6>
							</div>
						</div>
					</a></div>
				<?php } ?>		
			</div>	
		</div>
		<?php } ?>	
		<div class="container">
		    <?php if(!empty($categories[0]['name'])){ ?>
			<div class='sortBy my-5'>
				<ul class="button-group d-flex gap-2 justify-content-center">
					<li><a href='<?php echo createUrl('order', 'created_at', true); ?>' class='btn button<?php if($order == 'u.created_at'){ echo ' active text-success'; } ?> secondary tiny'>Newest</a></li>
					<li><a href='<?php echo createUrl('order', 'location_id', true); ?>' class='btn button<?php if($order == 'u.location_id'){ echo ' active text-success'; } ?> secondary tiny'>Distance</a></li>
					<li><a href='<?php echo createUrl('order', 'name', true); ?>' class='btn button<?php if($order == 'name'){ echo ' active text-success'; } ?> secondary tiny'>A - Z</a></li>
				</ul>
				<div class='clear'></div>
			</div>			
			<?php 
			}
			if(!empty($search_location_name) || !empty($categories[0]['name'])){
				echo '<h3 class="title-md text-center mb-3 mb-sm-5 mt-3 mt-sm-5 dblue">';
				$c_cnt = count($categories);
				if(!empty($categories[0]['name'])){
				foreach($categories as $catv){
					//$c_cnt = $c_cnt + count($catv['providers']);
				}
				}
				echo (!empty($c_cnt)) ? $c_cnt : '0';
				if(!empty($search_location_name) && empty($categories[0]['name'])){
					echo ' Groomers in '.$search_location_name;
				}else if(empty($search_location_name) && !empty($categories[0]['name'])){
					echo ' Groomers Found';
				}else if(empty($search_location_name) && empty($categories[0]['name']) && (array_key_exists("availableNow",$_GET) || array_key_exists("hasPhoto",$_GET) || array_key_exists("gender",$_GET) || array_key_exists("client-types",$_GET) || array_key_exists("offering",$_GET))){
					echo ' Groomers Found';
				}else if(empty($search_location_name) && empty($categories[0]['name']) ){
					echo ' Groomers Found';
				}else{
					echo ' Groomers in '.$search_location_name;
				}
				echo '</h3>'; 
			}
			?>
				
				
				
					<div class="row filterResult providerCat justify-content-center">
				<?php 
				$found = 0;
				if(!empty($categories[0]['name'])){
				foreach($categories as $p => $providers){	?>
						<?php 
						
$found = 1;
$busi_name = !empty($providers['business_name']) ? cleanURL(str_replace(' ','-',strtolower($providers['business_name']))) : cleanURL($providers['permalink']) ;
							?>
									<div class="col-6 col-sm-3 col-lg-2">
										<a href="<?php echo base_url('/provider/'.$providers['clean_url']); ?>">	
											<div class="provider-Details mb-4">
												<div class="providerImg mb-1 mb-md-3">
												<img src="<?php echo !empty($providers['image']) ? $providers['image'] : ''; ?>" class="d-block w-100" alt="...">
												</div>
												<div class="pro-content">
													<p class="text-grey mb-0 fw-bold"><?php echo $providers['name']; ?></p>
							<p class="text-orange mb-0 fw-bold"><?php echo $providers['business_name']; ?></p>
							<h6 class="text-grey"><?php echo $providers['city'].', '.$providers['state_code'].' '.$providers['zipcode']; ?></h6>
												</div>
											</div>
										</a>	
									</div>
							
				<?php } }
				if(empty($categories[0]['name'])){
					echo '<p class="text-center mt-5">No results found.</p>';
				} ?>	
	
					</div>	
			</div>
		</div>
		</div>
<div class="loader"></div>	
<?php
$query = '';
$query1 = '';
if(!empty($_GET)){
	$query1 = http_build_query($_GET);
}
if(!empty($query1)){
	$query .= '?'.$query1;
}
?>
<input name="urlget" type="hidden" id="urlget" value="<?php echo $query; ?>" />	
<input name="urlload" type="hidden" id="urlload" value="<?php echo substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?")); ?>" />	
<input name="urlfinal" type="hidden" id="urlfinal" value="<?php echo substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?")).''.$query; ?>" />	
<script>
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

	$(document).ready(function(){
		attachLocationPerm();		
		$('.toggleAdvanced').on('click', function(e){
			e.preventDefault();
			$('.advancedOptions').slideToggle();
		});
	})

	$('body').on('click', '.filterOpt', function(e){
		//e.preventDefault();
		//showLoader();
		//window.location.href = $(this).data('href');
		var urlget = $("#urlget").val();
		var loadurl = '';
		if($(this).is(':checked'))
		{		  
			if(urlget == ''){
				loadurl = '?'+$(this).data('url');
			}else{
				loadurl = urlget+'&'+$(this).data('url');
			}
			$("#urlget").val(loadurl);
			$("#urlfinal").val($("#urlload").val()+''+$("#urlget").val());
		}else
		{
			loadurl = $("#urlget").val();
			var urlkey = $(this).data('urlkey');
			console.log(urlkey);
			//console.log($("#urlload").val()+''+$("#urlget").val());
			console.log($("#urlfinal").val());
			$("#urlfinal").val(returnRefinedURL (urlkey, $("#urlfinal").val()));
			$("#urlget").val(returnRefinedURL (urlkey, $("#urlget").val()));
		 // unchecked
		}
		console.log(loadurl);
	});
	
	$('body').on('change', '.filterOpt', function(e){
		e.preventDefault();
		showLoader();
		window.location.href = $("#urlload").val()+''+$("#urlget").val();
	});
	
	function returnRefinedURL (key, url) {
		// separating the key-value ('search') portion of the URL from the rest:
		var urlParts = url.split('?');
		// if we have only a single array-element, or if the key to remove
		// is not found in the URL, we quit here and return the same unchanged URL:
		if (urlParts.length === 1 || url.indexOf(key) === -1 ) {
			// there were no parameters, or the
			// key wasn't present
			return url;
		}
		else {
			// otherwise, we split the key-value string on the '&' characters,
			// for an array of key=value strings:
			var keyValues = urlParts[1].split('&'),
			// filtering that array:
				refinedKeyValues = keyValues.filter(function (keyValuePair) {
					// keeping only those array elements that don't /start with/
					// the key to be removed:
					return keyValuePair.indexOf(key) !== 0;
				// joining the key=value pairs back into a string:
				}).join('&');
		}
		// returning the refined URL:
		return urlParts[0] + '?' + refinedKeyValues;
	}
	/* Show loader */
	function showLoader(){
		$('.loader').show();
	}
	function hideLoader(){
		$('.loader').hide();
	}

	function attachLocationPerm(){
		$('select.locationsearch').selectize({
			valueField: 'homesearch',
			labelField: 'zipcode',
			searchField: 'zipcode',
			//preload: true,
			create: false,
			render: {
				option: function(item, escape) {
					return '<div>'+escape(item.zipcode)+'</div>';
				}
			},
			load: function(query, callback) {
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
			},
			onChange: function(val) {
				if($('#category_id option:selected').val() != undefined){
					var category_name = $('#category_id option:selected').val();
				}else{
					var category_name = '';
				}
				
				var radius = $('#radius').val();
				var location = val;
				var city_state = location.split('||')[0]+', '+location.split('||')[1];
				var city_state1 = city_state.replace(', ', '-').replace(' ', '-').toLowerCase();
				console.log(city_state1);
				var city_state12 = 'all';
				if(city_state1 != '' && val != '' && val != 'undefined' && val != undefined){
					city_state12 = city_state1;
				}
				if(category_name == ''){
					category_name = 'all';
				}
				$('#search_location_url').val(location.split('||')[4])
				//window.location = '<?php echo base_url(); ?>/providers/'+city_state12+'/'+category_name+'?radius='+radius;
				
			}
		});
	}
	function get_providers(){
		if($('#category_id option:selected').val() != undefined){
			var category_id = $('#category_id option:selected').val();
		}else{
			var category_id = '';
		}
		
		var radius = $('#radius').val();
		var location_id = $('#location_id').val();
		var location = $('#location_id').attr('data-value');
		var location_name = $('#search_location_name').val();
		var location_url = $('#search_location_url').val();
		var qst = $('#urlget').val();
		if(location_url == ''){
			location_url = 'all';
		}
		if(category_id == ''){
			category_id = 'all';
		}
		if(qst == '?'){
			qst = 'radius='+radius;
		}else if(qst == ''){
			qst = '?radius='+radius;
		}
		window.location = '<?php echo base_url(); ?>/providers/'+location_url+'/'+category_id+''+qst;
	}
</script>	
<?= $this->endSection() ?>