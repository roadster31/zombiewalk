<?php
/*************************************************************************************/
/*      Copyright (c) Franck Allimant, CQFDev                                        */
/*      email : thelia@cqfdev.fr                                                     */
/*      web : http://www.cqfdev.fr                                                   */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE      */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

/**
 * Created by Franck Allimant, CQFDev <franck@cqfdev.fr>
 * Date: 31/10/2017 21:32
 */

namespace ZombieWalk\Zombie;

use ZombieWalk\Aliment\AlimentIntf;
use ZombieWalk\Metabolisme\Metabolisme;

class Zombie implements ZombieIntf
{
    /** @var  Metabolisme */
    protected $metabolisme;

    public function __construct()
    {
        $this->metabolisme = new Metabolisme();
    }

    public function miam(AlimentIntf $aliment)
    {
         $action = $this->metabolisme->run($aliment);

         if ($action == Metabolisme::AMPUTATION) {

         } elseif ($action == Metabolisme::GREFFE) {

         } else {
             throw new \Exception("WTF ?");
         }
    }
}
