<?php

$input = array(1, 2, 3, 6, 7);
$expected = range(1, 10);
$missing = array_diff($expected, $input);

if(empty($missing)) {
  echo "No missing numbers.";
} else {
  echo "The missing numbers are: " . implode(", ", $missing);
}
