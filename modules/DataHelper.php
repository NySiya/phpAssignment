<?php
  class DataHelper
  {
    private $jsonData;

    public function __construct()
    {
      $this->jsonData = file_get_contents('data/about.json', FILE_USE_INCLUDE_PATH);
    }

    public function allData()
    {
      $this->jsonData = json_decode($this->jsonData);
      return($this->jsonData);
    }
  }

?>
