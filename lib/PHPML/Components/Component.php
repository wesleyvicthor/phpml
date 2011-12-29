<?php

namespace PHPML\Components;

use PHPML\Exception\Util\ExceptionFactory,
    PHPML\Components\ComponentInterface;


abstract class Component implements ComponentInterface
{
    protected $allowChildren    = true;
    protected $children         = array();
    protected $properties       = array();
    protected $parent;
    protected $id;
    
    public function isChildrenAllowed()
    {
        return $this->allowChildren;
    }
    
    public function addChild($child)
    {
        if (!$this->allowChildren)
            throw ExceptionFactory::createChildrenNotAllowed(__FILE__, __LINE__, $this->getId());
        
        $this->children[] = $child;
        return $this;
    }
    
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
    
    public function getParent()
    {
        return $this->parent;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    abstract public function assemble();
    
    public function __set($prop, $value)
    {
        // Does this property exist?
        if (array_key_exists($prop, $this->getProperties()))
            $this->properties[$prop] = $value;
        else
            throw ExceptionFactory::createSetUnexpectedProperty(
                __FILE__,
                __LINE__,
                $this,
                $prop
            );
    }
    
    public function __get($prop)
    {
        // Does this property exist?
        if (array_key_exists($prop, $this->getProperties()))
            return $this->properties[$prop];
        else
            throw ExceptionFactory::createGetUnexpectedProperty(
                __FILE__,
                __LINE__,
                $this,
                $prop
            );
    }
}