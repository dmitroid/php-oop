<?php

namespace tree\tags;

require_once 'Tag.php';
require_once 'TagInterface.php';

class SingleTag extends Tag implements TagInterface
{
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
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
        return $html;
    }
    // END
}