<?php

namespace Core;

class ShortestWord
{
    protected array $words;
    private string $shortest_word;
    private int $shortest_length;

    public function __construct(string $value) {
        $this->words = explode(" ", $value);

        $shortest_word = "";
        $shortest_length = 9999;

        foreach ($this->words as $key => $word) {
            $length = strlen($word);

            if ($length < $shortest_length) {
                // Store the length of the current word if its less than the length
                $shortest_length = $length;
                // Store the word
                $shortest_word = $this->words[$key];
            }
        }

        $this->shortest_length = $shortest_length;
        $this->shortest_word = $shortest_word;
    }

    public function getWord(): string {
        return $this->shortest_word;
    }

    public function getLength(): int {
        return $this->shortest_length;
    }
}