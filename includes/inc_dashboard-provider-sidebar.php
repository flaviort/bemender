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
				<a href="dashboard-provider-jobs.php" class="<?= ($activePage == 'dashboard-provider-jobs') ? 'active':''; ?>">
					<img src="assets/img/svg/icon-jobs.svg" alt="Jobs" class="svg">
					<p class="text-medium">
						Jobs
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
					<img src="assets/img/svg/icon-need-help.svg" alt="Need Help" class="svg">
					<p class="text-medium">
						Need Help
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