<!--
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Sign Up Script page
The purpose of this page is to direct users to the login after they have signed up 
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
    <link rel = "icon" href = "/images/pablo2.jpg">  <!-- loads favicon--> 
  <link href="https://fonts.cdnfonts.com/css/owen-pro" rel="stylesheet"> 
  <link rel = "icon" href = "https://cdn-icons-png.flaticon.com/512/2250/2250092.png"> 
  <link href="https://fonts.cdnfonts.com/css/bochild-2" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" /> <!-- This code links the index page to the style sheet -->
  <!--The following is the CSS for this webpage-->
  <style>
    @import url('https://fonts.cdnfonts.com/css/bochild-2');
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
    h1{
      font-family: 'SF Speedwaystar', sans-serif;
      font-size:70px; 
      text-align:center; 
      color:#486561;
    } 
  </style>
    <br>
    <br>
    <title>Sign Up Script Page</title>   <!--this is the title for this page-->
  </head> 
    <body> 
    <?php
      /* take information filled out from the form */ 
      $firstName1 = $_POST["firstName"];
      $lastName1 = $_POST["lastName"];
      $username1 = $_POST["username"];
      $password1 = $_POST["password"]; 
      /* Warn user if they entered empty string */ 
      if($firstName1 == "" || $lastName1 == "" || $username1 == "" || $password1 == "")
      {
          echo "<center>";
          echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>⚠📢WARNING📢⚠</span><br><br>";
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Make sure all fields are entered!</span><br>"; 
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Please try again <a style = 'color:#C7E2D9' href = 'signUp.php'>here</a></span></div>"; //promt user to sign up again 
          echo "</center>"; 
          exit;  //exit the current code 
      }
      $file = "data/userInfo.txt"; 
      $data=file_get_contents($file); //reads from entire file as a string  
      $users=explode("\n", $data); //break up entire file into seperate lines using line delimeter 
      $found = false; //assume user has not already registered 
      /* check to see if user is already logged in */ 
      for($x=0;$x<count($users);$x++) // cycle through each line in array
      { 
        $line=explode(",",$users[$x]); //break up each line into another array containing all data pieces in the line (the user information)
        if(strcasecmp(trim($username1), trim($line[2])) == 0)//check if the username entered is the same as a regiseterd user 
        {
          echo "<center>";
          echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>⚠📢WARNING📢⚠</span><br><br>";
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>You have already registered!</span><br>";  //warn user if they have already registered
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Please click <a style = 'color:#C7E2D9' href = 'login.php'>here</a> to login</span></div>"; //prompt user to login if already registered 
          echo "</center>"; 
          $found = true; //user is found 
          break; //break from code 
        } 
      } 
      /* register the user if they are not found in the database */ 
      if($found == false)
        {
           echo "<center>";
           echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>✔️REGISTERED✔️</span><br><br>"; 
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>You have been registered!</span><br>"; 
          echo "<span style = 'font-family:Bochild, sans-serif; color:#f9f0dd'>Please click <a style = 'color:#C7E2D9' href = 'login.php'>here</a> to login</span></div>"; //prompt user to login 
           $account = "$firstName1, $lastName1, $username1, $password1 \r\n"; //create new string for user's information
           file_put_contents($file, $account, FILE_APPEND); //register the account to the userInfo.txt file without overwriting file's original data 
           echo "</center>"; 
        }
    ?>  
  </body>
</html>