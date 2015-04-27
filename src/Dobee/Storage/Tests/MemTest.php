<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/15
 * Time: 下午4:50
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Dobee\Storage\Tests;

use Dobee\Storage\Memcache\Memcache;

class MemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Memcache
     */
    private $mem;

    public function setUp()
    {
        $this->mem = new Memcache();
    }

    public function testMemSet()
    {
        $this->mem->set('name', 'janhuang');
    }

    public function testMemGet()
    {
        $this->assertEquals('janhuang', $this->mem->get('name'));
    }
}