<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
?>
<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Instructions Page
The purpose of this page is to teach users how to play our game.
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
        <td class = "taskbarLinks" style = "border-color:#ebe4e1">
          <a href = "instructions.php" title = "go to the how to play page">how to play</a><!--A link to the how to play page-->
        </td>
        <td class = "taskbarLinks">
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
  <!--The following is the CSS for the how to play Page-->
  <style>
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
    
    h2{
      color: white; 
      background-color: #486561;
      font-family: Arial;
      font-weight: bold;
      font-size: 50px; 
      text-align: center;
      
      margin-bottom: 10px;
    }
    .layout{
      background-color: #6a7c79;
      border-radius: 40px;
      padding:10px; 
      margin: 0 auto;
      display:flex;
      flex-direction:row; 
      width:1500px;
      height:900px; 
    }
     #img1{
      color: #f9f0dd;
      margin:52px 20px;
      width:1200px; 
      height: 800px;
      border-radius:50px; 
      padding:20px; 
    }
    .layout p{
      font-family: 'Owen Pro', sans-serif;
      text-align: left;
      font-size: 35px;
      color: #f9f0dd;
      margin:140px 20px;
      margin-top: 62px;
      width:750px;
      border-radius:50px; 
      padding:10px; 
      color:#f9f0dd;
      height:250px; 
    }
    .instructions{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      margin: 0 auto;
      display:flex;
      flex-direction:row; 
      width:1500px;
      height:540px; 
    }
    .instructions img{
      float: left;
      border-radius:70px;
      padding: 45px;
      margin-right: 20px;
      margin-bottom: 5px;
      width:700px; 
      height: 450px;
      }
    .instructions p{
      font-family: 'Owen Pro', sans-serif;
      text-align: left;
      font-size: 35px;
      color: #f9f0dd;
      margin:140px 20px;
      margin-top: 62px;
      width:750px;
      border-radius:50px; 
      padding:10px; 
      color:#f9f0dd;
      height:250px; 
    }
    .instructions2{
      background-color: #2c443f;
      border-radius: 40px;
      padding:10px; 
      margin: 0 auto;
      display:flex;
      flex-direction:row; 
      width:1500px;
      height:630px; 
    }
    .instructions2 img{
      color: #f9f0dd;
      margin:52px 20px;
      width:700px; 
      height: 500px;
      border-radius:50px; 
      padding:20px; 
      }
    .instructions2 p{
      font-family: 'Owen Pro', sans-serif;
      text-align: left;
      font-size: 35px;
      color: #f9f0dd;
      margin:140px 20px;
      margin-top: 50px;
      width:750px;
      border-radius:50px; 
      padding:10px; 
      color:#f9f0dd;
      height:250px; 
    }
    .panagrams{
      background-color: #6a7c79;
      border-radius: 20px;
      width:1500px;
      height:700px;
      margin: 0 auto;
}
    /* styling the text in our box */
    .panagrams p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 35px;
      color: #f9f0dd;
      padding-top: 40px;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
      margin-right: 0px;
    }
    .panagrams img{
      color: #f9f0dd;
      margin:52px 20px;
      width:600px; 
      height: 500px;
      padding-left: 70px;
      }
    .instructions4{
      background-color: #2c443f;
      border-radius: 20px;
      height: 160px;
      width: 1500px;
      margin: 0 auto;
    }
    .instructions4 p{
      font-family: 'Owen Pro', sans-serif;
      text-align: center;
      font-size: 35px;
      color: #f9f0dd;
      padding-top: 40px;
      padding-left: 5px;
      margin-top: 0px;
      margin-left: 0px;
      margin-right: 0px;
    }
  </style>
    <br>
    <br>
    <title>Instructions</title> <!--This is the title of this page -->
  </head>
  <body>
    <br>
    <br>
    <br>
    <h1>How To Play</h1><br><!--This is the heading for this page--> 
    <br>
    <h2>Step 1</h2>
    <div class="instructions">
      <img src="images/first.png">
      <p>
        1. After you have logged in, click on 'the game' button on our navigation bar and you will be directed to this page. To start the game, click on the 'CLICK HERE TO PLAY!' button.
        <br>
        <br>
        After you click the button, you will be directed to our game page. Please see below for our game layout.
      </p>
    </div>
    <br>
    <h2>Game Layout</h2>
    <div class = "layout">
        <img id = "img1" src = "images/layout.png"> 
        <p><!-- Explaining what each part of our game page is -->
          <b> LETTER BANK: </b> 
          <br> 
          The letter bank displays the 5 letters a player can use while making words.
          <br>
          <br>
          <b> LETTER SELECTION: </b> 
          <br> 
          Players can select a letter from the selection boxes to make their words.
          <br>
          <br>
          <b> PROGRESS DISPLAY: </b> 
          <br> 
          Players are shown their current number of points and how many words can be created with the letters.
          <br>
          <br>
          <b> WORDS CREATED: </b>
          <br>
          Displays all the words players enter.
        </p>
      </div>
    <br>
    <br>
    <h2>Step 2</h2>
    <div class="instructions2">
      <img src="images/words.png">
      <p>
        2. Start making words by picking out the letters you need from the selection boxes. Once you have finished making your word, click the 'SUBMIT' button. This saves your word and displays it on the 'WORDS CREATED' box to your right. 
        <br>
        <br>
        Each word is assigned a point and for each word you make, you earn a certain number of points. You can also see how many words you are able to make with the letters provided. Your goal is to make that many words!
      </p>
    </div>
    <br>
    <br>
    <h2>Step 3</h2>
    <div class="panagrams">
      <p>
        3. Panagrams are possible! If your letter set allows you to make a panagram, go for it!
      </p>
      <img src="images/panagram1.png">
      <img src="images/panagram2.png">
    </div>
    <br>
    <br>
    <h2>Step 4</h2>
    <div class="instructions4">
      <p>
        4. Once you are satisfied with the amount of words you've come up with, you can click 'RESET GAME' to generate a new set of letters and play again! Have fun!
      </p>
    </div>
    <br>
    <br>
  </body>
</html>