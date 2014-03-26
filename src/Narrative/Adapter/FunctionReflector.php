<?php

namespace RadHam\Narrative\Adapter;

class FunctionReflector extends Abstraction
{
    public function __construct($target)
    {
        $this->handle = new \ReflectionFunction($target);
    }
}
