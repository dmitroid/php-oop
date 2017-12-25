<?php

namespace tree\Tree;

require_once 'tags/Div.php';
require_once 'tags/Img.php';
require_once 'tags/Paragraph.php';

/**
 * @param $tagName
 * @param array $attributes
 * @param array ...$children
 * @return \tree\tags\Div|\tree\tags\Img|\tree\tags\Paragraph
 * @throws \Exception
 */
function h($tagName, array $attributes, ...$children)
{
    switch ($tagName) {
        case 'div':
            return new \tree\tags\Div($attributes, $children);
        case 'p':
            return new \tree\tags\Paragraph($attributes, $children);
        case 'img':
            return new \tree\tags\Img($attributes);
        default:
            throw new \Exception("'{$tagName}' is undefined");
    }
}