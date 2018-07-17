<?php

class Martinsl_Address_Model_Attribute_Source_Addresstype extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions($withEmpty = true)
    {
        if (!$this->_options) {
            $options = array();
            $options[] = array(
                'value' => '0',
                'label' => 'Residential',
            );
            $options[] = array(
                'value' => '1',
                'label' => 'Business',
            );
            $this->_options = $options;
        }
        $options = $this->_options;
        if ($withEmpty) {
            array_unshift($options, array(
                'value' => '',
                'label' => '-- Please Select --',
            ));
        }
        return $options;
    }

    public function getOptionText($value)
    {
        return $this->getAllOptions();
    }
}