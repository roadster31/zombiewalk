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
 * Date: 31/10/2017 20:28
 */

namespace Aliment;

class Poivron implements AlimentIntf
{

    public function getTitre()
    {
        return "Poivron";
    }

    public function getAlias()
    {
        return "poi";
    }
}
