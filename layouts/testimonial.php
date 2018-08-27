<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Testimonial slider -->
		<div class="col-md-10 col-md-offset-1">
			<div id="testimonial-slider" class="owl-carousel owl-theme">

				<!-- testimonial -->
				<?php
					include_once './modules/TestimonialHelper.php';

					class RenderTestimonial extends TestimonialHelper
					{
						public function testimonialDatas()
						{
							return( parent::allTestimonialData() );
						}
					}

					$testimonial = new RenderTestimonial();
					$testimonialData = $testimonial->testimonialDatas();
					foreach ($testimonialData as $key => $value) {
						echo "<div class='testimonial'>";
						echo "<div class='testimonial-meta'>";
						echo "<img class='img-responsive' src='./img/".$testimonialData[$key]->profile."' alt='' />";
						echo "<h3 class='white-text'>".$testimonialData[$key]->name."</h3>";
						echo "<span>".$testimonialData[$key]->position."</span>";
						echo "</div>";
						echo "<p class='white-text'>".$testimonialData[$key]->description."</p>";
						echo "</div>";
					}
				?>
				<!-- /testimonial -->

			</div>
		</div>
		<!-- /Testimonial slider -->

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->
