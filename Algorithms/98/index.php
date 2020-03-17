<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
 function isValidBST($root) {
       return $this->helper($root,null,null);
    }

    function helper($root,$lower,$upper){
if(empty($root)) return true;
        if( $upper !==null && $root->val >= $upper) return false;
        if( $lower !== null && $root->val <= $lower) return false;
    if( !$this->helper($root->left, $lower, $root->val) ) return false;
        if(!$this->helper($root->right, $root->val,$upper )) return false;
        return true;
    }
}
