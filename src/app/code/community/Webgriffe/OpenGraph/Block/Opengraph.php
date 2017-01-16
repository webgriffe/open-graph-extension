<?php
class Webgriffe_OpenGraph_Block_Opengraph extends Mage_Core_Block_Template
{
    const WEBGRIFFE_OPENGRAPH_GENERAL_APPLICATION_CONFIG_PATH = 'webgriffe_opengraph/general/application_id';
    const WEBGRIFFE_OPENGRAPH_GENERAL_ADMIN_CONFIG_PATH = 'webgriffe_opengraph/general/admin_id';

    /**
     * @return string
     */
    public function getApplicationId()
    {
        return Mage::getStoreConfig(self::WEBGRIFFE_OPENGRAPH_GENERAL_APPLICATION_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getAdminId()
    {
        return Mage::getStoreConfig(self::WEBGRIFFE_OPENGRAPH_GENERAL_ADMIN_CONFIG_PATH);
    }
}