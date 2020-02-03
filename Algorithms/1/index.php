<?php
class Solution
{

  /**
  * @param Integer[] $nums
  * @param Integer $target
  * @return Integer[]
  */
  function twoSum($nums, $target)
  {
    foreach ($nums as $nums_key => $nums_value)
    {
      $second_value = $target - $nums_value;
      if (in_array($second_value,$nums))
      {
        $second_key = array_search($second_value,$nums);
        if ($second_key !== $nums_key)
        {
          return array($nums_key,array_search($second_value,$nums));
        }
      }
    }
    exit("no Solution");
  }
}

$nums = array(3,2,4);
$solution = new Solution();

print_r($solution->twoSum($nums,6));
