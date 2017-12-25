<?php

namespace App;

require_once "tree/Tree.php";

use function \tree\Tree\h;

$a = array_merge( [1,2,3] + [4=>1, 5,6]);

echo $a[2];

var_dump(booval(-1));

$tree = h('div', [],
    h('img', ['src' => 'link/to/path']),
    h('div', ['class' => 'row'],
        'body',
        h('p', [], 'paragraph1'),
        h('p', [], 'paragraph2')
    )
);

var_dump($tree->toString());