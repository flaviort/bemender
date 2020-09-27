<!DOCTYPE html>
<html lang="en">

	<head>
		
		<!-- META / FAVICON -->
		<?php include('includes/inc_meta.php'); ?>

		<!-- DESCRIPTION -->
		<meta name="description" content="In the era of instant-everything, it’s crazy that you still have to waste an entire afternoon researching, calling and comparing local pros whenever you need one. So we set out to make it easier. Today, we are Menders!">

		<!-- KEYWORDS -->
		<meta name="keywords" content="mender, bemender, hire, get hired, hire someone">

		<title>Mender | Hire or Get Hired on a Secure Platform.</title>

		<!-- FACEBOOK -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Mender | Hire or Get Hired on a Secure Platform." />
		<meta property="og:description" content="In the era of instant-everything, it’s crazy that you still have to waste an entire afternoon researching, calling and comparing local pros whenever you need one. So we set out to make it easier. Today, we are Menders!" />
		<meta property="og:url" content="https://bemender.com/" />
		<meta property="og:site_name" content="Mender | Hire - Get Hired on a trusted platform." />
		<meta property="og:image" content="https://bemender.com/assets/img/og-image.jpg" />
		<meta property="og:image:secure_url" content="https://bemender.com/assets/img/og-image.jpg" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />

		<!-- TWITTER -->
		<meta name="twitter:card" content="Mender | Hire or Get Hired on a Secure Platform." />
		<meta name="twitter:url" content="https://bemender.com/" />
		<meta name="twitter:title" content="Mender | Hire or Get Hired on a Secure Platform." />
		<meta name="twitter:description" content="In the era of instant-everything, it’s crazy that you still have to waste an entire afternoon researching, calling and comparing local pros whenever you need one. So we set out to make it easier. Today, we are Menders!" />
		<meta name="twitter:image" content="assets/img/og-image.jpg" />

		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/framework.css">
		<link rel="stylesheet" href="assets/css/main.css">
	
	</head><!-- END HEAD -->

	<!-- BODY -->
	<body class="internal dashboard dashboard-provider">
		<div class="wrap">

			<!-- FSMENU -->
			<?php include('includes/inc_fsmenu.php'); ?>

			<!-- MENU TOP -->
			<?php include('includes/inc_menu-top.php'); ?>
			
			<!-- SECTION / TOP PART -->
			<?php include('includes/inc_dashboard-provider-top-part.php'); ?>

			<!-- SECTION / CONTENT -->
			<section id="content">
				
				<!-- MAIN -->
				<div id="main">
					<div class="container container-big">
						<div class="row">

							<!-- COL / LEFT -->
							<?php include('includes/inc_dashboard-provider-sidebar.php'); ?>
								
							<!-- COL / RIGHT -->
							<div class="col-md-8 right">

								<!-- TITLE -->
								<div class="title wow fadeInUp">
									
									<h2 class="text-large">
										Add Service
									</h2>

									<div class="line"></div>

								</div><!-- END TITLE -->

								<!-- EDIT SERVICE -->
								<div class="edit-service">

									<!-- FIELDS -->
									<div class="fields">
										<form action="">
											<div class="row">

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														What can you do?
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">
														
														<select required class="text-medium">
															<option value="" disabled selected>Category</option>
															<option value="House Services">House Services</option>
															<option value="Category B">Category B</option>
															<option value="Category C">Category C</option>
														</select>

														<img src="assets/img/svg/icon-down.svg" alt="Select" class="svg">

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-md-7 wow fadeInUp">

													<h2 class="text-x-medium">
														Choose Subcategory
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">
														
														<select required class="text-medium">
															<option value="" disabled selected>Select a subcategory</option>
															<option value="Cleaning & Housekeeping">Cleaning & Housekeeping</option>
															<option value="Subcategory B">Subcategory B</option>
															<option value="Subcategory C">Subcategory C</option>
														</select>

														<img src="assets/img/svg/icon-down.svg" alt="Select" class="svg">

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-md-5 wow fadeInUp">

													<h2 class="text-x-medium">
														Hourly Rate
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">
														
														<input type="number" min="0.00" max="10000.00" step="0.01" required class="text-medium value" placeholder="Value in $">

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														Description
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">

														<textarea required class="text-medium" placeholder="Description here"></textarea>

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL / ADD MORE -->
												<div class="col-12 add-more">

													<a href="#" class="text-medium hvr-underline-from-left">
														+ Add More
													</a>

													<div class="cf"></div>

												</div><!-- END COL / ADD MORE-->

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														Qualification
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">

														<input type="text" required class="text-medium" placeholder="Qualification" value="Specialist in Cleaning">

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														About You
													</h2>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">

														<input type="text" required class="text-medium" placeholder="About You" value="Specialist in Cleaning">

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														Resume
													</h2>

													<a href="#upload-gallery" data-fancybox class="text-medium hvr-underline-from-left upload-gallery">
														+ Add Image
													</a>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">

														<textarea required class="text-medium" placeholder="Description here"></textarea>

													</div><!-- END LINE -->

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12 wow fadeInUp">

													<h2 class="text-x-medium">
														License
													</h2>

													<a href="#upload-gallery" data-fancybox class="text-medium hvr-underline-from-left upload-gallery">
														+ Add Image
													</a>

													<div class="cf"></div>

													<!-- LINE -->
													<div class="line">

														<textarea required class="text-medium" placeholder="Description here"></textarea>

													</div><!-- END LINE -->

												</div><!-- END COL -->

											</div><!-- END ROW -->

										</form><!-- END FORM -->
									</div><!-- END FIELDS -->

									<!-- GALLERY -->
									<div class="gallery">

										<!-- TOP PART -->
										<div class="top-part wow fadeInUp">

											<h2 class="text-x-medium">
												Gallery
											</h2>

											<div class="cf"></div>

										</div><!-- END TOP PART -->

										<!-- BOXES -->
										<div class="boxes">
											<div class="row">

												<!-- COL -->
												<div class="col-12">

													<!-- FORM -->
													<form action="#" class="dropzone" id="upload-zone" method="post" enctype="multipart/form-data">
									
														<!-- MIDDLE -->
														<div class="middle" style="pointer-events: none">

															<p class="text-x-medium top">
																Drop your files here
															</p>

															<p class="text-medium down">
																Or, if you prefer...
															</p>

															<input id="upload-files" type="file" name="file" multiple />
															<label for="upload-files" class="button-normal text-small">
																Select a file from your device
															</label>

														</div><!-- END MIDDLE -->

														<button class="purple-bt text-medium" id="gallery-done" onclick="$.fancybox.close();">
															Done
														</button>

													</form><!-- END FORM -->
												
												</div><!-- END COL -->

												<!-- COL / LAST-->
												<div class="col-12 last wow fadeInUp">
													
													<button class="update hollow-purple-bt text-medium">
														Update
													</button>

												</div><!-- END COL / LAST -->

											</div><!-- END ROW -->
										</div><!-- END BOXES -->

										<!-- UPLOAD GALLERY -->
										<div id="upload-gallery">
											
											<h2 class="text-x-medium">
												Upload Images
											</h2>

											<!-- FORM -->
											<form action="#" class="dropzone" id="upload-zone2" method="post" enctype="multipart/form-data">
							
												<!-- MIDDLE -->
												<div class="middle" style="pointer-events: none">

													<p class="text-x-medium top">
														Drop your files here
													</p>

													<p class="text-medium down">
														Or, if you prefer...
													</p>

													<input id="upload-files" type="file" name="file" multiple />
													<label for="upload-files" class="button-normal text-small">
														Select a file from your device
													</label>

												</div><!-- END MIDDLE -->

												<button class="purple-bt text-medium" id="gallery-done" onclick="$.fancybox.close();">
													Done
												</button>

											</form><!-- END FORM -->
										</div><!-- END UPLOAD GALLERY -->

									</div><!-- END GALLERY -->

								</div><!-- END EDIT SERVICE -->

							</div><!-- END COL / RIGHT -->

						</div><!-- END ROW -->
					</div><!-- END CONTAINER -->
				</div><!-- END MAIN -->
			</section><!-- END SECTION / CONTENT -->

			<!-- SECTION / WHERE -->
			<?php include('includes/inc_where.php'); ?>

			<!-- SECTION / SUBSCRIBE -->
			<?php include('includes/inc_subscribe.php'); ?>

			<!-- SECTION / FOOTER -->
			<?php include('includes/inc_footer.php'); ?>

		</div><!-- END WRAP -->

		<!-- FOOTER-->
		<footer>
			<script src="assets/js/framework.js"></script>
			<script src="assets/js/functions.js"></script>
			<script src="assets/js/dashboard-provider.js"></script>
		 </footer>

	</body><!-- END BODY -->
</html><!-- END HTML -->