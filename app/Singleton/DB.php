<?php

    namespace App\Singleton;

    use PDO;

    class DB
    {
        private static $instance;

        public static function getInstance()
        {
            if (!self::$instance) {
                self::$instance = new static;
            }

            return self::$instance;
        }

        public function raw()
        {
            $pdo = new PDO($_ENV['DB_CONNECTION'] . ":host=" . $_ENV['DB_HOST'] . ':' . $_ENV['DB_PORT'] . ";dbname=" . $_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'] , $_ENV['DB_PASSWORD']);
            return $pdo;
        }

    }




