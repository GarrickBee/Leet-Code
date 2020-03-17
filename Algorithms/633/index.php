<?php
class Solution {

  /**
  * @param Integer $c
  * @return Boolean
  */
  function judgeSquareSum($c)
  {
    if ($c < 0)
    {
      return FALSE;
    }
    $left  = 0;
    $right = (int)sqrt($c);
    while ($left <= $right)
    {
      $sum = ($left*$left) + ($right*$right);
      if ($sum < $c ){
        $left = $left +1;
      }
      elseif ($sum > $c)
      {
        $right = $right -1 ;
      }
      else
      {
        return TRUE;
      }
    }
    return FALSE;
  }
}

$c = 5;
$solution = new Solution();
print_r($solution->judgeSquareSum($c));
?>
