<?php
    class RepeatCounter
    {
      private $word_input;
      private $phrase_input;

      function __construct($inputtedWord, $inputtedPhrase)
      {
        $this->word = $inputtedWord;
        $this->phrase = $inputtedPhrase;
      }
      function setWord($new_word_input)
      {
        $this->word = $new_word_input;
      }
      function getWord()
      {
        return $this->word;
      }
      function setPhrase($new_phrase_input)
      {
        $this->phrase = $new_phrase_input;
      }
      function getPhrase()
      {
        return $this->phrase;
      }
      function countRepeats($word_input, $phrase_input)
      {
        return preg_match_all("/\b($this->word)\b/i", $this->phrase, $matched);
      }

          // $stringInput = preg_match('/[^a-z0-9]+/gi', ' ', $phrase_input);
          // $stringInput = strtolower($word_input);
          //
          // $phrase_array = explode(" ", $phrase_input);
          //
          // $counter = 0;
          //
          // foreach($phrase_array as $word)
          //   {
          //       if($phrase_input == $word)
          //       {
          //         $counter = $counter + 1;
          //       }
          //
          //   }return $counter;


    }
 ?>
