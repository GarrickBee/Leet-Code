<?php
class Solution {

  function mySqrt($x)
  {
    $left = 1 ;
    $max = 2147483647;
    while (true)
    {
      $middle = $left + ($max-$left)/2;
      if ($middle > ($x/$middle))
      {

        $max = $middle -1;
      }
      else
      {
        if ($middle +1 > $x /($middle+1))
        {
          return $middle;
        }
        $left = $middle+1;
      }
    }
  }
}

$x =26;
$solution = new Solution();
print_r($solution->mySqrt($x));
