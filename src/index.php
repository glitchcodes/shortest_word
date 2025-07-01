<?php

/**
 * Shortest Word Detector
 *
 * NOTE: This could be run in CLI or normally in browser
 *
 * CLI Mode
 *
 * Run this file in CLI with this example
 * `php main.php -s "example string" -c`
 *
 * Arguments
 * -s or --string = A string you want to check
 * -c or --clean = Trims the string of the following punctuation marks (.,;!?); No value required
 */

require __DIR__ . '/../vendor/autoload.php';

use Core\ShortestWord;

// Check if the file is run from a browser or CLI
$is_web = http_response_code() !== FALSE;

if ($is_web) {
    echo "Run from web";
} else {
    $options = getopt("s:c", ["string:clean"]);

    if (isset($options["s"]) || isset($options["string"])) {
        // Store string argument
        $value = $options["s"] ?? $options["string"];

        // QOL
        // Trim punctuation marks if -c or --clean argument is present
        if (isset($options["c"]) || isset($options["clean"])) {
            $punctuation_marks = ['.', ',', '!', '?', ';'];
            $value = str_replace($punctuation_marks, '', $value);
        }

        $shortest_word = new ShortestWord($value);

        // Result
        echo 'OUTPUT: ' . $shortest_word->getLength() . ' - BECAUSE THE SHORTEST WORD IS "' . $shortest_word->getWord() . '"';

        return;
    }

    echo "OUTPUT: No string provided";
    return;
}


