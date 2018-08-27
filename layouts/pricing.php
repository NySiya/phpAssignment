<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">Pricing Table</h2>
		</div>
		<!-- /Section header -->

		<!-- pricing -->
		<?php
			include_once './modules/PricingHelper.php';

			class RenderPricing extends PricingHelper
			{
				public function pricingData()
				{
					return( parent::allPricingData() );
				}
			}

			$pricing = new RenderPricing();
			$pricingData = $pricing->pricingData();
			foreach ($pricingData as $key => $value) {
				echo "<div class='col-sm-4'>";
				echo "<div class='pricing'>";
				echo "<div class='pricing-head'>";
				echo "<span class='price-title'>".$pricingData[$key]->planType."</span>";
				echo "<div class='price'>";
				echo "<h3>".$pricingData[$key]->duration."</h3>";
				echo "</div>";
				echo "</div>";
				echo "<ul class='price-content'>";
				echo "<li><p>".$pricingData[$key]->diskSize."</p></li>";
				echo "<li><p>".$pricingData[$key]->emailSize."</p></li>";
				echo "<li><p>".$pricingData[$key]->support."</p></li>";
				echo "</ul>";
				echo "
					<div class='price-btn'>
						<button class='outline-btn'>Purchase now</button>
					</div>";
				echo "</div>";
				echo "</div>";
			}
		?>
		<!-- /pricing -->

	</div>
	<!-- Row -->

</div>
<!-- /Container -->
