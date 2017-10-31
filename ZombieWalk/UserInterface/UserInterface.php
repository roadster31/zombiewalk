<?php
/**
 * Created by PhpStorm.
 * User: loick
 * Date: 31/10/17
 * Time: 21:01
 */

namespace ZombieWalk\UserInterface;

use ZombieWalk\Aliment\AlimentFactory;

class UserInterface
{
    private $factory;

    public function __construct()
    {
        $this->factory = new AlimentFactory();
    }

    function processUserInput($user) {
        try {
            $aliment = $this->factory->getAliment($user);

        } catch (\Exception $e) {
            echo $e->getMessage();
            echo "Veuillez reessayer";
        }
    }
}
