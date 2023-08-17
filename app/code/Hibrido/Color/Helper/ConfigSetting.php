<?php
/**
 * Copyright © Eduardo Vinicius dos Santos All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hibrido\Color\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class ConfigSetting extends AbstractHelper
{
    const XML_PATH_THEMESETTING = 'themesetting/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_THEMESETTING .'general/'. $code, $storeId);
    }
}

