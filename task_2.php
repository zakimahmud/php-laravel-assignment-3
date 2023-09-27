<?php

function remove_even_numbers($numbers) {

    $odd_numbers = [];
    foreach ($numbers as $number) {
        if ($number % 2 !== 0) {
          $odd_numbers[] = $number;
        }
        print_r($odd_numbers);
      }

}

$numbers = range(1, 10);
remove_even_numbers($numbers);

?>