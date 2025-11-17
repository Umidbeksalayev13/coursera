<?php
$num = $_GET['num'] ?? 0;

if ($num < 10) {
    echo "<h1>Success!</h1>";
    echo "<p>You entered: $num</p>";
} else {
    header("Location: fail.php");
    exit;
}
?>
