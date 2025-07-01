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

        // Split each word by spacing
        $words = explode(" ", $value);

        $index_of_shortest_word = null;
        $shortest_length = 9999;

        // Loop through $words and find the shortest word length among them
        foreach ($words as $key => $word) {
            $length = strlen($word);

            if ($length < $shortest_length) {
                // Store the length
                $shortest_length = $length;
                // Store the index of the shortest word in the string
                $index_of_shortest_word = $key;
            }
        }

        // Highlight the shortest word in the string
        echo 'OUTPUT: ' . $shortest_length . ' - BECAUSE THE SHORTEST WORD IS "' . $words[$index_of_shortest_word] . '"';

        return;
    }

    echo "No string provided";
    return;
}


