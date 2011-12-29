<?php

namespace PHPML\Components\Cp;

use PHPML\Components\Component;

class Image extends Component
{
 	protected $allowChildren = false;
 	
    public function __toString()
    {
        return $this->assemble();
    }

    public function getProperties()
    {
    	return array(
			'src' => null,
			'class' => null,
			'alt' => null,
			'title' => null
    	);
    }

    public function assemble()
    {
    	$element = '<img';
    	foreach ($this->properties as $key => $value) {
    		if (!is_null($value) && !empty($value)) {
    			$element .= " {$key}={$value} ";
    		}
    	}
    	$element .= '/>';
    	return $element;
    }
}