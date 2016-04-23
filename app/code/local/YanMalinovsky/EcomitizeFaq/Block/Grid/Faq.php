<?php
/**
 * Main FAQ Grid Block
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_Block_Grid_Faq
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_Block_Grid_Faq extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_controller = 'grid_faq';
        $this->_blockGroup = 'yanmalinovsky_ecomitizefaq';

        $this->_headerText = $this->__('Ecomitize FAQ');
        parent::__construct();
    }
}
