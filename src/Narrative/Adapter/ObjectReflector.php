<?php

namespace RadHam\Narrative\Adapter;

class ObjectReflector extends Abstraction
{
    public function __construct(object $target)
    {
        $this->handle = new \ReflectionObject($target);
    }
}
