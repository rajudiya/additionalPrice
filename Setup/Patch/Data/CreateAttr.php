<?php
namespace O2script\Additionalprice\Setup\Patch\Data;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Cms\Model\BlockFactory;

/**
 * Class CreateCustomAttr for Create Custom Product Attribute using Data Patch.
 */
class CreateAttr implements DataPatchInterface {

    /**
     * ModuleDataSetupInterface
     *
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * EavSetupFactory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;
    
    /**
     * \Magento\Cms\Model\BlockFactory
     */
    private $blockFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory          $eavSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory,
        BlockFactory $blockFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
        $this->blockFactory = $blockFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply() {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY,'addPrice', [
            'group' => 'General',
            'type' => 'text',
            'backend' => '',
            'frontend' => '',
            'label' => 'addPrice',
            'input' => 'text',
            'class' => '',
            'source' => \Magento\Eav\Model\Entity\Attribute\Source\Boolean::class,
            'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
            'visible' => true,
            'required' => false,
            'user_defined' => false,
            'default' => '1',
            'searchable' => false,
            'filterable' => false,
            'comparable' => false,
            'visible_on_front' => false,
            'used_in_product_listing' => true,
            'unique' => false,
            'apply_to' => ''
        ]
        );

        /** Creates custom block `addPrice` */
        $addPriceBlockData = [
            'title' => 'addPrice',
            'identifier' => 'addPrice',
            'content' => "<h1>Content Comes Here.</h1>",
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
        
        $this->blockFactory->create()->setData($addPriceBlockData)->save();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies() {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases() {
        return [];
    }
}