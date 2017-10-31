<?php
/**
 * Created by PhpStorm.
 * User: loick
 * Date: 31/10/17
 * Time: 20:12
 */

include "vendor/autoload.php";

use UserInterface\UserInterface;


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

$userInterface = new UserInterface();

while(1) {
    $userInput = readline("Que voulez vous donner à manger au zombie ?\n");
    $userInterface->processUserInput($userInput);
}