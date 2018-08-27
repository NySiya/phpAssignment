<?php
  class PricingHelper
  {
    private $jsonData;

    public function __construct()
    {
      $this->jsonData = file_get_contents('data/pricing.json', FILE_USE_INCLUDE_PATH);
    }

    public function allPricingData()
    {
      $this->jsonData = json_decode($this->jsonData);
      return($this->jsonData);
    }
  }

?>
