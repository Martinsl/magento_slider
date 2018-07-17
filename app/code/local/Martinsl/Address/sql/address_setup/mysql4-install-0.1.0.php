<?php

$installer = $this;

$installer->startSetup();

$this->addAttribute('customer_address', 'address_type', array(
    'type'       => 'int',
    'input'      => 'select',
    'label'      => 'Address Type',
    'sort_order' => 1000,
    'required'   => false,
    'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'source'     => 'martinsl_address/attribute_source_addresstype',
    'visible_on_front' => 1
));

Mage::getSingleton('eav/config')
    ->getAttribute('customer_address', 'address_type')
    ->setData('used_in_forms', array('customer_register_address','customer_address_edit','adminhtml_customer_address'))
    ->save();

$installer->endSetup();
