<?php
class Solution {

  /**
  * @param Integer[] $nums
  * @return Boolean
  */
  function checkPossibility($nums)
  {
    $position = "none";
    for ($i=0; $i < sizeof($nums)-1 ; $i++)
    {
      if (!empty($nums[$i+1]))
      {
        if ($nums[$i] > $nums[$i+1])
        {
          if ($position !== "none")
          {
            return false;
          }
          $position = $i;
        }
      }
    }
return ($position == "none" || $position == "0" || $position == (sizeof($nums)-2) || $nums[$position-1]<= $nums[$position+1] || $nums[$position] <= $nums[$position+2]);
  }
}
