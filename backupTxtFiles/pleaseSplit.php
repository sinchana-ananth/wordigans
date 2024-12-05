<?php // this code was just used to split the words and scores so that I didn't have to press enter over 9000 times :)
  $file="5LetterWords.txt";
  $file2="letters5.txt";
  $text = file_get_contents($file);
  $words = preg_split('/[0-9]+/', $text);
  $numbers = preg_split('/[a-z]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
  $count = 0;
  foreach ($words as $word)
    {
      $data = "$word,$numbers[$count] \n";
      $count++;
      file_put_contents($file2, $data, FILE_APPEND);
    }
?>