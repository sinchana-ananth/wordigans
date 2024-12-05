<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma
2/16/2023
Unit 1 Assignment Home Page
The purpose of this assignment is to utilize all concepts that we learned in unit 1 and create a HTML, CSS and PHP web base software.
-->
<html>
  <head>
    <title>Unit 1 Assignment</title> <!--This is the title of our website -->
    <link href="style.css" rel="stylesheet" type="text/css" /> <!-- This code links the index page to the style sheet -->
    <link rel = "icon" href = "/images/pablo.png">  <!-- loads favicon-->
    <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet">  <!-- loads font-->
  </head>
  <body>
   <table class = "taskbar">
      <tr>
        <td class = "taskbarLinks" style = "border-color:#ebe4e1;">
          <a href = "/index.php" title = "you are on this page" >home</a><!--A link to the home page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "signUp.php" title = "go to the sign up page">sign up</a><!--A link to the sign up page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "login.php" title = "go to the login page">login </a><!--A link to the login page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "instructions.php" title = "go to the game page">how to play</a><!--A link to the how to play page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "codeSnippets.php" title = "go to the code snippits page">code snippets</a><!--A link to the code snippets page-->
        </td>
         <td class = "taskbarLinks">
          <a href = "/game/game.php" title = "go to the game page">the game</a><!--A link to the game page-->
        </td>
        <td class = "taskbarUser">
          <p id="loginDisplay">
            <?php
              $file = file_get_contents("data/login.txt");
              if($file==" "){
                echo "not logged in";
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
    <br>
    <br>
    <br>
    <h1 id="mainTitle">WORDIGANS</h1><!--Our game title-->
    <div class="container">
      <p>Our game is similar to 'boggle', but better (and aesthetic)! Please login, or create an account if you're new, and visit our 'how to play' page for our game instructions. <br> Have fun! </p><!--An explanation of our game-->
    </div>
    <div class="avatars">
      <h2>⇨ THE CREATORS ⇦</h2><!--The creators of our game-->
      <div class="row">
          <div class="column">
            <img src="images/sinchana.png" alt="Sinchana" style="width:100%"><!--image of creator-->
            <br>
            <figcaption>sinchana<br>ananth</figcaption><!--name of creator-->
          </div>
        <div class="column">
          <img src="images/libby.png" alt="Libby" style="width:100%"><!--image of creator-->
          <br>
          <figcaption>libby<br>estabrooks</figcaption><!--name of creator-->
        </div>
        <div class="column">
          <img src="images/farah.png" alt="Farah" style="width:100%"><!--image of creator-->
          <br>
          <figcaption>farah<br>mirza</figcaption><!--name of creator-->
        </div>
        <div class="column">
          <img src="images/izma.png" alt="Izma" style="width:100%"><!--image of creator-->
          <br>
          <figcaption>izma<br>mujeeb</figcaption><!--name of creator-->
        </div>
      </div>
    </div>
    <br>
    <br>
  </body>
</html>
