<?php
/**
 * Attribute Source Model
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeDynamic
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeDynamic_Model_Value
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeDynamic
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeDynamic_Model_Value extends Mage_Eav_Model_Entity_Attribute_Source_Config
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_configNodePath = 'global/options_container/value';
    }
}
