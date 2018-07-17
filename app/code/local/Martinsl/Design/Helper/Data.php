<?php

class Martinsl_Design_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return bool
     */
    public function sliderCmsBlockId()
    {
        return Mage::getStoreConfig('design/settings/cms_block_id');
    }
}
