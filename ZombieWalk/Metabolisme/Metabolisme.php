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
 * Date: 31/10/2017 20:51
 */

namespace ZombieWalk\Metabolisme;

use ZombieWalk\Aliment\AlimentIntf;

class Metabolisme
{
    const AMPUTATION = 1;
    const GREFFE = 2;

    public function run(AlimentIntf $aliment)
    {
        $alias = $aliment->getAlias();

        switch ($alias) {
            case 'piz' :
                return self::GREFFE;

            default:
                return self::AMPUTATION;
        }
    }
}
