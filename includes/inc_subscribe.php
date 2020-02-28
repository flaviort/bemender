<section id="subscribe">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<img src="assets/img/svg/logo-icon.svg" alt="M" class="svg bg">

				<h2 class="text-large wow fadeInUp">
					<strong>
						Subscribe your email and stay in touch!
					</strong>
				</h2>

				<!-- FORM -->
			    <form action="https://bemender.us19.list-manage.com/subscribe/post-json?u=93391a835fd7b89d9704cf15e&amp;id=b9f477c2b0&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate wow fadeInUp">
			    	<div class="line">

						<input type="email" name="EMAIL" placeholder="Subscribe your email and stay in touch!" required="" class="text-medium input" id="mce-EMAIL">

						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe-post" class="button" style="display: none;">
						<label for="mc-embedded-subscribe-post" class="text-medium">Go</label>

					</div>
				</form><!-- END FORM -->

			    <!-- SUBSCRIBE RESULT -->
			    <div id="subscribe-result"></div>
				
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section><!-- END SECTION / SUBSCRIBE -->

<!-- SUBS SUCCESS -->
<div id="subs-success" style="display: none;">
	<div class="wrap">
		
		<p class="text-x-large">
			Success!
		</p>

		<p class="text-medium">
			Thank you for signing up. You will be the first to know about new releases & special projects. Stay Tuned!
		</p>

		<button class="white-bt text-medium" onclick="$.fancybox.close()">
			Close
		</button>

	</div><!-- END WRAP -->
</div><!-- END SUBS SUCCESS -->

<!-- SUBS ERROR -->
<div id="subs-error" style="display: none;">
	<div class="wrap">
		
		<p class="text-x-large">
			Error
		</p>

		<p class="text-medium">
			An error occurred while processing your request. Please try again.
		</p>

		<button class="white-bt text-medium" onclick="$.fancybox.close()">
			Close
		</button>

	</div><!-- END DIV -->
</div><!-- END SUBS ERROR -->