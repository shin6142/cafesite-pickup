<?php
require_once('menu.php');

class Food extends Menu {
    private $allegy;

    public function __construct($name, $price, $image,$detail,$allegy) {
        parent::__construct($name, $price, $image,$detail);
        $this->allegy = $allegy;
      }

    public function getAllegy() {
        return $this->allegy;
    }

    public function setAllegy($allegy) {
      $this->allegy = $allegy;
    }
}
?>