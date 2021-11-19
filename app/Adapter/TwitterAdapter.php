<?php

    namespace App\Adapter;

    class TwitterAdapter implements PhotoInterface
    {
        protected $twitter;

        public function __construct(Twitter $twitter)
        {
            $this->twitter = $twitter;
        }

        public function getuserToken($userId)
        {
            return $this->twitter->oAuthToken($userId);
        }

        public function postPhoto($message, $photo)
        {
            return $this->twitter->statusesUpdate($message, $photo);
        }
    }