<?php
/**
 * H&O Module Ho_OfflineMaintenance
 * Fork of the ArsOnIt_OfflineMaintenance module:
 * http://www.magentocommerce.com/magento-connect/maintenance-page-artson-it.html
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Ho
 * @package     Ho_OfflineMaintenance
 * @copyright   Copyright (c) 2014 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 */
/**
 * @category   Ho
 * @package    Ho_OfflineMaintenance
 * @author     H&O Developers <info@h-o.nl>
 */
?>
<?php
class  Ho_OfflineMaintenance_Block_Adminhtml_System_Config_Ips
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    /**
     * Prepare to render
     */
    protected function _prepareToRender()
    {
        $this->addColumn('ips', array(
            'label' => $this->__('IP\'s'),
            'style' => 'width:100px',
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = $this->__('Add new IP');
    }
}
