<!DOCTYPE html>
<html>
<head>
    <title>09246ffb Guessing Game</title>
</head>
<body>
<h1>Welcome to the Guessing Game</h1>

<?php
$correct = 52;   // sizga berilgan to‘g‘ri javob

// guess parameter yo'q bo'lsa
if (!isset($_GET['guess'])) {
    echo("<p>Missing guess parameter</p>");
} else {
    $guess = $_GET['guess'];

    // agar guess son bo'lmasa
    if (!is_numeric($guess)) {
        echo("<p>Your guess is not a number</p>");
    }
    // agar to‘g‘ri javobdan kichik bo‘lsa
    else if ($guess < $correct) {
        echo("<p>Your guess is too low</p>");
    }
    // agar to‘g‘ri javobdan katta bo‘lsa
    else if ($guess > $correct) {
        echo("<p>Your guess is too high</p>");
    }
    // agar aynan teng bo‘lsa
    else {
        echo("<p>Congratulations - You are right!</p>");
    }
}
?>

</body>
</html>
