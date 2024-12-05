<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Code Snippets Page
The purpose of this page is to display all of code snippets indicating that we have used all function, arrays, variables, etc required for this project.
-->
<html>
  <head>
  <!--A list of stylesheets we used to style our webpages-->
  <link href="https://fonts.cdnfonts.com/css/sf-speedwaystar-2" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet"> 
  <link rel = "icon" href = "/images/tyrone.jpg">  <!-- loads favicon-->
  <link href="style.css" rel="stylesheet" type="text/css"/> <!--links the index page to the style sheet -->
  <!--The following creates the taskbar for the code snippets page-->
    <table class = "taskbar">
      <tr>
        <td class = "taskbarLinks">
          <a href = "/index.php" title = "go to the home page">home</a><!--A link to the homepage-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/signUp.php" title = "go to the sign up page">sign up</a><!--A link to the sign up page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/login.php" title = "you are on this page">login</a><!--A link to the login page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "instructions.php" title = "go to the how to play page">how to play</a><!--A link to the how to play page-->
        </td>
        <td class = "taskbarLinks" style = "border-color:#ebe4e1";>
          <a href = "codeSnippets.php" title = "go to the code snippets page">code snippets</a><!--A link to the code snippets page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/game/game.php" title = "go to the game page">the game</a><!--A link to the game page-->
        </td>
        <td class = "taskbarUser">
          <p id="loginDisplay">
            <!-- The following tells the user if they are logged in or logged out-->
            <?php
              $file = file_get_contents("data/login.txt");
              if($file==" "){
                echo "not logged in";//not logged in if loginFile is empty 
              }
              else{
                echo $_SESSION['username'];
                echo "<a href = 'logout.php'>‎‎ <img src='images/logout.png' <span style='height: 30px; width: 30px'></a>";
              }
            ?>
          </p>
        </td>
      </tr>
    </table>
  <!--The following is the CSS for the Code Snippets Page-->
  <style>
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
    
    h2{
      color:#6a7c79; 
      font-size:70px; 
    }
    .selection{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
      height:500px; 
    }
     #img1{
      color: #f9f0dd;
      margin:52px 20px;
      width:750px; 
      border-radius:50px; 
      padding:20px; 
    }
    .selection p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:140px 20px;
      width:750px;
      border-radius:50px; 
      padding:10px; 
      color:#f9f0dd;
      height:250px; 
    }
    .repetition{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img2{
      color: #f9f0dd;
      margin:30px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:350px; 
    }
    .repetition p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:130px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd; 
    }
    .arrays{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img3{
      color: #f9f0dd;
      margin:30px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:400px; 
    }
    .arrays p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:130px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd; 
    }
    .stringFunctions{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img4{
      color: #f9f0dd;
      margin:30px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:400px;  
    }
    .stringFunctions p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:130px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd; 
    }
     .withReturn{
      background-color:#2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img5{
      color: #f9f0dd;
      margin:30px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:400px;
    }
    .withReturn p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:130px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd;
    }
    .withParameters{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img6{
      color: #f9f0dd;
      margin:30px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:350px;
    }
    .withParameters p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:130px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd;
    }
    .functionThree{
     background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      display:flex;
      flex-direction:row; 
      width:1500px;
    }
    #img7{
      color: #f9f0dd;
      margin:30px 20px;
      width:900px;
      height: 700px;
      border-radius:50px; 
      padding:20px; 
    }
    .functionThree p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      margin:150px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      color:#f9f0dd;
    }
    .fileInputOutput{
      background-color: #2c443f;
      border-radius: 20px;
      height: 500px;
      width: 1500px;
      margin: 0 auto;
      display:flex;
      flex-direction:row; 
    }
    #img8{
      color: #f9f0dd;
      margin:80px 20px;
      width:750px;
      border-radius:50px; 
      padding:20px; 
      height:300px;
    }
    .fileInputOutput p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 20px;
      color: #f9f0dd;
      padding-top: 80px;
      padding-right: 40px;
    }
  </style>
    <br>
    <br>
    <title>Code Snippets</title> <!--This is the title of this page -->
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1>Code Snippets</h1><br><!--This is the heading for this page--> 
    <center>
      <h2>Selection</h2><!--This is a heading indicating we used selection in our website--> 
      <div class = "selection">
        <img id = "img1" src = "images/selection.png"> 
        <p><!--This is a paragraph explaining how we used selection in our website--> 
          Here is an example of selection. The purpose of this selection is to evaluate the length of a word inputted by the user and place the word in its appropriate file. This If Statement starts off with evaluating if the length of the word is 3, and if this is true, it will execute the code inside of the brackets. However, if the length of the word is not 3, the program will move onto the next line and will evaluate if the length of the word is 4. If this is true, it will execute this line of the code. As you can see, there is no "else" statement because in our game, words can only be between 3-5 letters. 
        </p>
      </div>
    </center>
    <h2>Repetition</h2><!--This is a heading indicating we used repetition in our website--> 
    <center>
      <div class = "repetition">
        <img id = "img2" src = "images/repetition2.png">
        <p><!--This is a paragraph explaining how we used repetition in our website--> 
          Here is an example of repetition. The purpose of this for loop is to search through the array "$users" and explode each line using the "," delimiter. The array's elements are assigned to the variable called "$lines" in a new array that stores the user's data. If the user's username and password matches with the 2nd index and the 3rd index in the registered user's data, an echo statement will tell the user that they have successfully logged in and can proceed to the game.
        </p>
      </div>
    </center>
    <center>
      <h2>Arrays</h2><!--This is a heading indicating we used arrays in our website--> 
      <div class = "arrays">
        <img id = "img3" src = "images/arrays.png"> 
        <p><!--This is a paragraph explaining how we used arrays in our website--> 
          Here is an example of an array being used in this function. The explode function splits up all the elements by the "\n" delimiter in the string $textWords, which contains the content in the $wordFile (all possible words that the user can guess). After being exploded, all of the elements are stored in the $posWords array. This array is used to search  if the user has inputted a valid word.  
        </p>
      </div>
    </center>
      <h2>String Functions</h2><!--This is a heading indicating we used string functions in our website--> 
      <center>
        <div class = "stringFunctions">
          <img id="img4" src="images/arrays.png">
          <p><!--This is a paragraph explaining how we used string functions in our website--> 
            Here is an example of 3 different string functions. The count() function will return the number of elements in the array $posWords. The strcasecmp() function will take 2 parameters, the $enteredWord and the $wordsAndScores, to check if the word entered by the user is possible based on what's in the word file regardless of capitalization. The trim() function will get rid of any extra spaces at the end or beginning of a string. If the two strings are equal, it will return 0. 
          </p>
        </div>
      </center>
    <h2>Custom Function #1 - With a Return Value</h2><!--This is a heading indicating we used functions with a return value in our website--> 
    <center> 
      <div class = "withReturn">
        <img id = "img5" src = "images/returnValue.png"> 
        <p><!--This is a paragraph explaining how we used a function with a return value in our website--> 
          Here is an example of a custom function with a return value. The purpose of this function is to account for any letters that the user left empty. Letters left empty are assigned a value of "none". If a $letter is assigned a value of "none", this function returns the $letter variable as a space instead of "none".   
        </p>
      </div>
    </center>
    <h2>Custom Function #2 - With Parameters</h2><!--This is a heading indicating we used functions with parameters on our website--> 
    <center>
      <div class = "withParameters">
        <img id = "img6" src = "images/function2.png"> 
        <p><!--This is a paragraph explaining how we used a function with parameters in our website--> 
          Here's an example of a custom function with a parameter. The parameter in this function is an array containing strings of entered words ($enteredWords). The function then contains a foreach loop which runs through each index of the $enteredWords array, and places each index in one string. Each word is seperated by a space. The string is then echoed using CSS to display all the words the user entered on the scoreboard.
        </p>
      </div>
    </center>
    <h2>Custom Function #3</h2><!--This is a heading indicating we used custom functions on our website--> 
    <center>
      <div class = "functionThree">
      <img id = "img7" src = "images/functionThree2.png"> 
        <p><!--This is a paragraph explaining how we used another custom function in our website--> 
          Here is an example of another custom function. The purpose of this function is to generate 5 random letters. We used the built in php function random_int() to generate a random integer from 1-25. This function has two parameters, the minimum and maximum range of numbers to be randomized. We used do while loops to continously randomize an integer and check if it has already been generated. This way all 5 generated numbers are different. After generating the numbers, a file containing each letter of the alphabet on a new line is read, stored, and split into the array $alphabet. Finally, we create a string filled with 5 letters based on the randomly generated integers. Each letter is generated by 5 letters form the alphabet array by taking the index of the 5 generated integers. There will be no repeating letters since all the integers are unique. These letters are seperated by a new line and then stored into a file.   
        </p>
      </div>
    </center>
    <h2>File Input and Output</h2><!--This is a heading indicating we used file input and output on our website--> 
    <div class = "fileInputOutput">
    <img id = "img8" src = "images/fileIO3.png"> 
      <p><!--This is a paragraph explaining how we used file input/output in our website--> 
        In this example, we use the "file_get_contents" function and the "file_put_contents" function. We use the file_get_contents function in order to retrieve the letters of the alphabet from a seperate txt file called "alphabet.txt" under the gameData folder. After exploding each line from the txt file into an array that contains each letter of the alphabet and creating a new string that contains a random letter from the alphabet, we place that new string into "theLetters.txt" file in order to store the current letters for that round. In doing so, we are able to easily access the letters for that particular game. This is all contained within the randomizeLetters function without "FILE_APPEND" in order to allow the user to get another set of letters that can overwrite the existing information in theLetters.txt. 
      </p>
    </div>
  </body>
</html>