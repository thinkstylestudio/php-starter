<?php
/**
 * Base test class for the package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Project
 * @version    1.0.0
 * @author     James Doyle
 * @license    MIT License
 * @copyright  (c) 2017, James Doyle
 * @link       https://ohdoylerules.com
 */

namespace Tests;

use PHPUnit_Framework_TestCase;

class BaseTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function itCanPassATest()
    {
        $this->assertTrue(true);
    }
}
