<?php
function flatten ($origArray) {
  /*
  basic flatten routine
  */
  $t=[];
  for ($i=0; $i<count($origArray); $i++) {
    if (is_array($origArray[$i])) {
      $b=flatten($origArray[$i]);
      for ($g=0; $g<count($b); $g++) {
        $t[]=$b[$g];
      }
    } else {
      $t[]=$origArray[$i];
    }
  }
  return $t;
}
