<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Tests_Loader_ArrayTest extends PHPUnit_Framework_TestCase
{
<<<<<<< HEAD
    /**
     * @group legacy
     */
=======
>>>>>>> master
    public function testGetSource()
    {
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));

        $this->assertEquals('bar', $loader->getSource('foo'));
    }

    /**
<<<<<<< HEAD
     * @group legacy
=======
>>>>>>> master
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());

        $loader->getSource('foo');
    }

<<<<<<< HEAD
    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());

        $loader->getSourceContext('foo');
    }

=======
>>>>>>> master
    public function testGetCacheKey()
    {
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));

        $this->assertEquals('bar', $loader->getCacheKey('foo'));
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());

        $loader->getCacheKey('foo');
    }

    public function testSetTemplate()
    {
        $loader = new Twig_Loader_Array(array());
        $loader->setTemplate('foo', 'bar');

<<<<<<< HEAD
        $this->assertEquals('bar', $loader->getSourceContext('foo')->getCode());
=======
        $this->assertEquals('bar', $loader->getSource('foo'));
>>>>>>> master
    }

    public function testIsFresh()
    {
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));
        $this->assertTrue($loader->isFresh('foo', time()));
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testIsFreshWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());

        $loader->isFresh('foo', time());
    }

    public function testTemplateReference()
    {
        $name = new Twig_Test_Loader_TemplateReference('foo');
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));

        $loader->getCacheKey($name);
<<<<<<< HEAD
        $loader->getSourceContext($name);
=======
        $loader->getSource($name);
>>>>>>> master
        $loader->isFresh($name, time());
        $loader->setTemplate($name, 'foobar');
    }
}

class Twig_Test_Loader_TemplateReference
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
