<?php


function solution($N,$S)
{
  $S = explode(" ",$S);
  sort($S);
  $current_row = 1;
  $max_family = 0;
  $column = range ('A', 'K');
  $possible_column = array(
    array('B','C','D','E'),
    array('D','E','F','G'),
    array('F','G','H','J'),
  );

  while ($current_row <= $N)
  {
    $current_coor = array();

    foreach ($column as $value) {
      if ($S[] ) {
        // code...
      }
      $current_coor[] = $current_row.$value;
    }

    foreach ($possible_column as $key => $value)
    {
      if (count(array_intersect($value, $current_coor)) == count($value))
      {
        $max_family++;
        $current_coor = array_diff($value,$current_coor);
      }
    }

    return $max_family;
  }
}

$N = 2;
$S = "1A 2F 1C";
print_r( solution($N,$S) );


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
