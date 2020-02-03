<?php
// Runtime: 0 ms, faster than 100.00% of PHP online submissions for Reverse Integer.
// Memory Usage: 14.7 MB, less than 100.00% of PHP online submissions for Reverse Integer.
class Solution {

  /**
  * @param Integer $x
  * @return Integer
  */
  function reverse($x)
  {
    $rev = 0;
    while ($x != 0)
    {
      // Pop last number
      $pop = $x % 10;
      $rev = $rev * 10 + $pop;
      $x = (int)($x/10);
    }
    if ($rev > pow(2,31) || $rev < -pow(2,31) )
    {
      return 0;
    }
    return $rev;
  }
}
$test_array = -123;
$solution = new Solution();
print_r($solution->reverse($test_array));
