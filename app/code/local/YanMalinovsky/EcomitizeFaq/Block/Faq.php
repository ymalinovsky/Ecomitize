<?php
/**
 * Main FAQ Block
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Block_Faq
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Block_Faq extends Mage_Core_Block_Template
{
    /**
     * Constructor
     */
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('yanmalinovsky_ecomitizefaq/list.phtml');
    }

    /**
     * Get Full Collection
     * 
     * @return YanMalinovsky_EcomitizeFaq_Model_Resource_Faq_Collection
     */
    public function getFullCollection(){
        return Mage::getResourceModel('yanmalinovsky_ecomitizefaq/faq_collection');
    }

    /**
     * Get Active Collection Rows
     * 
     * @return YanMalinovsky_EcomitizeFaq_Model_Resource_Faq_Collection
     */
    public function getActiveFaq(){
        return Mage::getResourceModel('yanmalinovsky_ecomitizefaq/faq_collection')
            ->addFieldToFilter('is_active', array('eq' => true));
    }
}
