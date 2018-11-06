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

// 6
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

// 7 
function swap_string_for_array_negative_values($arr) {
  foreach ($arr as $i => $val) {
    if ($val < 0) {
      $arr[$i] = "Dojo";
    }
  }
  var_dump($arr);
}
swap_string_for_array_negative_values([-1,2,3,4,5]);

// 8
function print_odds_1_to_255() {
  foreach (range(1,255) as $num) {
    echo ($num % 2 == 1 ? $num . "\n" : false);
  }
}
print_odds_1_to_255();

// 9
function iterate_and_print_array($arr) {
  foreach ($arr as $val) {
    echo $val . "\n";
  }
}
iterate_and_print_array([1,2,3,4,5]);

// 10
function get_and_print_average($arr) {
  $sum = 0;
  foreach ($arr as $val) {
    $sum += $val;
  }
  echo ($sum/sizeof($arr)) . "\n";
}
get_and_print_average([1,2,3,4,5]);

// 11
function square_the_values($arr) {
  foreach ($arr as $i => $val) {
    $arr[$i] = $val * $val;
  }
  var_dump($arr);
  return $arr;
}
square_the_values([1,2,3,4,5]);

// 12
function zero_out_negative_numbers($arr) {
  foreach ($arr as $i => $val) {
    $val < 0 ? $arr[$i] = 0 : false;
  }
  var_dump($arr);
  return $arr;
}
zero_out_negative_numbers([1,2,3,4,-1]);

// 13
function shift_array_values($arr) {
  foreach ($arr as $i => $val) {
    $arr[$i] = $arr[$i + 1];
  }
  $arr[sizeof($arr) - 1] = 0;
  var_dump($arr);
  return $arr;
}
shift_array_values([1,2,3,4,5]);