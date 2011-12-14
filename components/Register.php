<?php

namespace phpml\components;

use phpml\lib\parser\Symbols;

class Register extends Component
{
    protected $allowChildren = false;
    
    public function registerNS()
    {
        Symbols::addNamespace($this->properties['prefix'], $this->properties['ns']);
    }

    public function getProperties()
    {
        return array(
            'ns' => null,
            'prefix' => null
        );
    }

    public function assemble()
    {

    }
}
