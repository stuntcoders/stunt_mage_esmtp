<?php

class Stuntcoders_Esmtp_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ESMTP_ENABLED = 'stuntcoders_esmtp/general/enabled';
    const XML_PATH_ESMTP_HOST = 'stuntcoders_esmtp/general/host';
    const XML_PATH_ESMTP_PORT = 'stuntcoders_esmtp/general/port';
    const XML_PATH_ESMTP_USERNAME = 'stuntcoders_esmtp/general/username';
    const XML_PATH_ESMTP_PASSWORD = 'stuntcoders_esmtp/general/password';
    const XML_PATH_ESMTP_AUTH = 'stuntcoders_esmtp/general/auth';
    const XML_PATH_ESMTP_ENCRYPTION = 'stuntcoders_esmtp/general/encryption';

    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ESMTP_ENABLED);
    }

    public function getHost()
    {
        return Mage::getStoreConfig(self::XML_PATH_ESMTP_HOST);
    }

    public function getPort()
    {
        return Mage::getStoreConfig(self::XML_PATH_ESMTP_PORT);
    }

    public function getUsername()
    {
        return Mage::getStoreConfig(self::XML_PATH_ESMTP_USERNAME);
    }

    public function getPassword()
    {
        return Mage::getStoreConfig(self::XML_PATH_ESMTP_PASSWORD);
    }

    public function getAuthType()
    {
        return Mage::getStoreConfig(self::XML_PATH_ESMTP_AUTH);
    }

    public function getEncriptionType()
    {
        $encryption = Mage::getStoreConfig(self::XML_PATH_ESMTP_ENCRYPTION);
        return !empty($encryption) ? $encryption : null;
    }

    public function getSmtpConfig()
    {
        $config = array(
            'port' => $this->getPort(),
            'ssl' => $this->getEncriptionType(),
        );

        if ($authType = $this->getAuthType()) {
            $config['auth'] = $authType;
            $config['username'] = $this->getUsername();
            $config['password'] = $this->getPassword();
        }

        return $config;
    }
}
