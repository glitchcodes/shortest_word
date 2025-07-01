<?php

use Core\ShortestWord;
use PHPUnit\Framework\TestCase;

final class ShortestWordTest extends TestCase
{
    /**
     * Test if the shortest word is correct with the provided string
     */
    public function testCorrectShortestWord(): void {
        $value_one = "TRUE FRIENDS ARE ME AND YOU";
        $value_two = "I AM THE LEGENDARY VILLAIN";
        $shortest_word_one = new ShortestWord($value_one);
        $shortest_word_two = new ShortestWord($value_two);

        $this->assertSame("ME", $shortest_word_one->getWord());
        $this->assertSame("I", $shortest_word_two->getWord());
    }

    /**
     * Test if the shortest word is incorrect with the provided string
     */
    public function testIncorrectShortestWord(): void {
        $value_one = "TRUE FRIENDS ARE ME AND YOU";
        $value_two = "I AM THE LEGENDARY VILLAIN";
        $shortest_word_one = new ShortestWord($value_one);
        $shortest_word_two = new ShortestWord($value_two);

        $this->assertNotSame("FRIENDS", $shortest_word_one->getWord());
        $this->assertNotSame("ME", $shortest_word_two->getWord());
    }

    /**
     * Test if the duplicate shortest word chooses the first shortest
     */
    public function testCorrectDuplicateShortestWord(): void {
        $value = "TRUE FRIENDS ARE ME AND YOU PLUS IT";
        $shortest_word = new ShortestWord($value);

        $this->assertSame("ME", $shortest_word->getWord());
    }

    /**
     * Test if the duplicate shortest word doesn't choose the next shortest
     */
    public function testIncorrectDuplicateShortestWord(): void {
        $value = "TRUE FRIENDS ARE ME AND YOU PLUS IT";
        $shortest_word = new ShortestWord($value);

        $this->assertNotSame("IT", $shortest_word->getWord());
    }

    /**
     * Test if the shortest length is correct with the provided string
     */
    public function testCorrectShortestLength(): void {
        $value_one = "TRUE FRIENDS ARE ME AND YOU";
        $value_two = "I AM THE LEGENDARY VILLAIN";
        $shortest_word_one = new ShortestWord($value_one);
        $shortest_word_two = new ShortestWord($value_two);

        $this->assertSame(2, $shortest_word_one->getLength());
        $this->assertSame(1, $shortest_word_two->getLength());
    }

    /**
     * Test if the shortest word is incorrect with the provided string
     */
    public function testIncorrectShortestLength(): void {
        $value_one = "TRUE FRIENDS ARE ME AND YOU";
        $value_two = "I AM THE LEGENDARY VILLAIN";
        $shortest_word_one = new ShortestWord($value_one);
        $shortest_word_two = new ShortestWord($value_two);

        $this->assertNotSame(4, $shortest_word_one->getLength());
        $this->assertNotSame(7, $shortest_word_two->getLength());
    }
}