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
				<a href="dashboard-provider-profile.php" class="<?= ($activePage == 'dashboard-provider-profile') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-profile.svg" alt="Profile" class="svg">
					<p class="text-medium">
						Profile
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-orders.php" class="<?= ($activePage == 'dashboard-provider-orders') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-orders.svg" alt="Orders" class="svg">
					<p class="text-medium">
						Orders
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-quotes.php" class="<?= ($activePage == 'dashboard-provider-quotes') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-jobs.svg" alt="Quotes" class="svg">
					<p class="text-medium">
						Quotes
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-edit-account.php" class="<?= ($activePage == 'dashboard-provider-edit-account') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-edit-account.svg" alt="Edit Account" class="svg">
					<p class="text-medium">
						Edit Account
					</p>
				</a>
			</li>

			<li>
				<a href="#" class="<?= ($activePage == 'dashboard-user-need-help') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-message.svg" alt="Message" class="svg">
					<p class="text-medium">
						Message
					</p>
				</a>
			</li>

			<li>
				<a href="#" class="<?= ($activePage == 'dashboard-provider-earnings') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-earnings.svg" alt="Earnings" class="svg">
					<p class="text-medium">
						Earnings
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-terms-and-conditions.php" class="<?= ($activePage == 'dashboard-provider-terms-and-conditions') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-tec.svg" alt="Terms and Conditions" class="svg">
					<p class="text-medium">
						Terms and Conditions
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-provider-faq.php" class="<?= ($activePage == 'dashboard-provider-faq') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-faq.svg" alt="FAQ" class="svg">
					<p class="text-medium">
						FAQ
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-history.php">
					<img src="assets/img/svg/icon-user.svg" alt="Switch to user" class="svg">
					<p class="text-medium">
						Switch to user
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