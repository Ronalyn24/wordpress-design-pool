<?php
/*
Template Name: Thank you - Registration
*/

get_header(); ?>

<div class="main-content aw-default-page reg-thankyou-page">

	<section class="aw-section aw-sec-1 aw-banner">

		<div class="aw-row mob-pt-1 small-mob-pt-3 d-pt-2 small-mob-pt-1">

			<h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mt-0-5">
				
				THANKS FOR <span class="light-purple">YOUR INTEREST</span>
			
			</h1>
			
			<h2 class="aw-headline aw-headline__head-three text-center">Here is what happens next...</h2>

			<ol class="sub-text__two dark-grey ctrl-width-center d-mt-1 d-mb-1 with-style" style="--ctrl-max-width: 915px;">
				<li>Review the "Licensing Agreement" and the "Let's Get Started" documents below.</li>
				<li class="anchor-violet">Schedule your <a href="https://calendly.com/designpool/conversation-with-design-pool" target="_blank" rel="noopener">Zoom video</a> chat with Kristen. <i>During this meeting, we would love to hear about your business and will answer any of your questions.</i></li>
				<li>After approval, we will provide you with access to our site to download images for print.</li>
			</ol>

			<p class="sub-text__two dark-grey text-center anchor-violet ctrl-width-center d-mt-1 d-mb-3" style="--ctrl-max-width: 945px;">If we don't hear from you within 2 business days of your interest, we will reach out via email.<br> <i>Please check your spam folder, if you did not receive an email from <a href="mailto:kdettoni@designpoolpatterns.com">kdettoni@designpoolpatterns.com.</a></i>
			</p>
			
			<div class="contract-box">
				
				<div class="contract-box__item">
					
					<div class="contract-box__images">
						
						<img srcset="<?php echo get_site_url().'/wp-content/uploads/2024/03/draft-contract-new-2x.png'; ?> 2x"
						src="<?php echo get_site_url().'/wp-content/uploads/2024/03/draft-contract-new.png'; ?>" alt="Licensing Agreement" width="827"/>
						
					</div>
					
					<p class="sub-text__two dark-grey d-mb-1">
						The <b>Licensing Agreement</b> is our contract and explains all the fine print.
					</p>
					
				</div><!-- .contract-box__item -->
				
				<div class="contract-box__item">
					
					<div class="contract-box__images">

						<img srcset="<?php echo get_site_url().'/wp-content/uploads/2024/03/licensing-new-1-2x.png'; ?> 2x"
						src="<?php echo get_site_url().'/wp-content/uploads/2024/03/licensing-new-1.png'; ?>" alt="Get Started Guide Page 1" width="827"/>
						
					</div>
					
					<p class="sub-text__two dark-grey d-mb-1">
						<b>Let's Get Started</b> helps us get your business set up in our system and explains how we can support each other for success.
					</p>
					
				</div><!-- .contract-box__item -->
				
			</div><!-- .contract-box -->
			
			<div class="aw-btn-ctner text-center d-no-padding d-mb-3">
          
        <a class="gen-btn gen-btn__violet three-wider" href="<?php echo get_site_url().'/wp-content/uploads/2023/08/DESIGN-POOL-Getting-Started.pdf'; ?>" target="_self" download>DOWNLOAD</a>
        
      </div>
			
			<p class="sub-text__two dark-grey text-center anchor-violet d-mb-3">
				You can learn more about the benefits of licensing with Design Pool by reviewing our <a href="<?php echo get_site_url().'/benefits-of-licensing-designs'; ?>" target="_blank">Licensing Benefits</a>.
			</p>
			
			<h3 class="aw-headline aw-headline__head-three text-center d-mb-3">WE ARE EXCITED ABOUT WORKING TOGETHER!</h3>
			
		</div><!-- .aw-row -->

	</section><!-- .aw-section -->

</div><!-- .main-content -->


<?php get_footer();
