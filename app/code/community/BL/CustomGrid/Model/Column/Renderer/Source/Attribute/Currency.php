<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   BL
 * @package    BL_CustomGrid
 * @copyright  Copyright (c) 2015 Benoît Leulliette <benoit.leulliette@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class BL_CustomGrid_Model_Column_Renderer_Source_Attribute_Currency extends
    BL_CustomGrid_Model_Column_Renderer_Source_Currency_Abstract
{
    protected function _getUseBaseCurrencyValue()
    {
        return BL_CustomGrid_Model_Column_Renderer_Attribute_Price::CURRENCY_TYPE_BASE;
    }
    
    protected function _getUseColumnCurrencyValue()
    {
        return BL_CustomGrid_Model_Column_Renderer_Attribute_Price::CURRENCY_TYPE_COLUMN;
    }
}