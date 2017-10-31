<?php
/**
 * Created by PhpStorm.
 * User: loick
 * Date: 31/10/17
 * Time: 20:12
 */

use Aliment\AlimentFactory;

echo "
                               ..... \n           
                               C C  /\n            
                              /<   / \n            
               ___ __________/_#__=o \n            
              /(- /(\_\________   \  \n            
              \ ) \ )_      \o     \ \n            
              /|\ /|\       |'     | \n            
                            |     _| \n            
                            /o   __\ \n            
                           / '     | \n            
                          / /      | \n            
                         /_/\______| \n            
                        (   _(    <  \n            
                         \    \    \ \n            
                          \    \    |\n            
                           \____\____\ \n          
                           ____\_\__\_\ \n          
                         /`   /`     o\  \n        
                         |___ |_______|. \n
";
echo "Bonjour. Je vous présente Jean Jacques.\n";
echo "Vous verrez, il est très sympa.";
echo "Vous pouvez lui donner à manger. Attention, il est allergique aux poivrons, ail et la banane.\n";
echo "Mais il adore la pizza.\n";

const PIZZA = "piz";
const AIL = "ail";
const POIVRON = "poi";
const BANANE = "ban";

if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}

while(1) {
    $userInput = readline("Que voulez vous donner à manger au zombie ?");
    processUserInput($userInput);
}

function processUserInput(String $user) {
    $factory = new AlimentFactory();
    try {
        $aliment = $factory->getAliment($user);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
