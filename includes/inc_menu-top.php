<section id="menu-top">
	<div class="container container-big">
		<div class="row">
			<div class="col-12">

				<!-- LOGO TOP -->
				<a href="./" class="logo wow fadeInUp" id="logo-top">
					<img src="assets/img/svg/logo.svg" alt="Mender" class="svg">
				</a><!-- END LOGO TOP -->
							
				<!-- NAV / MENU -->
				<nav class="menu">
					<ul>
									
						<li class="wow fadeInUp">
							<a href="about-us.php" class="text-medium hvr-underline-from-left">
								About us
							</a>
						</li>

						<li class="wow fadeInUp" data-wow-delay=".2s">
							<a href="users.php" class="text-medium hvr-underline-from-left">
								Users
							</a>
						</li>

						<li class="wow fadeInUp" data-wow-delay=".4s">
							<a href="providers.php" class="text-medium hvr-underline-from-left">
								Providers
							</a>
						</li>

						<li class="wow fadeInUp" data-wow-delay=".6s">
							<a href="contact.php" class="text-medium hvr-underline-from-left">
								Contact
							</a>
						</li>

						<?php if(strpos($_SERVER['REQUEST_URI'], 'dashboard-user-') !== false):?>
							
							<li class="wow fadeInUp last" data-wow-delay=".8s">
								<a href="dashboard-user-history.php" class="text-medium">
									Hi, Jane
								</a>
							</li>

						<?php elseif(strpos($_SERVER['REQUEST_URI'], 'dashboard-provider-') !== false):?>

							<li class="wow fadeInUp last" data-wow-delay=".8s">
								<a href="dashboard-provider-profile.php" class="text-medium">
									Hi, Jane
								</a>
							</li>

						<?php else: ?>
							
							<li class="wow fadeInUp last" data-wow-delay=".8s">
								<a href="user-sign-in.php" class="text-medium">
									Sign In
								</a>
							</li>

						<?php endif; ?>

					</ul><!-- END UL -->
				</nav><!-- END NAV / MENU -->

				<!-- OPEN FS -->
				<button id="open-fs">
					<img src="assets/img/svg/icon-menu.svg" alt="Open Menu" class="svg open">
				</button><!-- END OPEN FS -->

			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER BIG -->
</section><!-- END MENU TOP -->