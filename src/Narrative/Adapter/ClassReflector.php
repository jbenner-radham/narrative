<?php

namespace RadHam\Narrative\Adapter;

class ClassReflector extends Abstraction
{
    public function __construct($target)
    {
        $this->handle = new \ReflectionClass($target);
    }
}
