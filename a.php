<?php

  function solution($A){
      sort($A, SORT_NUMERIC);
      $smallest = array_shift($A);
      $samll2 = array_shift($A);
      return $samll2 -$smallest;
  }

  $test = array(5,23,45,5,56,43);

  echo solution($test);