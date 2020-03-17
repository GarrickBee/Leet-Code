<?php


function solution($A)
{
  if (sizeof($A) >100000 )
  {
    return false;
  }
  for ($i=0; $i < sizeof($A) ; $i++)
  {
    if ($A[$i] <2 || $A[$i] >1000)
    {
      return false;
    }


  }
}

$A =[5, 4, 3, 2, 6] ;

print_r( solution($A));


// $counter = 0;
// foreach ($column as $column_key => $column_value)
// {
//   if (in_array($current_row.$column_value,$S) )
//   {
//     echo $column_value;
//     $counter = 0;
//   }
//
//   if ($counter >= 4)
//   {
//     $counter = 0;
//     $max_family ++ ;
//   }
//   $counter++;
// }
//
// $current_row++;
