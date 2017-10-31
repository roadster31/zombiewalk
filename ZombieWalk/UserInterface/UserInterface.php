<?php
/**
 * Created by PhpStorm.
 * User: loick
 * Date: 31/10/17
 * Time: 21:01
 */

namespace ZombieWalk\UserInterface;

use ZombieWalk\Aliment\AlimentFactory;
use ZombieWalk\Zombie\Zombie;

class UserInterface
{
    private $factory;
    private $zombie;

    public function __construct()
    {
        $this->factory = new AlimentFactory();
        $this->zombie = new Zombie();
    }

    function processUserInput($userinput) {
        switch ($userinput) {
            case "q":
                echo "Au revoir :)\n";
                die();
            case "h";
                echo "Commandes disponibles : \n";
                foreach ($this->factory->enumerate() as $command => $title) {
                    echo " - " . $command . " : $title \n";
                }
                break;
            default:
                $this->manageTour($userinput);
        }
    }

    function manageTour($userinput) {
        try {
            $aliment = $this->factory->getAliment($userinput);
            $miam = $this->zombie->miam($aliment)->etat();
            echo $miam;

        } catch (\Exception $e) {
            echo $e->getMessage() . ". Veuillez reessayer\n";
        }
    }
}
