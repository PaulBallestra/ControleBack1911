<?php

    namespace App\Adapter;

    class Instagram
    {
        public function createPhotoFeed($message, $photo)
        {
            return $message . ' ' . $photo;
        }
        public function getOAuthToken($userId)
        {
            return 'Token: ' . $userId;
        }
    }