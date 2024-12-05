<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Login Page
The purpose of this page is for users to login if they are already a registered user 
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
  <!--A list of stylesheets we used to style our webpages-->
  <link href="https://fonts.cdnfonts.com/css/sf-speedwaystar-2" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet"> 
  <link rel = "icon" href = "/images/uniqlo.jpg">  <!-- loads favicon-->
  <link href="style.css" rel="stylesheet" type="text/css"/> <!--links the index page to the style sheet -->
    <table class = "taskbar">
      <tr>
        <td class = "taskbarLinks">
          <a href = "/index.php" title = "go to the home page">home</a><!--A link to the homepage-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/signUp.php" title = "go to the sign up page">sign up</a><!--A link to the sign up page-->
        </td>
        <td class = "taskbarLinks" style = "border-color:#ebe4e1;">
          <a href = "/login.php" title = "you are on this page">login</a><!--A link to the login page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "instructions.php" title = "go to the instructions page">how to play</a><!--A link to the how to play page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "codeSnippets.php" title = "go to the code snippits page">code snippets</a><!--A link to the code snippets page-->
        </td>
        <td class = "taskbarLinks">
          <a href = "/game/game.php" title = "go to the game page">the game</a><!--A link to the game page-->
        </td>
        <td class = "taskbarUser">
          <!-- * see who is currently logged in and display username at the top * -->
          <p id="loginDisplay">
            <?php
              $file = file_get_contents("data/login.txt");
              if($file==" "){
                echo "not logged in";
              }
              else{
                echo $_SESSION['username'];;
                echo "<a href = 'logout.php'>‎‎ <img src='images/logout.png' <span style='height: 30px; width: 30px'></a>";
              }
            ?>
          </p>
        </td>
      </tr>
    </table>
  <!-- CSS and styling for the login page -->
  <style>
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
    input[type = text]{
      width:300px; 
      height:40px; 
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #486561;
      background-color:#C7E2D9; 
  }
    input[type = password]{
      width:300px; 
      height:40px; 
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #486561;
      background-color:#C7E2D9; 
  }
  fieldset{
      width:430px;
      height:400px; 
      border-radius:30px; 
      border: 3px solid #486561; 
    }
    img{
      width:60px;
      height:55px;
      border-radius:40px; 
    }
    .signUpSub{
      width:220px;
      height:30px; 
      border-radius:40px; 
      border:2px solid #486561; 
      background-color:#486561; 
      color:#f9f0dd; 
      font-weight:bold;
    }
    .sgnUpSub:hover{
      cursor: url("images/cursor2.png"),auto;
    }
    p{
      font-family: 'Owen Pro', sans-serif;
      color:#486561;
    }
  </style>
    <br>
    <br>
    <title>Login Page</title> <!--This is the title of this page -->
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1>Login</h1><br><br> 
    <!--The following form is used for the member to login if they have already registered-->
    <form action = "loginScript.php" method = "post">
      <center>
        <fieldset>
          <h2>MEMBER LOGIN</h2>
          <legend align = "center"><img src = "images/user.webp"></legend><!--Icon used for visual appeal-->
            <span id = "userInput">
              <input type = "text" name = "username" placeholder = "username"><br><!--The user inputs their username here-->
            </span>  
            <span id = "userInput"><br>
              <input type = "password" name = "password" placeholder = "password"><br><br><!--The user inputs their password here--> 
            </span> 
            <span id = "submit">
              <input class="signUpSub" type = "submit" name = "submit" value = "login"><br><!--By clicking here, the user will be directed to the game page--> 
            </span>
            <p>Don't have an account? <a href = "signUp.php">Sign up</a></p><!--Telling the user to sign up if they don't have an account-->
        </fieldset>
      </center>
    </form>
  </body>
</html>