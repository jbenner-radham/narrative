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

        var_dump($vector);
        var_dump($type);

        switch ($type) {
             case 'class':
                 $this->handle = (new Narrative\Adapter\ClassReflector($vector))->getHandle();
                 break;

             default:
                 # code...
                 break;
        }
        //new Narrative\Adapter\ClassReflector;
        //$this->handle = new \ReflectionFunction($target);
        //$this->handle = null;
    }

    public function getComments()
    {
        return $this->handle->getDocComment();
    }
}
