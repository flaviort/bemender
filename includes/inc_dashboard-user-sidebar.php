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
						History
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
				<a href="dashboard-user-address.php" class="<?= ($activePage == 'dashboard-user-address') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-address.svg" alt="Address" class="svg">
					<p class="text-medium">
						Address
					</p>
				</a>
			</li>

			<li>
				<a href="dashboard-user-edit-account.php" class="<?= ($activePage == 'dashboard-user-edit-account') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-edit-account.svg" alt="Edit Account" class="svg">
					<p class="text-medium">
						Edit Account
					</p>
				</a>
			</li>

			<li>
				<a href="#" class="<?= ($activePage == 'dashboard-user-need-help') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-need-help.svg" alt="Need Help" class="svg">
					<p class="text-medium">
						Need Help
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