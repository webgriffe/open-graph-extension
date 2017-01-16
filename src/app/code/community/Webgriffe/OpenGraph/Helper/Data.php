<?php

class Webgriffe_OpenGraph_Helper_Data extends Mage_Core_Helper_Abstract
{
    const WEBGRIFFE_OPENGRAPH_PRODUCT_ONLY_BASE_IMAGE_CONFIG_PATH = 'webgriffe_opengraph/product_view/only_base_image';
    
    /**
     * @return bool
     */
    public function useOnlyBaseImageForProduct()
    {
        return Mage::getStoreConfig(self::WEBGRIFFE_OPENGRAPH_PRODUCT_ONLY_BASE_IMAGE_CONFIG_PATH);
    }
}
