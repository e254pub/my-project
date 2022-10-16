<?php

class BinaryTree
{
    private $arr, $len;

    /**
     * @param array $arr
     * @return Tree
     */
    public function create(array $arr): Tree
    {
        $this->arr = $arr;
        $this->len = count($this->arr);
        $root = new Tree($this->arr[0]); //корень
        $root->left = $this->generate(1); //левый узел, меньший
        $root->right = $this->generate(2); //правый узел, больший
        return $root;
    }

    /**
     * @param $index
     * @return Tree
     */
    private function generate($index): Tree
    {
        if ($this->arr[$index] == '#') {
            return new Tree(null);
        }
        $node = new Tree($this->arr[$index]);
        $key = $index * 2 + 1;
        if ($key < $this->len) {
            $node->left = $this->generate($key++);
        }
        if ($key < $this->len) {
            $node->right = $this->generate($key);
        }
        return $node;
    }

    /**
     * @param Tree $root
     * @return void
     */
    public function get(Tree $root)
    {
        echo $root->val;
        $this->get($root->left);
        $this->get($root->right);
    }
}

$tree = new BinaryTree();
$arr = [1, 2, 3, 4, '#', 5, '#', 6, 7, '#', '#', 8, 9];
$root = $tree->create($arr);
$tree->get($root);