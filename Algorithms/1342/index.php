<?php
class Solution {

  /**
  * @param Integer $num
  * @return Integer
  */
  function numberOfSteps ($num) {
    $steps = 0;
    while ( $num >0  )
    {

      $steps += ( ($num % 2) !==0 && $num !==1 ) ? 2:1 ;
      $num >>= 1;

    }
    return $steps;
  }
}

$num = 1;
$solution = new Solution();
print_r($solution->numberOfSteps ($num) );
