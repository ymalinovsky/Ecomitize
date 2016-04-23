<?php
/**
 * FAQ Template Block
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Block_Widget_Template
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Block_Widget_Template extends Mage_Core_Block_Template
{
    /**
     * Constructor
     */
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('yanmalinovsky_ecomitizefaq/widget.phtml');
    }

    /**
     * Get Collection Row By Id
     * 
     * @param int $id
     * @return YanMalinovsky_EcomitizeFaq_Model_Resource_Faq_Collection
     */
    public function getWidgetCollectionById($id){
        return Mage::getResourceModel('yanmalinovsky_ecomitizefaq/faq_collection')
            ->addFieldToFilter('id', array('eq' => $id))->getFirstItem();
    }
}
