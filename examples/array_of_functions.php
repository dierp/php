<?php
require_once('calculations.php');

function do_calculation($value1, $value2, $operator){

    // if ($operator == 'sum'){
    //     return $value1 + $value2;
    // } else if($operator == 'subtraction'){
    //     return $value1 - $value2;
    // } else if($operator == 'multiplication'){
    //     return $value1 * $value2;
    // } else if($operator == 'division'){
    //     return $value1 / $value2;
    // }

    // $math_operators = [
    //     'sum' => fn() => $value1 + $value2,
    //     'subtraction' => fn() => $value1 - $value2,
    //     'multiplication' => fn() => $value1 * $value2,
    //     'division' => fn() => $value1 / $value2,
    // ];
    // return $math_operators[ $operator ]($value1, $value2);

    $math_operators = [
        'sum' => 'sum',
        'subtraction' => 'subtraction',
        'multiplication' => 'multiplication',
        'division' => 'division',
    ];
    return $math_operators[ $operator ]($value1, $value2);
}

var_dump( do_calculation(5, 10, 'sum') );
var_dump( do_calculation(5, 10, 'subtraction') );
var_dump( do_calculation(5, 10, 'multiplication') );
var_dump( do_calculation(5, 10, 'division') );