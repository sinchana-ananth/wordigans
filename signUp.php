<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Sign Up page
The purpose of this page is for users to sign up if they do not have an account 
-->
<!-- 
Colors:
#6d9891 
#afac9b
#afac9b
#f69f82
#f69f82
#76575d
-->
<html>
  <head>
  <!--The following is a list of stylesheets that we used in our webpages-->
  <link href="https://fonts.cdnfonts.com/css/sf-speedwaystar-2" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet"> 
  <link rel = "icon" href = "/images/tasha.jpg">  <!-- loads favicon--> 
  <link href="style.css" rel="stylesheet" type="text/css"> <!--links the sign up page to the style sheet -->
  <!--The following is the taskbar for this webpage-->
    <table class = "taskbar">
      <tr>
        <td class = "taskbarLinks" >
          <a href = "/index.php" title = "go to the home page">home</a><!--A link to go to the homepage-->
        </td>
        <td class = "taskbarLinks" style = "border-color:#ebe4e1;>
          <a href = "/signUp.php" title = "you are on this page">sign up</a><!--A link to go to the sign up page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/login.php" title = "go to the login page">login</a><!--A link to go to the login page-->
        </td>
      <td class = "taskbarLinks">
          <a href = "instructions.php" title = "go to the instructions page">how to play</a><!--A link to go to the how to play page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "codeSnippets.php" title = "go to the code snippits page">code snippets</a><!--A link to go to the code snippets page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/game/game.php" title = "go to the game page">the game</a><!--A link to go to the game page-->
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
  <!--The following is the CSS and styling for the webspage-->
  <style>
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
    input[type = text]{
      width:330px; 
      height:40px; 
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #486561;
      background-color:#C7E2D9; 
  }
    input[type = password]{
      width:330px; 
      height:40px; 
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #486561;
      background-color:#C7E2D9; 
  }
  fieldset{
      width:500px;
      height:500px; 
      border-radius:30px; 
      border: 3px solid #486561; 
    }
    img{
      width:60px;
      height:55px;
      border-radius:40px; 
    }
    input[type = submit]{
      width:220px;
      height:30px; 
      border-radius:40px; 
      border:2px solid #486561; 
      background-color:#486561; 
      color:#f9f0dd; 
      font-weight:bold; 
    }
    p{
      font-family: 'Owen Pro', sans-serif;
      color:#486561;
    }
  </style>
    <br>
    <br>
    <title>Sign Up Page</title> <!--This is the title of this page -->
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1>Sign Up</h1><br><br> 
    <form action = "signUpScript.php" method = "post"><!--send information to signUpScript-->
      <center>
        <fieldset>
          <!--create log in form with text fields for name, last name, username, and password-->
          <h2>MEMBER SIGN UP</h2>
          <legend align = "center"><img src = "images/user.webp"></legend><!--Icon used for a visual appeal-->
            <span id = "userInput">
              <input type = "text" name = "firstName" placeholder = "first name"><br><br><!--The user inputs their first name--> 
              <input type = "text" name = "lastName" placeholder = "last name"><br><br><!--The user inputs their last name--> 
              <input type = "text" name = "username" placeholder = "username"><br><br><!--The user inputs their username-->  
              <input type = "password" name = "password" placeholder = "password"><br><br><!--The user inputs their password-->  
            </span> 
            <!--submit button-->
            <span id = "submit">
              <input type = "submit" name = "submit" value = "sign up"><br><!--The user will be redirected to the sign up script page--> 
            </span>
            <p>Already have an account? <a href = "login.php">Login</a></p><!--link to login page if user already has an account-->
        </fieldset>
      </center>
    </form>
  </body>
</html>