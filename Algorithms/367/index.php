<?php
class Solution {

  /**
  * @param Integer $num
  * @return Boolean
  */
  function isPerfectSquare($num) {
    if ($num<0)
    {
      return false;
    }
    $x = 0;
    $square = 0;
    while ($square <= $num)
    {
      $square = $x*$x;
      if ($square == $num)
      {
        return true;
      }
      $x++;
    }
    return false;
  }
}

$num = 16;
$solution = new Solution();
print_r($solution->isPerfectSquare($num));
