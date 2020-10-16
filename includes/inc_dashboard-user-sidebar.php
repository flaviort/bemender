<div class="col-md-4 left wow fadeInUp">

	<!-- MOBILE SIDEBAR -->
	<button class="mobile-sidebar">
		
		<p class="text-medium">
			Menu
		</p>

		<img src="assets/img/svg/icon-down.svg" alt="menu" class="svg">

	</button><!-- END MOBILE SIDEBAR -->

	<!-- NAV -->
	<nav>
		<ul>

			<?php
				$activePage = basename($_SERVER['PHP_SELF'], ".php");
			?>
			
			<li>
				<a href="dashboard-user-history.php" class="<?= ($activePage == 'dashboard-user-history') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-history.svg" alt="History" class="svg">
					<p class="text-medium">
						Jobs
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-quote-request.php" class="<?= ($activePage == 'dashboard-user-quote-request') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-quote.svg" alt="Quote Request" class="svg">
					<p class="text-medium">
						Quote Request
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-payment-method.php" class="<?= ($activePage == 'dashboard-user-payment-method') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-payment-method.svg" alt="Payment Method" class="svg">
					<p class="text-medium">
						Payment Method
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-faq.php" class="<?= ($activePage == 'dashboard-user-faq') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-faq.svg" alt="FAQ" class="svg">
					<p class="text-medium">
						FAQ
					</p>
				</a>
			</li>

			<li>
				<a href="#" class="<?= ($activePage == 'dashboard-user-message') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-message.svg" alt="Message" class="svg">
					<p class="text-medium">
						Message
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-tutorials.php" class="<?= ($activePage == 'dashboard-user-tutorials') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-tutorials.svg" alt="Tutorials" class="svg">
					<p class="text-medium">
						Tutorials
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-profile.php">
					<img src="assets/img/svg/icon-user.svg" alt="Switch to Provider" class="svg">
					<p class="text-medium">
						Switch to Provider
					</p>
				</a>
			</li>

			<li>
				<a href="sign-in.php">
					<img src="assets/img/svg/icon-sign-out.svg" alt="Sign-out" class="svg">
					<p class="text-medium">
						Sign-out
					</p>
				</a>
			</li>

		</ul><!-- END UL -->
	</nav><!-- END NAV -->
</div><!-- END COL / LEFT -->