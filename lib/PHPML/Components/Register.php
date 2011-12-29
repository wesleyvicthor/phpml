<?php

namespace PHPML\Components;

use PHPML\Parser\Symbols;

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
