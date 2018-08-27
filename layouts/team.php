<!-- Container -->
<div class="container">

  <!-- Row -->
  <div class="row">

    <!-- Section header -->
    <div class="section-header text-center">
      <h2 class="title">Our Team</h2>
    </div>
    <!-- /Section header -->

    <!-- team -->
    <?php
			include_once './modules/TeamHelper.php';

			class RenderTeam extends TeamHelper
			{
				public function teamDatas()
				{
					return( parent::allTeamData() );
				}
			}
			$team = new RenderTeam();
			$teamData = $team->teamDatas();
			foreach ($teamData as $key => $value) {
				echo "<div class='col-sm-4'>";
				echo "<div class='team'>";
        echo "<div class='team-img'>";
        echo "<img class='img-responsive' src='./img/".$teamData[$key]->profile."' />";
        echo "<div class='overlay'>";
        echo "<div class='team-social'>";
        echo "<a href='#'><i class='fa fa-facebook'></i></a>";
        echo "<a href='#'><i class='fa fa-google-plus'></i></a>";
        echo "<a href='#'><i class='fa fa-twitter'></i></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='team-content'>";
        echo "<h3>".$teamData[$key]->name."</h3>";
        echo "<span>".$teamData[$key]->role."</span>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}
		?>
    <!-- /team -->

  </div>
  <!-- /Row -->

</div>
<!-- /Container -->
