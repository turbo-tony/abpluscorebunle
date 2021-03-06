<?php
/**
 * Contains the Id Trait for entity classes
 *
 * @author      Antoine Bousquet <antoine.p.bousquet@gmail.com>
 * @copyright   ABPlus 2015
 * @package     ABPlus
 * @subpackage  CoreBundle
 * @category    EntityTrait
 */

namespace ABPlus\CoreBundle\Entity\Traits;

/**
 * Id Trait for entity classes
 *
 * @author      Antoine Bousquet <antoine.p.bousquet@gmail.com>
 * @package     ABPlus
 * @subpackage  CoreBundle
 * @category    EntityTrait
 */
Trait IdTrait
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $id;

    /**
     * Set id
     *
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
