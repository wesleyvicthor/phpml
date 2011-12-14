<?php

namespace phpml\components;

class Div extends Component
{
    public function __toString()
    {
        return $this->assemble();
    }

    public function getProperties()
    {
        return array(
            'class' => null
        );
    }

    public function assemble()
    {
        $element = '<div';
        foreach ($this->properties as $key => $value) {
            if (!is_null($value) && empty($value)) {
                $element .= " {$key}={$value} ";
            }
        }
        $element .= '>';

        foreach ($this->children as $child) {
            $element .= $child;
        }
        $element .= '</div>';
        return $element;
    }
}