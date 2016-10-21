<?php
/**
 * Contains the Label Trait for entity classes
 *
 * @author      Antoine Bousquet <antoine.p.bousquet@gmail.com>
 * @copyright   ABPlus 2016
 * @package     ABPlus
 * @subpackage  CoreBundle
 * @category    EntityTrait
 */

namespace ABPlus\CoreBundle\Entity\Traits;

/**
 * Label Trait for entity classes
 *
 * @author      Antoine Bousquet <antoine.p.bousquet@gmail.com>
 * @package     ABPlus
 * @subpackage  CoreBundle
 * @category    EntityTrait
 */
Trait LabelTrait
{
    /**
     * Label
     *
     * @var string
     */
    protected $label;

    /**
     * Set label
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
