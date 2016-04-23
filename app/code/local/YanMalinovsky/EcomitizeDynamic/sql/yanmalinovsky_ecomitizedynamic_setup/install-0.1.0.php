<?php
/**
 * EcomitizeDynamic related module
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeDynamic
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
$catalogInstaller = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$catalogInstaller->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'custom_attribute', array(
    'group'                      => 'General',
    'type'                       => 'varchar',
    'label'                      => 'Dynamic Values',
    'input'                      => 'select',
    'source'                     => 'yanmalinovsky_ecomitizedynamic/value',
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
));

$installer->endSetup();


