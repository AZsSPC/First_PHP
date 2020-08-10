<?php
$user_num = (int)$_GET['user_num'];
$isSmart = $_GET['smart'] === 'on';
$isVisible = $user_num < 101 && $user_num > 0;
$counter_fact = 0;
$counter = 0;
$arr = $isSmart ? ' [smart]:' : ':';
$rand = 0;

while ($isVisible && (($rand = (int)rand(1, 100)) !== $user_num)) {
    $counter_fact++;
    if ($isSmart) {
        if (strpos($arr, (string)$rand) === false) {
            $counter++;
            $arr .= ' ' . $rand;
        }
    } else {
        $arr .= ' ' . $rand;
    }
}

echo '<div align="center">
    <h1>Input number from 1 to 100</h1>
    <form action="generator.php?" method="GET">
        <input type="checkbox" name="smart" ' . ($isSmart ? 'checked' : '') . '>do smart? </input><br>
        <input type="number" name="user_num"  placeholder="1 - 100" min ="1" max="100" value="' . ($isVisible ? $user_num : '') . '">
        <input type="submit"></form><br>
        <div ' . ($isVisible ? '' : 'hidden') . '>
    <p> That\'s <strong>'
    . ($isSmart ? (($counter + 1) . ' (or ' . ($counter_fact + 1) . ' in fact)') : $counter_fact + 1)
    . '</strong> tries to guess you number is <strong>' . $user_num . ' </strong></p>'
    . (strlen($arr) > 1 ? '<p> All tries' . $arr . '</p>' : '')
    . '</div></div>';

/**
 * <form action="generator.php?" method="GET">
 * //generator.php замените на свой файл
 * <input type="number" name="user_num">
 * //http://localhost:xxxx/generator.php?user_num=1
 * //user_num - это ключ от массива $_GET
 */