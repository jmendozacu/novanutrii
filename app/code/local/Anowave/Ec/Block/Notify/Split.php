<?php
/**
 * Anowave Google Tag Manager Enhanced Ecommerce (UA) Tracking
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Anowave license that is
 * available through the world-wide-web at this URL:
 * http://www.anowave.com/license-agreement/
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category 	Anowave
 * @package 	Anowave_Ec
 * @copyright 	Copyright (c) 2018 Anowave (http://www.anowave.com/)
 * @license  	http://www.anowave.com/license-agreement/
 */

class Anowave_Ec_Block_Notify_Split extends Mage_Adminhtml_Block_Template
{
	public function getMessage()
	{
		if ('' !== (string) Mage::getStoreConfig('ec/config/code') && 0 == (int) Mage::getStoreConfig('ec/config/code_split'))
		{
			return true;
		}
		
		return null;
	}
}