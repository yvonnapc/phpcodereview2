<?php
    class RepeatCounter
    {
        function countRepeats($word_input, $phrase_input)
        {
          $phrase_input = preg_replace('/[^a-z0-9]+/i', ' ', $phrase_input);
          $phrase_input = strtolower($phrase_input);
          $phrase_array = explode(" ", $phrase_input);
          $counter = 0;

          foreach($phrase_array as $word)
          {
              if($word_input == $word)
              {
                $counter = $counter + 1;
              }
            return $counter;
          }
        }
    }
 ?>
