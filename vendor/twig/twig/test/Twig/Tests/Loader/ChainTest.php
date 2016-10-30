<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Tests_Loader_ChainTest extends PHPUnit_Framework_TestCase
{
<<<<<<< HEAD
    /**
     * @group legacy
     */
=======
>>>>>>> master
    public function testGetSource()
    {
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('foo' => 'foobar', 'bar' => 'foo')),
        ));

        $this->assertEquals('bar', $loader->getSource('foo'));
        $this->assertEquals('foo', $loader->getSource('bar'));
    }

<<<<<<< HEAD
    public function testGetSourceContext()
    {
        $path = dirname(__FILE__).'/../Fixtures';
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('errors/index.html' => 'baz')),
            new Twig_Loader_Filesystem(array($path)),
        ));

        $this->assertEquals('foo', $loader->getSourceContext('foo')->getName());
        $this->assertSame('', $loader->getSourceContext('foo')->getPath());

        $this->assertEquals('errors/index.html', $loader->getSourceContext('errors/index.html')->getName());
        $this->assertSame('', $loader->getSourceContext('errors/index.html')->getPath());
        $this->assertEquals('baz', $loader->getSourceContext('errors/index.html')->getCode());

        $this->assertEquals('errors/base.html', $loader->getSourceContext('errors/base.html')->getName());
        $this->assertEquals(realpath($path.'/errors/base.html'), realpath($loader->getSourceContext('errors/base.html')->getPath()));
        $this->assertNotEquals('baz', $loader->getSourceContext('errors/base.html')->getCode());
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());

        $loader->getSourceContext('foo');
    }

    /**
     * @group legacy
     * @expectedException Twig_Error_Loader
     */
=======
    /**
     * @expectedException Twig_Error_Loader
     */
>>>>>>> master
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());

        $loader->getSource('foo');
    }

    public function testGetCacheKey()
    {
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('foo' => 'foobar', 'bar' => 'foo')),
        ));

        $this->assertEquals('bar', $loader->getCacheKey('foo'));
        $this->assertEquals('foo', $loader->getCacheKey('bar'));
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());

        $loader->getCacheKey('foo');
    }

    public function testAddLoader()
    {
        $loader = new Twig_Loader_Chain();
        $loader->addLoader(new Twig_Loader_Array(array('foo' => 'bar')));

<<<<<<< HEAD
        $this->assertEquals('bar', $loader->getSourceContext('foo')->getCode());
=======
        $this->assertEquals('bar', $loader->getSource('foo'));
>>>>>>> master
    }

    public function testExists()
    {
<<<<<<< HEAD
        $loader1 = $this->getMockBuilder('Twig_Loader_Array')->setMethods(array('exists', 'getSourceContext'))->disableOriginalConstructor()->getMock();
        $loader1->expects($this->once())->method('exists')->will($this->returnValue(false));
        $loader1->expects($this->never())->method('getSourceContext');

        // can be removed in 2.0
        $loader2 = $this->getMockBuilder('Twig_ChainTestLoaderInterface')->getMock();
        //$loader2 = $this->getMockBuilder(array('Twig_LoaderInterface', 'Twig_SourceContextLoaderInterface'))->getMock();
        $loader2->expects($this->once())->method('getSourceContext')->will($this->returnValue(new Twig_Source('content', 'index')));
=======
        $loader1 = $this->getMock('Twig_Loader_Array', array('exists', 'getSource'), array(), '', false);
        $loader1->expects($this->once())->method('exists')->will($this->returnValue(false));
        $loader1->expects($this->never())->method('getSource');

        $loader2 = $this->getMock('Twig_LoaderInterface');
        $loader2->expects($this->once())->method('getSource')->will($this->returnValue('content'));
>>>>>>> master

        $loader = new Twig_Loader_Chain();
        $loader->addLoader($loader1);
        $loader->addLoader($loader2);

        $this->assertTrue($loader->exists('foo'));
    }
}
<<<<<<< HEAD

interface Twig_ChainTestLoaderInterface extends Twig_LoaderInterface, Twig_SourceContextLoaderInterface
{
}
=======
>>>>>>> master
