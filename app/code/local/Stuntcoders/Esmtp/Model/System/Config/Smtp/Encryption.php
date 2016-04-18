<?php

class Stuntcoders_Esmtp_Model_System_Config_Smtp_Encryption
{
    public function toOptionArray()
    {
        return array(
            '' => Mage::helper('stuntcoders_esmtp')->__('None'),
            'ssl' => Mage::helper('stuntcoders_esmtp')->__('SSL'),
            'tls' => Mage::helper('stuntcoders_esmtp')->__('TLS'),
        );
    }
}
