<?php
// Two pointer
class Solution {

  /**
  * @param Integer $num
  * @return Boolean
  */
  function checkPerfectNumber($num) {
    if ($num > 100000000 || $num <=0)
    {
      return false;
    }
    $sum =0;
    for ($i=2; $i <= sqrt($num) ; $i++)
    {
      if ( ($num % $i) == 0 )
      {
        $sum += $i;
        if ($i !== ($num/$i) )
        {
          $sum += ($num/$i);
        }
      }
    }
    $sum++;
    return ($sum==$num);
  }
}

$num = 28;
$solution = new Solution();
print_r($solution-> checkPerfectNumber($num));
