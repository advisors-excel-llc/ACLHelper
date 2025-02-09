<?php
/**
 * Created by PhpStorm.
 * User: alex.boyce
 * Date: 9/5/18
 * Time: 6:05 PM
 */

namespace AE\AclHelperBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase as TestCase;

class KernelTestCase extends TestCase
{
    protected function setUp()
    {
        static::bootKernel();
    }

    protected function tearDown()
    {
        static::ensureKernelShutdown();
    }

    protected function get($serviceId)
    {
        return static::$container->get($serviceId);
    }
}
