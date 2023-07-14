<?php

function getMessage() {
    return 'Hello world!';
}

$a = 200;

function bcc($start = 2, $end = 10) {
    $content = '<table border="1" cellpadding="0" cellspacing="0" width="800">';

    global $a;

    for ($i = 1; $i <= 10; $i ++) {
        $content .= '<tr>';
        $j = $start;

        for ($j; $j <= $end; $j++) {
            $content .= "<td>{$j} x {$i} =" . $i * $j  . "</td>";
        }
        $content .= '</tr>';
    }

    $a = 3000;

    $content .= "</table>";

    return $content;
}

// In ra bcc từ 2 -> 10
// echo bcc();

// echo '<br/><br/>';

// In ra bcc từ 4 -> 8
// echo bcc(4, 8);

// In ra bcc từ 5 -> 9
// echo bcc(5, 9);

// echo $a;


$caculator = function($number1, $number2) {
    return $number1 + $number2;
};

$number3 = 10;

$caculator = fn($number1, $number2) => $number1 + $number2 + $number3;

$caculator2 = function($number1, $number2) use($number3) {
    $number3 = 100;
    return $number1 + $number2 + $number3;
};

echo $caculator(5, 10);
echo '<br/>';
echo $caculator2(5, 10);
echo '<br/>';
echo $number3;