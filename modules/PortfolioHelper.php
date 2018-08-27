<?php
  class PortfolioHelper
  {
    private $jsonData;

    public function __construct()
    {
      $this->jsonData = file_get_contents('data/portfolio.json', FILE_USE_INCLUDE_PATH);
    }

    public function allPortfolioData()
    {
      $this->jsonData = json_decode($this->jsonData);
      return($this->jsonData);
    }
  }

?>
