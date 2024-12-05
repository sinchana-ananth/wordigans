<?php
    session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Login Script page
The purpose of this page is to direct users to our game after they have logged in   
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
  <link href="https://fonts.cdnfonts.com/css/sf-speedwaystar-2" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet"> 
  <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/512/2250/2250092.png"> 
  <link href="https://fonts.cdnfonts.com/css/bochild-2" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" /> <!-- This code links the index page to the style sheet -->
  <style>
    @import url('https://fonts.cdnfonts.com/css/bochild-2');
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
  </style>
    <br>
    <br>
    <title>Login Script Page</title>
  </head> 
    <body> 
    <?php
      /* takes the entered username, password, and registered users from file*/ 
      $username = $_POST["username"];
      $password = $_POST["password"];  
      $file = "data/userInfo.txt"; 
      $data = file_get_contents($file); 
      /* creating an array from the registered users */ 
      $users = explode("\n", $data); 
      $found = false; //assume user is not already found 
      /* warn user if no username or password is entered and prompt them to login again*/ 
      if($username == "" || $password == "")
        {
            echo "<center>";
            echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>⚠📢WARNING📢⚠</span><br><br>"; 
            echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Make sure all fields are entered!</span><br>"; 
            echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Please try again <a style = 'color:#C7E2D9' href = 'login.php'>here</a></span></div>"; //prompt uder to login again 
            echo "</center>";
            exit;  //exit from rest of code 
        }
      /* Check through the arrays of registered users and find if user is a registered user */ 
      for($x = 0; $x<count($users); $x++)
        {
          $lines = explode(",", $users[$x]); //create array about each user's info 
          $loginFile = "data/login.txt"; 
          /* Check if username and password matches for a registered user */
          if(strcasecmp(trim($username), trim($lines[2])) == 0 && strcasecmp(trim($password), trim($lines[3])) == 0)
            {   
             file_put_contents($loginFile, $username); //place username of the person currently using website in logInFile
             $_SESSION["username"] = $username; //indicate username entered of person in session 
             $_SESSION["password"] = $password; //indicate password entered of person in session 
             echo "<center>";
             echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>🎉PLAY OUR GAME🎉</span><br><br>"; 
             echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>Click <a style = 'color:#C7E2D9' href = 'game/game.php'>here</a> to play!</span></div>"; //prompt user to play game 
             echo "</center>";  
             $found = true; //indicate that user is found 
             break; //break from rest of code 
            } 
          /* If the username is incorrect or the password is incorrect (but not both) then show warning */      
          if(strcasecmp(trim($username), trim($lines[2])) != 0 xor strcasecmp(trim($password), trim($lines[3])) != 0)
            {
               echo "<center>";
               echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>⚠📢WARNING⚠📢</span><br><br>"; 
               echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>Incorrect username or password! Try again! </span><br>";
               echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>Click <a style = 'color:#C7E2D9' href = 'login.php'>here </a>to login!</span></div>"; //prompt user to login again 
               echo "</center>";
              $found = true;  //indicate that user is found 
              break; //break from rest of code 
            }
        }
        /* show warning if username is not found */ 
        if($found == false)
          {
             echo "<center>";
                 echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>⚠📢WARNING⚠📢</span><br><br>"; //tell user that they haven't registered
                 echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>You have not registered yet!</span><br>";
                 echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>Click <a style = 'color:#C7E2D9' href = 'signUp.php'>here </a>to register!</span></div>"; //prompt user to register an account
                 echo "</center>";  
          }  
    ?>  
  </body>
</html>