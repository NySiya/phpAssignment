<?php
  class TestimonialHelper
  {
    private $jsonData;

    public function __construct()
    {
      $this->jsonData = file_get_contents('data/testimonial.json', FILE_USE_INCLUDE_PATH);
    }

    public function allTestimonialData()
    {
      $this->jsonData = json_decode($this->jsonData);
      return($this->jsonData);
    }
  }

?>
