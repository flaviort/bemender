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
	<body class="internal dashboard dashboard-user">
		<div class="wrap">

			<!-- FSMENU -->
			<?php include('includes/inc_fsmenu.php'); ?>

			<!-- MENU TOP -->
			<?php include('includes/inc_menu-top.php'); ?>
			
			<!-- SECTION / TOP PART -->
			<?php include('includes/inc_dashboard-user-top-part.php'); ?>

			<!-- SECTION / CONTENT -->
			<section id="content">
				
				<!-- MAIN -->
				<div id="main">
					<div class="container container-big">
						<div class="row">

							<!-- COL / LEFT -->
							<?php include('includes/inc_dashboard-user-sidebar.php'); ?>
								
							<!-- COL / RIGHT -->
							<div class="col-md-8 right">

								<!-- TITLE -->
								<div class="title wow fadeInUp">
									
									<h2 class="text-large">
										Address
									</h2>

									<div class="line"></div>

								</div><!-- END TITLE -->

								<!-- ADRESS -->
								<div class="address">
									
									<!-- SAVED -->
									<div class="saved">
										
										<h2 class="text-x-medium wow fadeInUp">
											Saved Address
										</h2>

										<!-- LINE -->
										<div class="line wow fadeInUp">
											
											<!-- LEFT -->
											<div class="left">
												
												<img src="assets/img/svg/icon-location.svg" alt="Location" class="svg">

												<p class="text-medium address">
													213 Derrick Street, Boston, MA <br />
													02130 USA
												</p>

											</div><!-- END LEFT -->

											<!-- RIGHT -->
											<div class="right">

												<button class="text-medium hvr-underline-from-left edit-address">
													Edit
												</button>

												<button href="#are-you-sure" data-fancybox class="text-medium hvr-underline-from-left">
													Delete
												</button>

												<!-- ARE YOU SURE -->
												<div id="are-you-sure">
													
													<h2 class="text-large">
														Are you sure?
													</h2>

													<!-- BUTTONS -->
													<div class="buttons">

														<button class="purple-bt text-medium" onclick="$.fancybox.close();">
															Yes
														</button>

														<button class="hollow-purple-bt text-medium" onclick="$.fancybox.close();">
															No
														</button>
														
													</div><!-- END BUTTONS -->

												</div><!-- END ARE YOU SURE -->
												
											</div><!-- END RIGHT -->

											<div class="cf"></div>

										</div><!-- END LINE -->

									</div><!-- END SAVED -->

									<!-- EDIT ADDRESS -->
									<div id="edit-address">
										
										<h2 class="text-x-medium">
											Edit Address
										</h2>

										<!-- FORM -->
										<form action="">
											<div class="row">

												<!-- COL -->
												<div class="col-12">
													
													<input type="text" placeholder="Address Name *" required class="text-medium">
													<input type="text" placeholder="Address Line 1 *" required class="text-medium">
													<input type="text" placeholder="Address Line 2" class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="State *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="City *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="ZIP Code *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="Location" class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12">

													<input type="submit" id="save-edit-address" style="display: none;">
													<label for="save-edit-address" class="purple-bt text-medium save">
														Save Address
													</label>

													<div class="cf"></div>

												</div><!-- END COL -->
											</div><!-- END ROW -->
										</form><!-- END FORM -->

									</div><!-- END ADD NEW -->

									<!-- ADD NEW -->
									<div class="add-new">
										
										<h2 class="text-x-medium wow fadeInUp">
											Add New Address
										</h2>

										<!-- FORM -->
										<form action="" class="wow fadeInUp">
											<div class="row">

												<!-- COL -->
												<div class="col-12">
													
													<input type="text" placeholder="Address Name *" required class="text-medium">
													<input type="text" placeholder="Address Line 1 *" required class="text-medium">
													<input type="text" placeholder="Address Line 2" class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="State *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="City *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="ZIP Code *" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="Location" class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12">

													<input type="submit" id="add-new-address" style="display: none;">
													<label for="add-new-address" class="purple-bt text-medium">
														Add New Address
													</label>

													<div class="cf"></div>

												</div><!-- END COL -->
											</div><!-- END ROW -->
										</form><!-- END FORM -->

									</div><!-- END ADD NEW -->

								</div><!-- END ADDRESS -->

							</div><!-- END COL / RIGHT -->

						</div><!-- END ROW -->
					</div><!-- END CONTAINER -->
				</div><!-- END MAIN -->

				<!-- SECTION / PROVIDER -->
				<?php include('includes/inc_provider.php'); ?>

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
			<script src="assets/js/dashboard-user.js"></script>
		 </footer>

	</body><!-- END BODY -->
</html><!-- END HTML -->