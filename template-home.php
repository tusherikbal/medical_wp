<?php get_header();

	/*
	Template name: Home
	
	*/

 ?>

<?php $options = get_option( 'theme_options' ); ?>
<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">

						<?php if($options['banner_sub_top_txt']){

						echo  $options['banner_sub_top_txt'];
						} ?>

						

					</span>
					<h1 class="mb-3 mt-3"><?php if($options['banner_sub_text']){

						echo  $options['baner_main_text'];
								} ?></h1>
					
					<p class="mb-4 pr-5"><?php if($options['banner_sub_text']){

						echo  $options['banner_sub_text'];
							} ?></p>
					<div class="btn-container ">
						<a href="<?php echo  $options['baner_main_text']; ?> " target="_blank" class="btn btn-main-2 btn-icon btn-round-full">
							<?php if($options['banner_btn_txt']){echo  $options['baner_main_text'];} ?> 
							<i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<!-- <i class="icofont-surgeon-alt"></i> -->
							<i class="<?php echo $options['online_appointment_icon']; ?>"></i> 
							
						</div>
						<span><?php echo $options['online_appointment_subtitle']; ?></span>
						<h4 class="mb-3"><?php echo $options['online_appointment_title']; ?></h4>
						<p class="mb-4"><?php echo $options['online_appointment_description']; ?></p>
						<a href="<?php echo $options['online_appointment_btn_link']; ?>" class="btn btn-main btn-round-full"><?php echo $options['online_appointment_btn_txt']; ?></a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="<?php echo $options['appointment_time_scdl_icon']; ?>"></i>
						</div>
						<span><?php echo $options['appointment_time_subtitle']; ?></span>
						<h4 class="mb-3"><?php echo $options['appointment_time_title']; ?></h4>
						<ul class="w-hours list-unstyled">

						<?php $amroption= $options['online_appointment_time'];
						
							foreach($amroption as $time_option){
								?>
								<li class="d-flex justify-content-between"><?php echo $time_option['appointment_day'] ?> : <span><?php echo $time_option['appointment_time'] ?> </span></li>
							
						<?php 
							}
						?>	

							
						
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="<?php echo $options['emergency_call_icon']; ?>"></i>
						</div>
						<span><?php echo $options['emergency_call_sub_title']; ?></span>
						<h4 class="mb-3"><?php echo $options['emergency_call_title']; ?></h4>
						<p><?php echo $options['emergency_call_description']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<!-- <img src="assets/images/about/img-1.jpg" alt="" class="img-fluid"> -->
					<img src="<?php echo $options['personal_health_img_one']; ?>" alt="" class="img-fluid">
					
					<img src="<?php echo $options['personal_health_img_two']; ?>" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="<?php echo $options['personal_health_img_three']; ?>" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color"><?php echo $options['personal_health_title']; ?></h2>
					<p class="mt-4 mb-5"><?php echo $options['personal_health_description']; ?></p>

					<a href="<?php echo $options['phd_btn_link']; ?>" class="btn btn-main-2 btn-round-full btn-icon"><?php echo $options['phd_btn_txt']; ?><i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				
			<?php 
				$counter_option = $options['counter_repeater'];
				foreach($counter_option as $counter){
					?>

<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3 counter" data-count="<?php echo $counter['count_item_number']; ?>">0</span>k
						<p><?php echo $counter['count_item']; ?></p>
					</div>
				</div>
			

				<?php 
				}
				
				?>
				

				


			</div>
		</div>
	</div>
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2><?php echo $options['service_title_section']; ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['service_description_section']; ?></p>
				</div>
			</div>
		</div>

		<div class="row">

				<?php  
				
					$service_repeter = $options['services_items'];
					foreach($service_repeter as $services){
						?>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="<?php echo $services['service_icon']; ?> text-lg"></i>
						<h4 class="mt-3 mb-3"><?php echo $services['service_title']; ?></h4>
					</div>

					<div class="content">
						<p class="mb-4"><?php echo $services['service_description']; ?></p>
					</div>
				</div>
				</div>

			<?php
					}
				
				?>
			



			


		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="<?php echo $options['appointment_background_image']; ?>" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $options['appointment_phone_number']; ?></h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?php echo $options['appointment_title']; ?></h2>
					<p class="mb-4"><?php echo $options['appointment_description']; ?></p>

					

				<?php echo do_shortcode('[contact-form-7 id="42" title="Contact form 1"]')  ?>
					
				
			



            </div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $options['review_section_title'] ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['review_section_desc'] ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				
				<?php 
				$review_option = $options['reivewss'];
				foreach($review_option as $reviews){
					?>

				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="<?php echo $reviews['review_img']; ?>" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?php echo $reviews['review_title']; ?></h4>
						<span><?php echo $reviews['review_title_username']; ?></span>
						<p>
						<?php echo $reviews['review_desc']; ?>
						</p>
					</div>
				</div>

				<?php
				}
				
				?>		

			

				

				

				

				
			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2><?php echo $options['partner_title_text'] ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $options['partner_description'] ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
		
		<?php  
			$teamsection = $options['parners_section'];
			foreach($teamsection as $teams){
				?>
		
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="<?php echo $teams['partners_logo'] ?>" alt="" class="img-fluid">
				</div>
			</div>

		<?php
		}
		?>
		
		
			
		</div>
	</div>
</section>

<?php get_footer(); ?>