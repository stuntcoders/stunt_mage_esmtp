<?php

class Stuntcoders_Esmtp_Model_System_Config_Smtp_Auth
{
    public function toOptionArray()
    {
        return array(
            '' => Mage::helper('stuntcoders_esmtp')->__('None'),
            'login' => Mage::helper('stuntcoders_esmtp')->__('Login'),
            'plain' => Mage::helper('stuntcoders_esmtp')->__('Plain'),
            'crammd5' => Mage::helper('stuntcoders_esmtp')->__('CRAM-MD5'),
        );
    }
}
