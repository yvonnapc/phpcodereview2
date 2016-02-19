<?php
require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase{

  function test_RepeatCounter_notPresent()
  {
    //Arrange
    $test_RepeatCounter = new RepeatCounter;
    $word_input = "henry";
    $phrase_input = "I love coffee";
    //Act
    $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
    //Assert
    $this->assertEquals("0", $result);
  }
  function test_RepeatCounter_oneMatch()
  {
    //Arrange
    $test_RepeatCounter = new RepeatCounter;
    $word_input = "coffee";
    $phrase_input = "coffee";
    //Act
    $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
    //Assert
    $this->assertEquals("1", $result);
  }
  function test_RepeatCounter_amongOtherWords()
  {
    //Arrange
    $test_RepeatCounter = new RepeatCounter;
    $word_input = "coffee";
    $phrase_input = "I love coffee";
    //Act
    $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
    //Assert
    $this->assertEquals("1", $result);
  }
  function test_RepeatCounter_multiple()
  {
    //Arrange
    $test_RepeatCounter = new RepeatCounter;
    $word_input = "captain";
    $phrase_input = "Oh captain my captain";
    //Act
    $result = $test_RepeatCounter->countRepeats($word_input, $phrase_input);
    //Assert
    $this->assertEquals("2", $result);
  }

}

 ?>
