<?php
class Webgriffe_OpenGraph_Block_Opengraph extends Mage_Core_Block_Template
{
    const WEBGRIFFE_OPENGRAPH_GENERAL_APPLICATION_CONFIG_PATH = 'webgriffe_opengraph/general/application_id';
    const WEBGRIFFE_OPENGRAPH_GENERAL_ADMIN_CONFIG_PATH = 'webgriffe_opengraph/general/admin_id';

    /**
     * @var Webgriffe_OpenGraph_Helper_Data
     */
    private $helper;

    public function __construct()
    {
        parent::__construct();
        $this->helper = Mage::helper('webgriffe_opengraph');
    }

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

    /**
     * @param Mage_Catalog_Model_Product $product
     * @return string
     */
    public function getProductDescription(Mage_Catalog_Model_Product $product)
    {
        $descr = $product->getShortDescription();
        if (empty($descr) || $descr === '&nbsp;' || $descr === ' ') {
            $descr = $product->getDescription();
        }
        return $this->helper->sanitizeString($descr);
    }

    /**
     * @return Webgriffe_OpenGraph_Helper_Data
     */
    public function getOpenGraphHelper()
    {
        return $this->helper;
    }
}