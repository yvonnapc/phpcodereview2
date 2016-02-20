<?php
    class RepeatCounter

    {
        function countRepeats($sentence_input, $word_input)
        {
            $sentence_input = preg_replace('/[^a-z0-9]+/i', ' ', $sentence_input);
            $sentence_input = strtolower($sentence_input);
            $sentence_array = explode(" ",$sentence_input);
            $counter = 0;

            foreach($sentence_array as $word)
            {
                if($word_input == $word)
                {
                    $counter++;
                }
            }
            return $counter;
        }
    }
    // {
    //   private $word;
    //   private $phrase;
    //
    //   function __construct($inputtedWord, $inputtedPhrase)
    //   {
    //     $this->word = $inputtedWord;
    //     $this->phrase = $inputtedPhrase;
    //   }
    //   function setWord($newWord)
    //   {
    //     $this->word = $newWord;
    //   }
    //   function getWord()
    //   {
    //     return $this->word;
    //   }
    //   function setPhrase($newPhrase)
    //   {
    //     $this->phrase = $newPhrase;
    //   }
    //   function getPhrase()
    //   {
    //     return $this->phrase;
    //   }
      // function countRepeats($word_input, $phrase_input)
      // {
      //   $counter = 0;
      //
      //   $stringPhrase = preg_match_all('/[^a-z0-9]+/gi', ' ', $phrase_input);
        // return preg_match_all("/\b($this->word)\b/i", $this->phrase, $matched);
      // }  return $counter;

          // $stringInput =
          // $stringInput = strtolower($word_input);
          //
          // $phrase_array = explode(" ", $phrase_input);
          //
          //
          //
          // foreach($phrase_array as $word)
          //   {
          //       if($phrase_input == $word)
          //       {
          //         $counter = $counter + 1;
          //       } return $counter
?>
