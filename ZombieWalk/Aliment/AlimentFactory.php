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
 * Date: 31/10/2017 20:34
 */

namespace ZombieWalk\Aliment;

class AlimentFactory
{
    private $registry = [];

    /**
     * AlimentFactory constructor.
     */
    public function __construct()
    {
        $this->registry = [
            new Banane(),
            new Pizza(),
            new Poivron(),
            new Ail()
        ];
    }

    /**
     * @param string $alias
     * @return AlimentIntf
     * @throws \Exception
     */
    public function getAliment($alias)
    {
        $alias = strtolower($alias);

        /** @var AlimentIntf $item */
        foreach ($this->registry as $item) {
            if ($alias === $item->getAlias()) {
                return $item;
            }
        }

        throw new \Exception("Aucun aliment 'alias' trouvé");
    }

    /**
     * @return array
     */
    public function enumerate()
    {
        $enumeration = [];

        /** @var AlimentIntf $item */
        foreach ($this->registry as $item) {
            $enumeration[$item->getAlias()] = $item->getTitre();

        }

        return $enumeration;
    }
}
