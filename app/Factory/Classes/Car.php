<?php

    namespace App\Factory\Classes;

    use App\Factory\Interfaces\CarInterface;

    class Car implements CarInterface
    {
        protected $brand;
        protected $color;
        protected $doors;
        protected $horsePower;
        protected $model;

        public function __construct($brand, $doors, $color)
        {

            $this->brand = $brand;
            $this->doors = $doors;
            $this->color = $color;
            $this->horsePower = 500;
            $this->model = 500;

        }

        public function getBrand(): string
        {
            return $this->brand;
        }

        public function getColor(): string
        {
            return $this->color;
        }

        public function getDoors(): int
        {
            return $this->doors;
        }

        public function getHorsepower(): int
        {
            return $this->horsePower;
        }

        public function getModel(): string
        {
            return $this->model;
        }

    }