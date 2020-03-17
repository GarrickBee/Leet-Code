<?php
/**
* Definition for a singly-linked list.
* class ListNode {
*     public $val = 0;
*     public $next = null;
*     function __construct($val) { $this->val = $val; }
* }
*/
class Solution {

  /**
  * @param Integer[] $nums
  * @return NULL
  */
  function sortColors(&$nums)
  {
    $zero_index = 0;
    $two_index  = sizeof($nums) -1;
    $index      = 0;
    while ($index <= $two_index)
    {
      if ($nums[$index] == 0)
      {
        $temp              = $nums[$index];
        $nums[$index]      = $nums[$zero_index];
        $nums[$zero_index] = $temp;
        $zero_index++;
      }
      elseif ($nums[$index] == 2)
      {
        $temp             = $nums[$index];
        $nums[$index]     = $nums[$two_index];
        $nums[$two_index] = $temp;
        $two_index--;
      }
      $index++;
    }
    return $nums;
  }
}

echo "<pre>";
$num = [2,0,2,1,1,0];
$solution = new Solution();
print_r($solution->sortColors($num) );

echo "</pre>";
