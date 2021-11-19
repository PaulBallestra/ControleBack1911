<?php

use App\Adapter\Instagram;
use App\Adapter\InstagramAdapter;
use App\Adapter\Twitter;
use App\Adapter\TwitterAdapter;
use App\Factory\Classes\CarFactory;
    use App\Singleton\DB;
    use App\Builder\KebabBuilder;
    use App\Facade\MacbookPro;
    use App\Facade\MacbookProFacade;

    require __DIR__."/../vendor/autoload.php";

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();


    //FACTORY
    print_r("FACTORY : <br>" );

    $rs6 = CarFactory::make("Audi", 3, "black");
    echo $rs6->getBrand();
    echo $rs6->getModel();
    echo '<br>';


    $modelS = CarFactory::make("Tesla", 5, "black");
    echo $modelS->getBrand();
    echo $modelS->getModel();
    echo '<br>';

    try {
        $meganeRS = CarFactory::make("Renault", 5, "orange");
    } catch (\Exception $e) {
        echo $e->getMessage();
    }



    //SINGLETON
    print_r("<br> SINGLETON : <br>" );


    $db = DB::getInstance();
    $db2 = DB::getInstance();

    $check = $db === $db2;
    print_r($check); //true


    $users = $db->raw()->query("SELECT * FROM users");
    print_r($users);
    echo '<br>';

    //BUILDER
    print_r("<br> BUILDER : <br>" );


    $kebab = (new KebabBuilder)->addTomato()
        ->addSalad()
        ->addOnion();

    print_r($kebab);
    echo '<br>';


    //FACADE
    print_r("<br> FACADE : <br>" );

    $macbookpro = new MacbookProFacade(new MacbookPro);
    $macbookpro->turnOn();


    //ADAPTOR
    print_r("<br><br> ADAPTER : <br>");
    $photoTwitter = new TwitterAdapter(new Twitter);
    echo $twitterUserToken = $photoTwitter->getuserToken(1);
    $photoTwitter->postPhoto("test", "http://test.com/image.jpg");

    echo '<br>';

    $photoInstagram = new InstagramAdapter(new Instagram);
    echo $instagramUserToken = $photoInstagram->getuserToken(1);
    $photoInstagram->postPhoto("test", "http://test.com/image.jpg");


    //DECORATOR
    print_r("<br><br> DECORATOR : <br>" );

    $booking = new SingleRoom();
    echo $booking->getCost(); // 30
    echo $booking->getDescription(); // Single room

    $booking = new DoubleRoom($booking);
    echo $booking->getCost(); // 50
    echo $booking->getDescription(); // Single room, double room update

    $booking = new PrivateBathroom($booking);
    echo $booking->getCost(); // 70
    echo $booking->getDescription(); // Single room, double room update, private bathroom

    $booking = new Kitchen($booking);
    echo $booking->getCost(); // 80
    echo $booking->getDescription(); // Single room, double room update, private bathroom, kitchen
    $booking = new Parking($booking);
    echo $booking->getCost(); // 85
    echo $booking->getDescription(); // Single room, double room update, private bathroom, kitchen, parking

