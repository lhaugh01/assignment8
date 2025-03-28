<?php
// Get the number from the query string
$n = isset($_GET['n']) ? intval($_GET['n']) : 1;

// Validate the number
if ($n < 1) {
    $n = 1;
}

// Generate the times table
echo "<h1>Times Table for $n</h1>";
echo "<table border='1'>";
for ($i = 1; $i <= 15; $i++) {
    $result = $i * $n;
    echo "<tr><td>$i x $n = $result</td></tr>";
}
echo "</table>";
?>
