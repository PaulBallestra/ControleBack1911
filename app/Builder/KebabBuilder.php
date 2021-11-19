<?php

    namespace App\Builder;

    use App\Builder\Kebab;

    class KebabBuilder
    {

        public function __construct()
        {
            $this->kebab = new Kebab;
        }


        public function addCheese()
        {
            $this->kebab->cheese = true;
            return $this;
        }

        public function addSalad()
        {
            $this->kebab->salad = true;
            return $this;
        }

        public function addTomato()
        {
            $this->kebab->tomato = true;
            return $this;
        }

        public function addOnion()
        {
            $this->kebab->onion = true;
            return $this;
        }

        public function addFrenchFries()
        {
            $this->kebab->frenchFries = true;
            return $this;
        }

    }


