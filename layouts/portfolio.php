<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">Featured Works</h2>
		</div>
		<!-- /Section header -->

		<!-- Work -->
		<?php
			include_once './modules/PortfolioHelper.php';

			class RenderPortfolio extends PortfolioHelper
			{
				public function aboutPortfolios()
				{
					return( parent::allPortfolioData() );
				}
			}

			$portfolio = new RenderPortfolio();
			$portfolioData = $portfolio->aboutPortfolios();
			foreach ($portfolioData as $key => $value) {
				echo "<div class='col-md-4 col-xs-6 work'>";
				echo "<img class='img-responsive' src='./img/".$portfolioData[$key]->img."' alt='' />";
				echo "<div class='overlay'></div>";
				echo "<div class='work-content'>";
				echo "<span>Category</span>";
				echo "<h3>".$portfolioData[$key]->categoryName."</h3>";
				echo "<div class='work-link'>";
				echo "<a href='#'><i class='fa fa-external-link'></i></a>";
				echo "<a class='lightbox' href='./img/".$portfolioData[$key]->img."'><i class='fa fa-search'></i></a>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}
		?>
		<!-- /Work -->

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->
