<?php

namespace phpml\components;

class Label extends Component
{
	    
    public function __toString()
    {
        return $this->assemble();
    }

    public function getProperties()
    {
    	return array(
			'value' => null,
			'for'	=> null,
			'class' => null
    	);
    }

    public function assemble()
    {
    	$element_value = $this->properties['value'];
    	unset($this->properties['value']);

    	$element = "<label";
    	foreach ($this->properties as $key => $value ) {
    		if (!is_null($value) && !empty($value)) {
    			$element .= " {$key}={$value} ";
    		}
    	}

    	$element .=  ">{$element_value}</label>";
    	return $element;
    }
}