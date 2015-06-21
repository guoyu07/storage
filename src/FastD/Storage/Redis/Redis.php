<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/13
 * Time: 上午11:58
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace FastD\Storage\Redis;

use FastD\Storage\StorageInterface;

/**
 * Class Redis
 *
 * @package FastD\Storage\Redis
 */
class Redis extends \Redis implements StorageInterface
{
    /**
     * @param array $config
     */
    public function __construct(array $config = array())
    {
        $this->connect(
            isset($config['host']) ? $config['host'] : '127.0.0.1',
            isset($config['port']) ? $config['port'] : 6379,
            isset($config['timeout']) ? $config['timeout'] : 5
        );
    }
}