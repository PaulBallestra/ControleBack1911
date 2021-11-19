<?php

    namespace App\Facade;

    use App\Facade\MacbookPro;

    class MacbookProFacade
    {

        private MacbookPro $macbookPro;

        public function __construct(MacbookPro $macbookPro)
        {
            $this->macbookPro = $macbookPro;
        }

        public function turnOn()
        {
            $this->macbookPro->turnOnDisplay();
            $this->macbookPro->displayAppleLogo();
            $this->macbookPro->makeStartupSound();
            $this->macbookPro->displayUserLoginScreen();
        }

    }