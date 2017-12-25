<?php

namespace tree\tags;

require_once 'Tag.php';
require_once 'TagInterface.php';

class PairedTag extends Tag implements TagInterface
{
    protected $children = [];
    
    public function __construct($attributes = [], $children = [])
    {
        $this->attributes = $attributes;
        $this->children = $children;
    }
    
    // BEGIN (write your solution here)
    
    /**
     * @return string
     */
    public function toString()
    {
        // TODO: Implement toString() method.
        $html = '<' . $this->getName();
        
        foreach ($this->getAttributes() as $attribute => $value) {
            $html .= ' ' . $attribute . '=' .'"' . $value . '"';
        }
        $html .=  '>';
        
        foreach ($this->children as $value) {
            $html .= is_object($value) ? $value->toString() : $value;
        }
        
        $html .= '</' . $this->getName() . '>';
        return $html;
    }
    // END
}