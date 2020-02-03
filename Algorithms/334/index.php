<?php
// Two pointer
class Solution {

  /**
  * @param String[] $s
  * @return NULL
  */
  function reverseString(&$s)
  {
    $left = 0;
    $right = sizeof($s)-1;
    while ($left < $right )
    {
      $temp = $s[$left];
      $s[$left++] = $s[$right];
      $s[$right--] = $temp;
    }
    return NULL;
  }
}


// echo $s[0];
$s = ["h","e","l","l","o"];
$solution = new Solution();
print_r($solution->reverseString($s));
print_r($s);

// print_r($solution->addTwoNumbers($nums));
