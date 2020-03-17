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
  * @param String $ransomNote
  * @param String $magazine
  * @return Boolean
  */
  function canConstruct($ransomNote, $magazine)
  {
    if ($ransomNote == null)
    {
      return true;
    }
    $magazine_hashmap = array_count_values(str_split($magazine));
    $ransom_array     = str_split($ransomNote);
    foreach ($ransom_array as $key => $value)
    {
      if (!isset($magazine_hashmap[$value]))
      {
        return false;
      }
      $magazine_hashmap[$value] -= 1;
      if ($magazine_hashmap[$value] < 0 )
      {
        return false;
      }
    }
    return true;
  }
}
$ransomNote = "acs";
$magazine   = "a";
$solution   = new Solution();
print_r($solution->canConstruct($ransomNote, $magazine));
