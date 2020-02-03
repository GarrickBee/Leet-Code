<?php
class Solution {

  /**
  * @param Integer[] $nums
  * @return Integer[][]
  */
  function threeSum($nums) {
    $target = 0;
    $result = array();

    foreach ($nums as $first_key => $first_value)
    {
      foreach ($nums as $second_key => $second_value)
      {
        if ($second_key !== $first_key)
        {
          $second_target = $target - $first_value;

        }
      }
    }
    return $result;
  }
}



print_r($solution->threeSum($nums));
