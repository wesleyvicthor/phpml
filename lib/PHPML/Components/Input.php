<?php

namespace PHPML\Components;

use PHPML\Components\Component;

class Input extends Component
{
	protected $allowChildren = false;

	public function __toString()
	{
		return $this->assemble();
	}

	public function getProperties()
	{
		return array(
			'type' => null,
			'name' => null,
			'value' => null,
			'disabled' => null,
			'readonly' => null,
			'size' => null,
			'maxlength' => null,
			'id' => null
		);
	}

	public function assemble()
	{
		$element = '<input';
		foreach ($this->properties as $key => $value) {
			if (!is_null($value) && !empty($value)) {
				$element .= " {$key}={$value} ";
			}
		}
		$element .= '/>';
		return $element;
	}
}