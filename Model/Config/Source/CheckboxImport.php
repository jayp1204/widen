<?php

namespace DamConsultants\Widen\Model\Config\Source;

/**
 * Used in creating options for getting product type value
 *
 */
class CheckboxImport
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'checkbox', 'label'=>__('')]];
    }
}
