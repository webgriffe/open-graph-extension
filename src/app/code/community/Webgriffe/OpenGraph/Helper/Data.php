<?php

class Webgriffe_OpenGraph_Helper_Data extends Mage_Core_Helper_Abstract
{
    const WEBGRIFFE_OPENGRAPH_PRODUCT_ONLY_BASE_IMAGE_CONFIG_PATH = 'webgriffe_opengraph/product_view/only_base_image';
    const WEBGRIFFE_OPENGRAPH_HOMEPAGE_IMAGE_PATH_CONFIG_PATH = 'webgriffe_opengraph/homepage/image_path';

    /**
     * @return bool
     */
    public function useOnlyBaseImageForProduct()
    {
        return Mage::getStoreConfig(self::WEBGRIFFE_OPENGRAPH_PRODUCT_ONLY_BASE_IMAGE_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getHomepageOgImagePath()
    {
        return Mage::getDesign()->getSkinUrl(
            Mage::getStoreConfig(self::WEBGRIFFE_OPENGRAPH_HOMEPAGE_IMAGE_PATH_CONFIG_PATH)
        );
    }
}
