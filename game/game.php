<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma
2/16/2023
Unit 1 Assignment Game Page
The purpose of this page is to create our game.
-->
<html>
  <head>
    <title>Game Page</title> <!--This is the title of this page -->
    <link href="/style.css" rel="stylesheet" type="text/css" /> <!-- This code links the game page to the style sheet -->
    <link rel = "icon" href = "../../images/backyardigans.png">  <!-- loads favicon-->
    <style>
      table {
        position:relative;
        top:10%;
        text-align:center;
        width:100%;
      }
      .letter {
        border-style:solid;
        background-color:#6d9891;
        padding:0.4%;
        font-family: 'Owen Pro', sans-serif;
        font-size:160%;
        color:#f9f0dd;
        border-color:#6d9891;
        transition-duration:0.4s;
        
      }
      .letter:hover {
        background-color:#91b5af;
        cursor:pointer;
      }
      .input {
        position:absolute;
        opacity:0%;
        cursor:pointer;
        height:0%;
        width:0%;
      }
      .letterContainer input:checked ~ .letter{
        background-color:#292933;
      }
      /* styling the submit button */
      .submit {
        background-color: #2c443f; 
        border-radius: 10px;
        font-family: 'Owen Pro', sans-serif;
        border: none;
        color: #f9f0dd;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 100px;
      }
      .submit:hover {
        background-color: #f9f0dd;
        color: #486561;
        cursor: pointer;
      }
      .gameContainer{
        height: 40%;
        width: 80%;
        margin-left: 20%;
      }
      .gameBox{
        background-color: white;
        border-radius: 20px;
        height: 160%;
        width: 80%;
        float: left;
      }
      #underscores{
        font-family: 'Owen Pro', sans-serif;
        font-size: 40px;
        text-align: center;
        color: #6d9891;
      }
      .wordsDisplay{
        background-color: #486561;
        border-radius: 20px;
        height: 400px;
        width: 50%;
        float: right;
      }
      .wordsDisplay h2{
        font-family: 'SF Speedwaystar', sans-serif;
        font-size: 35px;
        margin-bottom: 0px;
        text-align:center;
        color: #f9f0dd;
      }
      /* customizing letter selection buttons (code taken from W3 docs https://www.w3docs.com/snippets/css/how-to-style-a-select-box-drop-down-with-only-css.html) */
      .box{
        width: 50px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #6d9891;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
      #userDisplay{
        font-family: 'Owen Pro', sans-serif;
        color: #f9f0dd;
      }
    </style>
    <table class = "taskbar">
      <tr>
        <td class = "taskbarLinks">
          <a href = "/index.php" title = "you are on this page" >home</a>
        </td>
        <td class = "taskbarLinks">
          <a href = "/signUp.php" title = "go to the sign up page">sign up</a>
        </td>
        <td class = "taskbarLinks">
          <a href = "/login.php" title = "go to the login page">login </a>
        </td>
        <td class = "taskbarLinks">
          <a href = "../instructions.php" title = "go to the instructions page">how to play</a>
        </td>
        <td class = "taskbarLinks">
          <a href = "/codeSnippets.php" title = "go to the code snippits page">code snippets</a>
        </td>
        <td class = "taskbarLinks" style = 'border-color:#ebe4e1'">
          <a href = "/game/game.php" title = "go to the game page">the game</a>
        </td>
        <td class = "taskbarUser">
          <p id="loginDisplay">
            <?php
              $file = file_get_contents("../data/login.txt");
              if($file==" "){
                echo "not logged in";
              }
              else{
                echo $_SESSION['username'];
                echo "<a href = '../logout.php'>‎‎ <img src='../images/logout.png' <span style='height: 30px; width: 30px'></a>";
              }
            ?>
          </p>
        </td>
      </tr>
    </table>
    <script>
    </script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1> Game Page </h1>
    <br>
    <br>
    <div class="gameContainer">
    <div class ="gameBox">
      <table>
        <!-- The following code creates the selection buttons for the user to choose letters -->
      <tr>
        <td style = 'padding:6%;'>
          <form action="dataProcessing.php" method="post">
          
            <br><br><br><br><input type="submit" class="submit" value = "CLICK HERE TO PLAY!" title = "Please press to play the game!">
          </form>
        </td>
      </tr>
    </table>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php 
      /* 
        Function 1: randomizeLetters
        The purpose of this function is to randomize 5 letters to be used in the game
        Parameters:
        none
      */
      function randomizeLetters() {
        // the next 5 lines of code are used to generate 5 random numbers from 0-25 using the php built in function random_int https://www.php.net/manual/en/function.random-int.php
        $randNum1 = random_int(0, 25); 
        do {
          $randNum2 = random_int(0, 25);
        } while ($randNum2 == $randNum1); // i used do while loops to continously generate random numbers until all 5 letters are unique
        do {
          $randNum3 = random_int(0, 25);
        } while ($randNum3 == $randNum1 || $randNum3 == $randNum2);
        do {
          $randNum4 = random_int(0, 25);
        } while ($randNum4 == $randNum1 || $randNum4 == $randNum2 || $randNum4 == $randNum3);
        do {
          $randNum5 = random_int(0, 25);
        } while ($randNum5 == $randNum1 || $randNum5 == $randNum2 || $randNum5 == $randNum3 || $randNum5 == $randNum4);
        
        $alphabetFile = file_get_contents("gameData/alphabet.txt"); // read in the contents from the file alphabet.txt / this file contains all the letters in the alphabet
        
        $alphabet = explode("\n", "$alphabetFile"); // explode the contents of the file into an array so that each index of the array is a different letter in alphabetical order
        
        $letterString = $alphabet[$randNum1] . "\n" . $alphabet[$randNum2] . "\n" . $alphabet[$randNum3] . "\n" . $alphabet[$randNum4] . "\n" . $alphabet[$randNum5]; // create an array to hold letters determined by randomly generated index of the alphabet array
        
        file_put_contents("gameData/theLetters.txt", $letterString); // place the randomized letters into a text file
      }
      /* 
        Function 2: possibleWords
        The purpose of this function is to determine how many possible word combinations exist with a set of 5 randomized letters
        Parameters:
        - $wordFile [a string containing the path to the file containing possible words]
        - $wordLength [the length of the words in the file]
      */
      function possibleWords($wordFile, $wordLength) {
          $textWords = file_get_contents($wordFile); // get and store the words from the corresponding file
          $posWords = explode("\n", $textWords); // split and store the file by line
          $randLetters = file_get_contents("gameData/theLetters.txt"); // get and store the 5 randomized letters from theLetters.txt
          $splitLetters = explode("\n", $randLetters); // split the letters by \n (each letter in the file is stored on a new line) and store into an array
          // create 2 counter variables to be used later
          $count1 = 0;
          $count2 = 0;
          for($x = 0; $x < count($posWords); $x++) { // create a loop to run for each index of $posWords
            $count1 = 0; // reset the first counter at the beginning of each loop                                     
            $wordsAndScores = explode(",", $posWords[$x]); // the words in the file are accompanied by a score, so this splits the score from the word and stores the word in index 0 of an array and its score in index 1                                     
            for($y = 0; $y < $wordLength; $y++) { // create a loop to iterate for each letter in the word stored in $wordsAndScores (runs amount of times as the entered parameter $wordLength)                                
              $indexLetter = substr($wordsAndScores[0], $y, 1); // create a substring to hold the character of the word stored in $wordsAndScores at position $y                                  
              if(strcasecmp(trim($indexLetter), trim($splitLetters[0])) == 0 || strcasecmp(trim($indexLetter), trim($splitLetters[1])) == 0 || strcasecmp(trim($indexLetter), trim($splitLetters[2])) == 0 || strcasecmp(trim($indexLetter), trim($splitLetters[3])) == 0 || strcasecmp(trim($indexLetter), trim($splitLetters[4])) == 0) { // check if this character is one of the 5 randomly generated letters 
                $count1++; // if it is, increase counter 1 
              }
            }
            if($count1 == $wordLength) { // once each character of the word stored in $wordsAndScores at position 0 has been compared to the randomized letters, if the counter is equal to the length of the word...
              $count2++; // increase counter 2 because every letter in the word is one of the randomly generated letters!
              // echo $wordsAndScores[0] . " "; <-- this code 
            }
            
          }
          return $count2; // return counter 2 which stores how many possible words were found
        }
      // reset the game (the score and generated words)
      file_put_contents("gameData/score.txt", 0);
      file_put_contents("gameData/words.txt", "");
      do {
        randomizeLetters(); // run the function to randomize letters

        $totalCount = possibleWords("gameData/letters3.txt", 3); // check how many 3 letter words can be created with the randomized letters, and store this in $totalCount
        $totalCount = $totalCount + possibleWords("gameData/letters4.txt", 4); // check how many 4 letter words can be created with the randomized letters, and store this in $totalCount
        $totalCount = $totalCount + possibleWords("gameData/letters5.txt", 5); // check how many 5 letter words can be created with the randomized letters, and store this in $totalCount
      } while ($totalCount <= 5); // run this loop until at least 5 possible words can be generated with the randomized letters!
      file_put_contents("gameData/possibleWords.txt", $totalCount); // store how many possible words can be created?
    ?>
  </body>
</html>