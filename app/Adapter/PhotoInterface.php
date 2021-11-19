<?php

    namespace App\Adapter;

    interface PhotoInterface
    {
        public function getuserToken($userId);
        public function postPhoto($message, $photo);
    }