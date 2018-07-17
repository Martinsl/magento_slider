<?php

class Martinsl_Design_Block_Slider extends Mage_Core_Block_Template
{
    /**
     * Constructor. Set template.
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('martinsl/slider.phtml');
    }

    /**
     * Checks if the slider is enabled on the admin
     *
     * @return string
     */
    public function cmsBlockId()
    {
        return Mage::helper('martinsl_design')->sliderCmsBlockId();
    }
}
