<?php
  $array1=[11,22,33,112,333];
  $array2=[44,55,111,22,66];
  
  print_r(array_diff($array1,$array2));


?>
/* ------------output-------*/
Array(
  [0]=>11
  [1]=>33
  [2]=>112
  [3]=>333

)
