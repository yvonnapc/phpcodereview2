<?php
require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase{

  function test_RepeatCounter_oneWord()
  {
    //Arrange
    $test_RepeatCounter = new RepeatCounter;
    $first_input = "henry";
    $second_input = "I love henry, henry is the best dog";
    //Act
    $result = $test_RepeatCounter->countRepeats($first_input, $second_input);
    //Assert
    $this->assertEquals("2", $result);
  }

}

 ?>
