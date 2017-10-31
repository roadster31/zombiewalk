<?php
/**
 * Created by PhpStorm.
 * User: loick
 * Date: 31/10/17
 * Time: 21:01
 */

namespace UserInterface;

use Aliment\AlimentFactory;


class UserInterface
{
    private $factory;

    public function __construct()
    {
        $this->factory = new AlimentFactory();
    }

    function processUserInput(string $user) {
        try {
            $aliment = $this->factory->getAliment($user);
        } catch (\Exception $e) {
            echo $e->getMessage();
            echo "Veuillez reessayer";
        }
    }
}