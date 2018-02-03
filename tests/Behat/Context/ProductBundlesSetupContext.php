<?php
/**
 * Created by solutionDrive GmbH.
 *
 * @author:    Tobias Lückel <lueckel@solutionDrive.de>
 * @date:      03.02.18
 * @time:      12:14
 * @copyright: 2018 solutionDrive GmbH
 */
declare(strict_types=1);

namespace Tests\SolutionDrive\SyliusProductBundlesPlugin\Behat\Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class ProductBundlesSetupContext implements Context
{

    /**
     * @Given /^the store has a product bundle "([^"]*)"$/
     */
    public function theStoreHasAProductBundle($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^this product bundle contains "([^"]*)"$/
     */
    public function thisProductBundleContains($arg1)
    {
        throw new PendingException();
    }
}
