<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers in Matrix</title>
</head>
<body>

<h2>Even Numbers from the Matrix</h2>
<ul>
<?php
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$row = 0;
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) {
            echo "<li>" . $matrix[$row][$col] . "</li>";
        }
        $col++;
    }
    $row++;
}
?>
</ul>

</body>
</html>