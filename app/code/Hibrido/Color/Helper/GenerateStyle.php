<?php
/**
 * Copyright © Eduardo Vinicius dos Santos All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Hibrido\Color\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Hibrido\Color\Helper\ConfigSetting;

class GenerateStyle extends AbstractHelper
{
    protected $helperConfigSetting;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        ConfigSetting $helperConfigSetting
    ) {
        $this->helperConfigSetting = $helperConfigSetting; 
        parent::__construct($context);
    }
    public function getConf($data){
        return $this->helperConfigSetting->getGeneralConfig($data);
    }

    public function override_css($color) {
        $style ='.action {
            &.primary {
                background-color: #'.$color.';
                border-color: #'.$color.';
                font-size: 1.5em;
            }
        }'; 
        return $style;
     }

    public function generateStoreCss($color) {
        $content = $this->override_css($color);
        $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "app/design/frontend/Hibrido/luma_child/web/css/source/_extend.less","wb");
        fwrite($fp,$content);
        fclose($fp);
    }
}

