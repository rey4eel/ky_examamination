<?php

require_once __DIR__.'/bootstrap.php';


function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * @param $time
 * @return string
 */
function get_exp_time($time): array {
    $dt_diff = (strtotime($time) - strtotime('now'));
    if ($dt_diff <= 0 ) {
        return [0,0];
    }
    $hour = floor($dt_diff/3600);
    $sec = $dt_diff - ($hour*3600);
    $min = floor($sec/60);

    return [$hour, $min];
}

/**
 * @param int $price
 * @return string
 */
function price_format(int $price): string
{
    $currency = '<b class="rub">р</b>';
    $price = ceil($price);
    if ($price >= 1000) {
        $price = number_format($price, 0, null, ' ');
    }
    return $price.' '.$currency;
}
