<?php
   $words = array("superman","hulk","iceman","flash","storm","wolverine","spiderman","thor","raven","phantom");
  // generates random word to guess
   $randomWord = $words[array_rand($words)];
  // print_r($randomWord);
  // making random word iterable
 // $array = str_split($randomWord);
   $unknownLetters = array();
   $guessesAvailable = 0;
// iterating through randomword and inserting "_ "
   for ($i=0; $i < strlen($randomWord); $i++) {
   $unknownLetters[$i]= "_";
}
  $remainingLetters = strlen($randomWord);
    // print_r($unknownLetters);

    while ($remainingLetters > 0 ) {
    echo implode(" ", $unknownLetters);
      echo "\n";
      echo "There are " . strlen($randomWord) . " letters of superheros name" ;
      echo "\n";
 // echo implode(' ', $unknownLetters);
  echo "Please guess a letter ";
  $guesses = trim(fgets(STDIN));
   if (strlen($guesses) !== 1 ) {
     echo "Enter a single letter please.";
   }else {
     for ($j=0; $j < strlen($randomWord); $j++) {
       if ($randomWord[$j] === $guesses) {
         $unknownLetters[$j] = $guesses;
         $remainingLetters--;
         $guessesAvailable--;

          }
        }
      $guessesAvailable++;
      echo "You have ".(6- $guessesAvailable)." guess available.";
      echo "\n";
     }
     if ($guessesAvailable>=6) {
       echo "Game over";
       echo "\n";
       exit("restart");
     }
 }
echo "You win! The correct word is ". $randomWord;
 ?>
