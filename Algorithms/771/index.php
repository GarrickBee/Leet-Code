<?php
class Solution {
  /**
  * @param String $J
  * @param String $S
  * @return Integer
  */
  function numJewelsInStones($J, $S)
  {
    $J = str_split($J);
    $S = str_split($S);
    $jewels = 0;
    foreach ($S as $key => $value)
    {
      if (in_array($value,$J))
      {
        $jewels ++;
      }
    }
    return $jewels;
  }
}

class Solution_2 {
  /**
  * @param String $J
  * @param String $S
  * @return Integer
  */
  function numJewelsInStones($J, $S)
  {
    $jewels = 0;
    foreach (str_split($S) as $key => $value)
    {
      if (in_array($value,str_split($J)))
      {
        $jewels ++;
      }
    }
    return $jewels;
  }
}

$J = "z";
$S = "aAAbbbb";
$solution = new Solution();
print_r($solution->numJewelsInStones($J, $S));
