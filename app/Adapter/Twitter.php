<?php

    namespace App\Adapter;

    class Twitter
    {
        public function statusesUpdate($message, $photo)
        {
            return $message . ' ' . $photo;
        }
        public function oAuthToken($userId)
        {
            return 'Token: ' . $userId;
        }
    }