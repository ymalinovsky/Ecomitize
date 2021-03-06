<?php
/**
 * Resource model collection
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Model_Resource_Faq_Collection
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Model_Resource_Faq_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init('yanmalinovsky_ecomitizefaq/faq');
    }
}
