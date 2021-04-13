<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace LaminasTest\Di\TestAsset;

class TypelessDependency
{
    /** @var mixed */
    public $result;

    /** @param mixed $value */
    public function __construct($value)
    {
        $this->result = $value;
    }
}
