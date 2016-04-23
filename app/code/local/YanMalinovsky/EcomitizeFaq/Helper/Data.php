<?php
/**
 * FAQ Helper
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Helper_Data
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Create widget template
     * 
     * @return mixed
     */
    public function getFaqWidgetHtml(){
        return Mage::getBlockSingleton('yanmalinovsky_ecomitizefaq/widget_template')->toHtml();
    }
}