<?php
class Solution {

  /**
  * @param String $A
  * @param String $B
  * @return Boolean
  */
  function buddyStrings($A, $B)
  {
    $pos = array();
    $array_a = str_split($A);
    $array_b = str_split($B);
    if ($A === $B)
    {
      $count = array_count_values($array_a);
      foreach ($count as $key => $value)
      {
        if ($value >= 2)
        {
          return true;
        }
      }
      return false;
    }

    if ( !empty(array_diff($array_a,$array_b)) || sizeof($array_a) !== sizeof($array_b) || empty($A) || empty($B))
    {
      return false;
    }

    foreach ($array_a as $a_key => $a_value)
    {
      // Check different position
      if ($array_b[$a_key] !== $a_value )
      {
        $pos[] = $a_key;
      }
      if (!empty($array_a[$a_key+1]))
      {
        if ($a_value !== $array_a[$a_key+1] )
        {
          $repeat = false;
        }
      }
    }
    // Two Number different
    if (sizeof($pos) == 2 )
    {
      if ($array_a[$pos[0]] == $array_b[$pos[1]] && $array_a[$pos[1]] == $array_b[$pos[0]])
      {
        return true;
      }
    }
    return false;
  }
}
$A = "aa";
$B = "aa";
$solution = new Solution();
print_r($solution->buddyStrings($A, $B));
