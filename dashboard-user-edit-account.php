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
										Edit Account
									</h2>

									<div class="line"></div>

								</div><!-- END TITLE -->

								<!-- ACCOUNT -->
								<div class="account">
									
									<!-- SAVED -->
									<div class="saved">

										<!-- FORM -->
										<form action="" class="wow fadeInUp">
											<div class="row">

												<!-- COL -->
												<div class="col-12">
													
													<input type="text" placeholder="Full name *" value="Jane Doe" required class="text-medium">
													<input type="text" placeholder="Email *" value="janedoe@email.com" required class="text-medium">
													<input type="text" placeholder="Phone" value="+1 202 555 0191" class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<select required class="text-medium">
														<option value="" disabled>Sex</option>
														<option value="Male">Male</option>
														<option value="Female" selected>Female</option>
														<option value="Undefined">Prefer not to say</option>
													</select>

													<img src="assets/img/svg/icon-down.svg" alt="Select" class="svg">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-sm-6">
													
													<input type="text" placeholder="Birth date *" value="06/15/1989" required class="text-medium">

												</div><!-- END COL -->

												<!-- COL -->
												<div class="col-12">

													<input type="submit" id="save-account" style="display: none;">
													<label for="save-account" class="purple-bt text-medium save">
														Save
													</label>

													<div class="cf"></div>

												</div><!-- END COL -->
											</div><!-- END ROW -->
										</form><!-- END FORM -->

									</div><!-- END SAVED -->

									<!-- PASSWORD -->
									<div class="password">
										
										<h2 class="text-x-medium wow fadeInUp">
											Change Password
										</h2>

										<!-- FORM -->
										<form action="" class="wow fadeInUp">
											<div class="row">

												<!-- COL -->
												<div class="col-12">
													
													<input type="text" placeholder="Current Passowrd *" required class="text-medium">
													<input type="text" placeholder="New Password *" required class="text-medium">
													<input type="text" placeholder="Repear New password *" required class="text-medium">

													<input type="submit" id="save-password" style="display: none;">
													<label for="save-password" class="purple-bt text-medium save">
														Save
													</label>

													<div class="cf"></div>

												</div><!-- END COL -->
											</div><!-- END ROW -->
										</form><!-- END FORM -->

									</div><!-- END PASSWORD -->

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