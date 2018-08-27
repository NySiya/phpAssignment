<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">Welcome to Website</h2>
		</div>
		<!-- /Section header -->
		<!-- about -->
		<?php
			include_once './modules/DataHelper.php';

			class RenderAbout extends DataHelper
			{
				public function aboutDatas()
				{
					return( parent::allData() );
				}
			}
			$about = new RenderAbout();
			$aboutData = $about->aboutDatas();
			foreach ($aboutData as $key => $value) {
				echo "<div class='col-md-4'>";
				echo "<div class='about'>";
				echo "<i class='".$aboutData[$key]->icon."'></i>";
				echo "<h3>".$aboutData[$key]->title."</h3>";
				echo "<p>".$aboutData[$key]->description."</p>";
				echo "<a href='#'>Read more</a>";
				echo "</div>";
				echo "</div>";
			}
		?>
		<!-- /about -->
	</div>
	<!-- /Row -->

</div>
<!-- /Container -->
