<?php

    namespace App\Adapter;

    class InstagramAdapter implements PhotoInterface
    {
        private $instagram;

        public function __construct(Instagram $instagram)
        {
            $this->instagram = $instagram;
        }

        public function getuserToken($userId)
        {
            return $this->instagram->getOAuthToken($userId);
        }

        public function postPhoto($message, $photo)
        {
            return $this->instagram->createPhotoFeed($message, $photo);
        }
    }