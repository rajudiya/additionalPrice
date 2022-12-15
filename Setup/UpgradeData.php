<?php

namespace o2scrip\additionalprice\Setup;

use Magento\Framework\Setup;
use Magento\Eav\Setup\EavSetupFactory;

class UpgradeData implements Setup\UpgradeDataInterface 
{
    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $_eavSetupFactory;
    /**
     * @param EavSetupFactory  $eavSetupFactory
     */
    public function __construct(
        EavSetupFactory $eavSetupFactory
    ) {
        $this->_eavSetupFactory = $eavSetupFactory;
    }

    public function upgrade(
        Setup\ModuleDataSetupInterface $setup,
        Setup\ModuleContextInterface $moduleContext
    ) {
        $setup->startSetup();
        $eavSetup = $this->_eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->updateAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'your_attribute_code',
            'is_global',
            \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL
        );
        $setup->endSetup();
    }
}