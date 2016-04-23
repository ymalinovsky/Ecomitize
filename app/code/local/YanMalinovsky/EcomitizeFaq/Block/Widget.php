<?php
/**
 * Main Widget Block
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Block_Widget
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Block_Widget extends Mage_Core_Block_Abstract 
    implements Mage_Widget_Block_Interface 
{
    /**
     * Create widget html.
     * 
     * @return mixed
     */
    protected function _toHtml() {
        $settings = explode(',', str_replace(' ', '', $this->getFaqSettings()));
        Mage::getBlockSingleton('yanmalinovsky_ecomitizefaq/widget_template')->setWidgetSettings($settings);
        
        return Mage::helper('yanmalinovsky_ecomitizefaq')->getFaqWidgetHtml();
    }
}