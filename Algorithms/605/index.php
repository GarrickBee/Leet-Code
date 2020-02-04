<?php
//Runtime: 52 ms, faster than 85.71% of PHP online submissions for Can Place Flowers.
// Memory Usage: 16.8 MB, less than 100.00% of PHP online submissions for Can Place Flowers.
class Solution {
  /**
  * @param Integer[] $flowerbed
  * @param Integer $n
  * @return Boolean
  */
  function canPlaceFlowers($flowerbed, $n)
  {
    $count = 0;
    foreach ($flowerbed as $key => $value)
    {
      if ($flowerbed[$key] == 0 && ( $key == 0 || $flowerbed[$key-1] ==0) && ($key == sizeof($flowerbed)-1 || $flowerbed[$key+1] == 0) )
      {
        $flowerbed[$key] = 1;
        $count ++;
      }
      if ($count >= $n)
      {
        return true;
      }
    }
    return false;
  }
}

$flowerbed = [1,0,0,0,0,1];
$solution = new Solution();
print_r($solution->canPlaceFlowers($flowerbed, 2));
