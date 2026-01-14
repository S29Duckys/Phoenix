<?php

namespace PHOENIX\Models;

class Catalogue {
    private $id_travel;
    private $name;
    private $description;
    private $price;
    private $image;
    private $id_category;

    public function getId() { return $this->id_travel; }
    public function getTravelName() { return $this->name; }
    public function getTravelDescription() { return $this->description; }
    public function getTravelPrice() { return $this->price; }
    public function getTravelImage() { return $this->image; }
    public function getCategory() { return $this->id_category; }
}