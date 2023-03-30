<?php

    //polymorphisme par heritage

    class Car {
        private string $brand;
        private string $model;
        private string $fuel;
        private int $speed;
        private bool $auto;

        public function __construct($brand, $model, $fuel, $speed, $auto) {
            $this->brand = $brand;
            $this->model = $model;
            $this->fuel = $fuel;
            $this->speed = $speed;
            $this->auto = $auto;
        }

        public function getBrand() {
            return $this->brand;
        }

        public function getModel() {
            return $this->model;
        }

        public function getFuel() {
            return $this->fuel;
        }

        public function getSpeed() {
            return $this->speed;
        }

        public function getAuto() {
            return $this->auto;
        }
    }

?>