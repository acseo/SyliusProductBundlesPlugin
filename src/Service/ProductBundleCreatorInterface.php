<?php

declare(strict_types=1);

namespace solutionDrive\SyliusProductBundlesPlugin\Service;

use solutionDrive\SyliusProductBundlesPlugin\Entity\ProductBundleInterface;
use solutionDrive\SyliusProductBundlesPlugin\Service\Options\ProductBundleSlotOptionsInterface;
use Sylius\Component\Core\Model\ProductInterface;

/**
 * Created by solutionDrive GmbH
 *
 * @copyright 2018 solutionDrive GmbH
 */
interface ProductBundleCreatorInterface
{
    public function createProductBundle(ProductInterface $productBundleProduct): ProductBundleCreator;

    public function getProductBundle(): ProductBundleInterface;

    /**
     * @param string $slotName
     * @param ProductBundleSlotOptionsInterface $options
     * @param ProductInterface[] $products
     *
     * @return ProductBundleCreator
     */
    public function addSlot(
        string $slotName,
        ProductBundleSlotOptionsInterface $options = null,
        array $products = []
    ): ProductBundleCreator;
}