<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage Paymentmethod
 * @author Max Milbers
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: edit_edit.php 3420 2011-06-04 12:37:20Z Electrocity $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
?>



<div class="col50">
    <fieldset class="adminform">
        <legend><?php echo JText::_('COM_VIRTUEMART_SHIPPINGCARRIER'); ?></legend>
        <table class="admintable">
            <tr>
                <td width="110" class="key">
                    <label for="title">
<?php echo JText::_('COM_VIRTUEMART_CARRIER_FORM_NAME'); ?>
                    </label>
                </td>
                <td>
                    <input class="inputbox" type="text" name="shipping_carrier_name" id="shipping_carrier_name" size="50" value="<?php echo $this->carrier->shipping_carrier_name; ?>" />
                </td>
            </tr>
            <tr>
                <td width="110" class="key">
                    <label for="title">
<?php echo JText::_('COM_VIRTUEMART_LIST_ORDER'); ?>
                    </label>
                </td>
                <td>
                    <input class="inputbox" type="text" name="ordering" id="ordering" size="3" value="<?php echo $this->carrier->ordering; ?>" />
                </td>
            </tr>
            <tr>
                <td width="110" class="key">
                    <label for="title">
                       <span class="hasTip" title="<?php echo JText::_('COM_VIRTUEMART_SHIPPING_CARRIER_CLASS_NAME_TIP') ?>"><?php echo JText::_('COM_VIRTUEMART_CARRIER_CLASS_NAME'); ?></span>
                    </label>
                </td>
                <td>
<?php echo $this->pluginList; ?>
                </td>
            </tr>
            <tr>
                <td width="110" class="key">
                    <label for="title">
<?php echo JText::_('COM_VIRTUEMART_VENDOR'); ?>
                    </label>
                </td>
                <td>
<?php echo $this->vendorList; ?>
                </td>
            </tr>
            <tr>
                <td class="key"><?php echo JText::_('COM_VIRTUEMART_PUBLISHED') ?></td>
                <td><fieldset class="radio"><?php echo JHTML::_('select.booleanlist', 'published', 'class="inputbox"', $this->carrier->published); ?></fieldset></td>
            </tr>
        </table>
    </fieldset>
</div>

