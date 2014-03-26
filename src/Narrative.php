<?php

/**
 * @see http://php.net/manual/en/book.reflection.php
 */
namespace RadHam;

class Narrative extends Narrative\Abstraction
{
    public function __construct($target)
    {
        if (is_string($target) && strpos($target, ':') !== false) {
            list($vector, $type) = array_map('trim', explode(':', $target));
        }

        //var_dump($vector);
        //var_dump($type);

        /**
         * @todo Need to lock in some checks here...
         */
        $adapter = sprintf(__NAMESPACE__ . '\Narrative\Adapter\%sReflector', ucfirst($type));
        //$instance = (new \ReflectionClass($adapter))->newInstance($vector);
        $this->handle = (new $adapter($vector))->getHandle();
    }

    public function getComments()
    {
        return $this->handle->getDocComment();
    }
}
