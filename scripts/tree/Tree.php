<?php
/**
 * Узел дерева
 */
class Tree
{
    public $val, $left, $right = null;

    function __construct($value)
    {
        $this->val = $value;
    }
}