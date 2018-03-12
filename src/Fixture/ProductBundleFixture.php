<?php
declare(strict_types=1);

/*
 * Created by solutionDrive GmbH
 *
 * @copyright 2018 solutionDrive GmbH
 */

namespace solutionDrive\SyliusProductBundlesPlugin\Fixture;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class ProductBundleFixture
{
    public function getName(): string
    {
        return 'product_bundle';
    }

    protected function configureResourceNode(ArrayNodeDefinition $resourceNode): void
    {
        $resourceNode
            ->children()
                ->scalarNode('productCode')->cannotBeEmpty()->end()
                ->arrayNode('slots')->prototype('scalar')->end()->end();
    }
}
