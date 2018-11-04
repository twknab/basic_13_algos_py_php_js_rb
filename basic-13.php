<?php
// 1
function print_1_to_255() {
  foreach (range(1, 255) as $number) {
    echo $number . "\n";
  }
};
print_1_to_255();

// 2
function print_ints_and_sum() {
  $sum = 0;
  foreach (range(0, 255) as $number) {
    $sum += $number;
    echo $number . "\n";
    echo $sum . "\n";
  }
};

// 3
function find_and_print_max($arr) {
  $max = $arr[0];
  foreach ($arr as $num) {
    if ($num > $max) {
      $max = $num;
    }
  }
  echo $max . "\n";
}
find_and_print_max([1,2,3,4,5]);

// 4
function array_with_odds(){
  $odds = [];
  foreach (range(1,255) as $num) {
    if ($num % 2 == 1) {
      array_push($odds, $num);
    }
  }
  var_dump($odds);
}
array_with_odds();

// 5
function greater_than_y($arr, $y) {
  $count = 0;
  foreach ($arr as $val) {
    if ($val > $y) {
      $count++;
    }
  }
  echo $count . "\n";
}
greater_than_y([1,2,3,4,5], 3);

function min_max_avg($arr) {
  $min = $arr[0];
  $max = $arr[0];
  $sum = 0;
  foreach ($arr as $val) {
    if ($val > $max) {
      $max = $val;
    };
    if ($val < $min) {
      $min = $val;
    };
    $sum += $val;
  }
  $avg = $sum / sizeof($arr);
  echo $min . "\n" . $max . "\n" . $avg . "\n";
}
min_max_avg([1,2,3,4,5]);

function swap_string_for_array_negative_values($arr) {
  foreach ($arr as $i => $val) {
    if ($val < 0) {
      $arr[$i] = "Dojo";
    }
  }
  var_dump($arr);
}
swap_string_for_array_negative_values([-1,2,3,4,5]);