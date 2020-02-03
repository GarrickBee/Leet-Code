<?php
// Runtime: 84 ms, faster than 50.00% of PHP online submissions for Shortest Unsorted Continuous Subarray.
// Memory Usage: 15.7 MB, less than 100.00% of PHP online submissions for Shortest Unsorted Continuous Subarray.
class Solution {

  /**
  * @param Integer[] $nums
  * @return Integer
  */
  function findUnsortedSubarray($nums)
  {
    $unsorted_array = $nums;
    sort($nums);
    $sorted_array = $nums;

    $array_size = sizeof($nums);
    $last_index = $array_size-1;
    $sub_first = null;
    $sub_last = null;
    // print_r($unsorted_array)."<br>";
    // print_r($sorted_array)."<br>";
    foreach ($unsorted_array as $key => $value)
    {
      // Compare first value
      if ($value !== $sorted_array[$key] && $sub_first === null)
      {

        $sub_first = (int)$key;
      }
      // Compare Last Value
      if ($unsorted_array[$last_index-$key] !== $sorted_array[$last_index-$key] && $sub_last === null)
      {
        // echo $sub_last;
        $sub_last = (int)$last_index-$key;
      }
    }
    if ($sub_first === null || $sub_last === null)
    {
      return 0;
    }
    return ($sub_last-$sub_first >=0 ? $sub_last-$sub_first+1 : 0);
  }
}


class Solution_2 {

  /**
  * @param Integer[] $nums
  * @return Integer
  */
  function findUnsortedSubarray($nums)
  {
    if ($array_size <=1)
    {
      return 0;
    }
    $unsorted_array = $nums;
    sort($nums);
    $sorted_array = $nums;

    $array_size = sizeof($nums);
    $last_index = $array_size-1;
    $sub_first = $last_index;
    $sub_last = 0;
    // print_r($unsorted_array)."<br>";
    // print_r($sorted_array)."<br>";
    foreach ($unsorted_array as $key => $value)
    {
      if ($value !== $sorted_array[$key])
      {
        $sub_first = min(array($sub_first,$key));
        $sub_last = max(array($sub_last,$key));
      }
    }
    return ($sub_last-$sub_first >=0 ? $sub_last-$sub_first+1 : 0);
  }
}
$nums = [1,2,3,4];

$solution = new Solution();
print_r($solution->findUnsortedSubarray($nums));
