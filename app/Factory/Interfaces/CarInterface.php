<?php

    namespace App\Factory\Interfaces;

    interface CarInterface
    {
        public function getColor(): string;
        public function getHorsepower(): int;
        public function getDoors(): int;
        public function getBrand(): string;
        public function getModel(): string;
    }
