<?php
  class TeamHelper
  {
    private $jsonData;

    public function __construct()
    {
      $this->jsonData = file_get_contents('data/team.json', FILE_USE_INCLUDE_PATH);
    }

    public function allTeamData()
    {
      $this->jsonData = json_decode($this->jsonData);
      return($this->jsonData);
    }
  }

?>
