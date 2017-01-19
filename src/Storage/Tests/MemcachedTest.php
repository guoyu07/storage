<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/4/27
 * Time: 下午7:30
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace FastD\Storage\Tests;

use FastD\Storage\Memcached\Memcached;

class MemcachedTest extends \PHPUnit_Framework_TestCase
{
    public function testMemcachedInstance()
    {
        $memcached = Memcached::connect([
            'host' => '11.11.11.44',
            'port' => '11211'
        ]);

        $memcached->add('name', 'jan');

        $this->assertEquals('jan', $memcached->get('name'));
    }

    public function testCache()
    {
        $memcached = new Memcached([
            'host' => '11.11.11.44',
            'port' => '11211'
        ]);

        $memcached->set('age', '18');

        $this->assertEquals(18, $memcached->get('age'));
    }
}