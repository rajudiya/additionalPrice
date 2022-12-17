<?php
namespace Company\Module\Model\Config\Source;
class Country extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
    * Get all options
    *
    * @return array
    */
    public function getAllOptions()
    {
        $this->_options = [
                ['label' => __('India'), 'value'=>'india'],
                ['label' => __('Usa'), 'value'=>'usa'],
                ['label' => __('Uk'), 'value'=>'uk']
            ];
    return $this->_options;
    }
}