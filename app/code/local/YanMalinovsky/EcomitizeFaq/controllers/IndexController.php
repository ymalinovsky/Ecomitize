<?php
/**
 *  FAQ Index Controller
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @copyright   Copyright (c) 2016 Yan Malinovsky
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_EcomitizeFaq_IndexController
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_EcomitizeFaq
 * @author      Yan Malinovsky <yan.malinovsky@gmail.com>
 */

class YanMalinovsky_EcomitizeFaq_IndexController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Index Action
     */
    public function indexAction()
    {
        $this->_title($this->__('Ecomitize FAQ'));

        $this->loadLayout()
            ->_setActiveMenu('cms/page')
            ->_addContent($this->getLayout()->createBlock('yanmalinovsky_ecomitizefaq/grid_faq'))
            ->renderLayout();
    }

    /**
     * New Action
     */
    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * Edit Action
     */
    public function editAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('cms/page')
            ->_addContent($this->getLayout()->createBlock('yanmalinovsky_ecomitizefaq/form_edit'))
            ->renderLayout();
    }

    /**
     * Save Action
     */
    public function saveAction()
    {
        $request = $this->getRequest();
        if ($request->getParams())
        {
            $data = array(
                'question'  => $request->getParam('question'),
                'answer'    => $request->getParam('answer'),
                'is_active' => $request->getParam('is_active')
            );
            $model = Mage::getModel('yanmalinovsky_ecomitizefaq/faq');
            $id = $request->getParam('id');
            if ($id) {
                $model->load($id);
            }
            $model->setData($data);

            try {
                if ($id) {
                    $model->setId($id);
                }
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Example was successfully saved.'));
                $this->_redirect('*/*/');

            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/');
            }
            return;
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('No data found to save'));
        $this->_redirect('*/*/');
    }

    /**
     * Delete Action
     */
    public function deleteAction()
    {
        $request = $this->getRequest();
        $id = $request->getParam('id');
        if ($id) {
            try {
                $model = Mage::getModel('yanmalinovsky_ecomitizefaq/faq');
                $model->setId($id);
                $model->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The example has been deleted.'));
                $this->_redirect('*/*/');
                return;
            }
            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Unable to find the example to delete.'));
        $this->_redirect('*/*/');
    }
}
