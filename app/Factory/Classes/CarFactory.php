<?php

    namespace App\Factory\Classes;


    class CarFactory
    {

        public function make($brand, $doors, $color){
            return new Car($brand, $doors,$color);
        }

    }