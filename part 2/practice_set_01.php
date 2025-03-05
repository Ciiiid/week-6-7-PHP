<?php
function calculateTotalPrice($items) {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['Price']; // Corrected key
    }
    return $total;
}

function modifyString($string) {
    $string_no_spaces = str_replace(' ', '', $string);
    return strtolower($string_no_spaces);
}

function checkEvenOdd($number) {
    return ($number % 2 == 0) ? "$number = even." : "$number = odd.";
}

$items = [
    ['name' => "Widget_A", "Price" => 10],
    ['name' => "Widget_B", "Price" => 15],
    ['name' => "Widget_C", "Price" => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total_price: $$totalPrice\n";

$string = "Poorly written program that has little structure and readability";
$modifiedString = modifyString($string);
echo "Modified string: $modifiedString\n";

$number = 42;
echo "Number: " . checkEvenOdd($number) . "\n";
?>
