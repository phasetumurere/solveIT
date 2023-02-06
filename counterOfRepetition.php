<?php

$array = array(1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 5);

$count = array_count_values($array);

foreach ($count as $element => $repetition) {
    echo "Element $element is repeated $repetition times" . "<br>";
}
