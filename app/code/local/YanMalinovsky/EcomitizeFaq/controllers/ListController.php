<?php
/**
 * FAQ List Controller
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_ListController
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_ListController extends Mage_Core_Controller_Front_Action
{
    /**
     * Index Action
     */
    public function indexAction(){
        echo $this->getLayout()->createBlock('yanmalinovsky_ecomitizefaq/faq')->toHtml();
    }
    
    
}
