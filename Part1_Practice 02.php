<?php
// Create an array of fruits
$fruits = ['apple', 'banana', 'orange', 'grape', 'kiwi'];

// Start the ordered list
echo "<ol>";

// Use a for loop to display each element of the array
for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>"; // Display each fruit in a list item
}

// End the ordered list
echo "</ol>";
?>
