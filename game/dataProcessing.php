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
            <!-- displays the user logged in -->
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
    <!-- style code to style this page -->
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
      #points {
        font-family: 'Owen Pro', sans-serif;
        font-weight: bold;
        font-size:250%;
        color: #2c443f;
        margin-top: 0px;
      }
      #userDisplay{
        font-family: 'Owen Pro', sans-serif;
        color: #f9f0dd;
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
        font-size: 30px;
        cursor: url("images/cursor2.png"),auto;
      }
      .submit:hover {
        background-color: #f9f0dd;
        color: #486561;
        cursor: url("images/cursor2.png"),auto;
      }
      .gameContainer{
        height: 500px;
        width: 1000px;
        margin: 0 auto;
      }
      .gameBox{
        background-color: white;
        border-radius: 20px;
        height: 500px;
        width: 50%;
        float: left;
      }
      .wordsDisplay{
        background-color: #486561;
        border-radius: 20px;
        height: 500px;
        width: 48.5%;
        float: right;
      }
      .wordsDisplay h2{
        font-family: 'SF Speedwaystar', sans-serif;
        font-size: 45px;
        margin-bottom: 0px;
        text-align:center;
        color: #f9f0dd;
      }
      /* customizing letter selection buttons (code taken from W3 docs https://www.w3docs.com/snippets/css/how-to-style-a-select-box-drop-down-with-only-css.html) */
      .box{
        width: 60px;
        height: 50px;
        border: 1px solid #999;
        font-size: 35px;
        color: #6d9891;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
      .scoreDisplay{
        border-radius: 20px;
        height: 100px;
        width: 50%;
        margin: 0 auto;
      }
      .scoreDisplay p{
        font-family: 'Owen Pro', sans-serif;
        text-align: center;
        font-size: 40px;
        padding-top: 40px;
        height: 100px;
        width: 50%;
        margin: 0 auto;
      }
      /* styling the reset button */
      .reset {
        background-color: #bbc9c4; 
        border-radius: 10px;
        font-family: 'Owen Pro', sans-serif;
        border: none;
        color: #486561;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        cursor: url("images/cursor1.png"),auto;
      }
      .resetClick {
        font-family: 'Owen Pro', sans-serif;
        border: none;
        color: #486561;
        font-size: 26px;
      }
      .resetClick:hover{
        background-color: #486561;
        color: #f9f0dd;
      }
      .reset:onclick {
        color: #bbc9c4;
        cursor: url("images/cursor2.png"),auto;
      }
      #userDisplay{
        font-family: 'Owen Pro', sans-serif;
        color: #f9f0dd;
      }
    </style>
    </head>
  <body>
    <br>
    <br>
    <br>
    <h1> Wordigans </h1>
    <br>
    <h3> MAKE SOME WORDS 😏 </h3>
    <br>
    <div class="gameContainer">
    <div class ="gameBox">
      <table>
        <!-- The following code creates the selection buttons for the user to choose letters -->
      <tr>
        <td style = 'padding:0%;'>
          <?php
             //for the login/logout messages 
              echo "<span style = 'font-family:SF Speedwaystar; color:#6d9891; font-size:22px'>Welcome, ". $_SESSION['username']."</span>";
              echo "<a style = 'color:#6d9891; font-family:SF Speedwaystar; font-size:22px; margin-left:120px'href = '../logout.php'>Logout</a><br><br>"; 
          ?>
          <form action="dataProcessing.php" method="post">
            <!-- letter box #1 -->
            <?php
              $randLetters = file_get_contents("gameData/theLetters.txt");
              $splitLetters = explode("\n", $randLetters);
              // the following code displays the letters on the game page. styling has been done in the same place
              echo "<table><tr><span style='font-family:SF Speedwaystar; font-size: 60px; font-weight bold; background-color: #6d9891; '>‎ $splitLetters[0] ‎</tr><tr><span style='font-family:SF Speedwaystar; font-size: 60px; font-weight bold; background-color: #bbc9c4;'>‎ $splitLetters[1]‎ </tr><tr><span style='font-family:SF Speedwaystar; font-size: 60px; font-weight bold; background-color: #6d9891;'>‎ $splitLetters[2] ‎</tr><tr><span style='font-family:SF Speedwaystar; font-size: 60px; font-weight bold; background-color: #bbc9c4;'>‎ $splitLetters[3] ‎</tr><tr><span style='font-family:SF Speedwaystar; font-size: 60px; font-weight bold; background-color: #6d9891;'>‎ $splitLetters[4] ‎‎ </tr></table><br><br><br>";
            ?>
            <select class="box" name = "letter1">
              <option value = "none"></option>
              <option value = "<?=$splitLetters[0]?>"><?=$splitLetters[0]?></option>
              <option value = "<?=$splitLetters[1]?>"><?=$splitLetters[1]?></option>
              <option value = "<?=$splitLetters[2]?>"><?=$splitLetters[2]?></option>
              <option value = "<?=$splitLetters[3]?>"><?=$splitLetters[3]?></option>
              <option value = "<?=$splitLetters[4]?>"><?=$splitLetters[4]?></option>
            </select>
            <!-- letter box #2 -->
            <select select class="box" name = "letter2">
              <option value = "none"></option>
              <option value = "<?=$splitLetters[0]?>"><?=$splitLetters[0]?></option>
              <option value = "<?=$splitLetters[1]?>"><?=$splitLetters[1]?></option>
              <option value = "<?=$splitLetters[2]?>"><?=$splitLetters[2]?></option>
              <option value = "<?=$splitLetters[3]?>"><?=$splitLetters[3]?></option>
              <option value = "<?=$splitLetters[4]?>"><?=$splitLetters[4]?></option>
            </select>
            <!-- letter box #3 -->
            <select select class="box" name = "letter3">
              <option value = "none"></option>
              <option value = "<?=$splitLetters[0]?>"><?=$splitLetters[0]?></option>
              <option value = "<?=$splitLetters[1]?>"><?=$splitLetters[1]?></option>
              <option value = "<?=$splitLetters[2]?>"><?=$splitLetters[2]?></option>
              <option value = "<?=$splitLetters[3]?>"><?=$splitLetters[3]?></option>
              <option value = "<?=$splitLetters[4]?>"><?=$splitLetters[4]?></option>
            </select>
            <!-- letter box #4 -->
            <select select class="box" name = "letter4">
              <option value = "none"></option>
              <option value = "<?=$splitLetters[0]?>"><?=$splitLetters[0]?></option>
              <option value = "<?=$splitLetters[1]?>"><?=$splitLetters[1]?></option>
              <option value = "<?=$splitLetters[2]?>"><?=$splitLetters[2]?></option>
              <option value = "<?=$splitLetters[3]?>"><?=$splitLetters[3]?></option>
              <option value = "<?=$splitLetters[4]?>"><?=$splitLetters[4]?></option>
            </select>
            <!-- letter box #5 -->
            <select select class="box" name = "letter5">
              <option value = "none"></option>
              <option value = "<?=$splitLetters[0]?>"><?=$splitLetters[0]?></option>
              <option value = "<?=$splitLetters[1]?>"><?=$splitLetters[1]?></option>
              <option value = "<?=$splitLetters[2]?>"><?=$splitLetters[2]?></option>
              <option value = "<?=$splitLetters[3]?>"><?=$splitLetters[3]?></option>
              <option value = "<?=$splitLetters[4]?>"><?=$splitLetters[4]?></option>
            </select>
            </select>
            <br>
            <br>
            <br>
            <input type="submit" class="submit" value="SUBMIT"> 
            <br>
            <br>
            <br>
            <button class="reset" name = "resetGame"><a class="resetClick" href = "game.php">Reset Game</a></button>
          </form>
        </td>
      </tr>
    </table>
    </div>
    <div class="wordsDisplay">
      <h2>WORDS CREATED:</h2>
      <?php
        /* 
          Function 1: noInput
          The purpose of this function is to account for any letter selections the user left blank
          Parameters:
          - $letter [the letter that the user has entered through the selection input]
        */
        function noInput($letter) {
          if($letter == "none") { // when no letter is selected the value is set to none
            return " "; // if "nothing" was entered return a space, changing the original value of the letter from "none" to " "
          }
          else {
            return $letter; // if the user inputed a letter, return that letter 
          }
        }
        /* 
          Function 2: wordValidity
          The purpose of this function is to check if the word entered by the user is actually a word
          Parameters:
          - $wordFile [the file storing words to be checked]
          - $enteredWord [the word the user entered]
        */
        function wordValidity($wordFile, $enteredWord) {
          $textWords = file_get_contents($wordFile); // get and store the words from the corresponding file
          $posWords = explode("\n", $textWords); // split and store the file by line
          for($x = 0; $x < count($posWords); $x++) { // create a loop to run for each index of $posWords
            $wordsAndScores = explode(",", $posWords[$x]); // the words in the file are accompanied by a score, so this splits the score from the word
            if(strcasecmp(trim($enteredWord), trim($wordsAndScores[0])) == 0) { // check if the entered word can be found in the word file
               return $wordsAndScores[1] * 100; // if it is, return the score multiplied by 100 (the scores in the file are small and I want them to be larger values) 
            }
          }
          return "none"; // if the word isn't found, return "none"
        }
        /* 
          Function 3: displayScoreboard
          The purpose of this function is to display all of the words the user generates
          Parameters:
          - $enteredWords [an array containing all the words the user has entered] 
        */
        function displayScoreboard($enteredWords) {
          $wordsToDisplay = "";
          foreach ($enteredWords as $value) { // run a loop to go through each index of the array that holds the words the user entered
            
            $wordsToDisplay = $wordsToDisplay . $value . " "; // as the loop runs, each entered word is assigned to this string seperated by a space                  
          }
          echo "<p style='color: white; font-family: Owen Pro; font-size: 30px; padding-left: 22px; padding-right: 22px; margin-top: 0px; margin-bottom: 0px; text-align: center;'>" . $wordsToDisplay . "</p>"; // echos the string of the entered words
        }
        // store the paths to each files used in variables to easily access
        $file = "gameData/words.txt";
        $fileL3 = "gameData/letters3.txt";
        $fileL4 = "gameData/letters4.txt";
        $fileL5 = "gameData/letters5.txt";
        $text = file_get_contents($file); // store the contents of the file that contains previously guessed words
        $totalScore = file_get_contents("gameData/score.txt"); // retrieve the score of the player from the text file where it is stored
        $enteredWords = explode("\n", $text); // store each word in an array by splitting each line
        $exists = false; // this variable contains a boolean and will determine if a word has already been guessed (exists) or not
        // store the letters that the user inputted
        $letter1 = $_POST["letter1"];
        $letter2 = $_POST["letter2"];
        $letter3 = $_POST["letter3"];
        $letter4 = $_POST["letter4"];
        $letter5 = $_POST["letter5"];
        /*$resetGame = $_POST["resetGame"];*/
        // run the noInput function to account for any words entered empty 
        $letter1 = noInput($letter1);
        $letter2 = noInput($letter2);
        $letter3 = noInput($letter3);
        $letter4 = noInput($letter4);
        $letter5 = noInput($letter5);
        // create a variable to store the word entered (stored as a string)
        $word = $letter1 . $letter2 . $letter3 . $letter4 . $letter5;
        // trim any whitespace at the beginning or end of the word as a result of an empty character selected
        $word = trim($word);
        // count and store the length of the entered word
        $wordLength = strlen($word);
        // create a variable to store the score of the inputed word
        $score = "none";
        /* 
        the following 3 if statements determine the length of the word, and assign the correct text file (text files are sorted by word length).
        in order to score points your word must be between 3-5 characters.
        the function wordValidity is then run, and the returned score is placed in $score
        */
        if($wordLength == 3) {
          $score = wordValidity($fileL3, $word);
        }
        else if($wordLength == 4) {
          $score = wordValidity($fileL4, $word);
        }
        else if($wordLength == 5) {
          $score = wordValidity($fileL5, $word);
        }
        if($score != "none") { // check if a score has been assigned to the entered word (if one has, the entered word is in the wordbank and is valid)
          foreach ($enteredWords as $value) { // this loop runs through each index of the array $enteredWords
            if(strcasecmp($value, $word) == 0) { // this if statement checks if $value (the value assigned to the index of the array) is the same as $word (the word the user entered)
              $exists = true; // if the words are the same, the word already exists and $exists becomes true
              break; // breaks the loop
            }
          }
          if($exists == false) { // if the word does not exist...
            $data = $word."\n"; 
            file_put_contents($file, $data, FILE_APPEND); 
            $enteredWords[count($enteredWords)] = $word; 
            $totalScore = $totalScore + $score;
            file_put_contents("gameData/score.txt", $totalScore); 
          }
        }
        displayScoreboard($enteredWords, $totalScore); // display the scoreboard
        echo "<br>";

        $wordCounter=file_get_contents("gameData/possibleWords.txt");
      ?>  
    </div>
    </div>
    <div class="scoreDisplay"> <!-- displays score of the player -->
      <p id="points">YOUR POINTS: <?php echo "<span style='color: black;'>$totalScore </span>"; ?> <br> POSSIBLE WORDS: <?php echo "<span style='color: black;'>$wordCounter"; ?> <br><br></p>
    </div>
  </body>
</html>