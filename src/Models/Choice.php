<?php
namespace PHOENIX\Models;

/** Class User **/
class User {

    private $travel_name;
    private $travel_description;
    private $travel_price;
    private $travel_image;
    

    public function getTravelName() {
        return $this->travel_name;
    }

    public function getTravelDescription() {
        return $this->travel_description;
    }

    public function getTravelPrice() {
        return $this->travel_price;
    }

    public function getTravelImage() {
        return $this->travel_image;
    }
}
