<?php

class Stuntcoders_Esmtp_Model_Email_Template extends Mage_Core_Model_Email_Template
{
    public function getMail()
    {
        if (is_null($this->_mail)) {
            if (Mage::helper('stuntcoders_esmtp')->isEnabled()) {
                Zend_Mail::setDefaultTransport(new Zend_Mail_Transport_Smtp(
                    Mage::helper('stuntcoders_esmtp')->getHost(),
                    Mage::helper('stuntcoders_esmtp')->getSmtpConfig()
                ));
            }

            $this->_mail = new Zend_Mail('utf-8');
        }

        return $this->_mail;
    }
}
