<?php

require __DIR__ . '/../vendor/autoload.php';

use Core\ShortestWord;

$shortest_word = "";
$shortest_length = null;

if (!empty($_POST['sentence'])) {
    $value = $_POST['sentence'];

    $short = new ShortestWord($value);
    $shortest_word = $short->getWord();
    $shortest_length = $short->getLength();
}
?>

<html>
    <head>
        <title>Shortest word detection</title>
    </head>
    <body>

        <?php
            if (!empty($_POST['sentence'])) {
                echo '<p>OUTPUT: ' . $shortest_length . ' - BECAUSE THE SHORTEST WORD IS "' . $shortest_word . '"</p>';
            }
        ?>

        <form method="POST">
            <label style="margin-bottom: 8px;">Sentence</label><br>
            <input type="text" name="sentence" /><br><br>

            <input type="submit" value="Submit">
        </form>

    </body>
</html>