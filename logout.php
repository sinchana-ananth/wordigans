<?php
  session_start(); //session_start is a function that creates/resumes session for a single user (this only works at the top of page)
  unset($_SESSION['username']); 
?> 
<!---
Farah, Sinchana, Libby, Izma 
2/16/2023
Unit 1 Assignment Logout Page 
The purpose of this page is to tell users that they have logged out. 
-->
<html>
  <head>
    <style>
    /* import all of the fonts for logout page */ 
    @import url('https://fonts.cdnfonts.com/css/bochild-2');
    body{
      background-color:#C7E2D9; 
    }
    @import url('https://fonts.cdnfonts.com/css/sf-speedwaystar-2');
    @import url('https://fonts.cdnfonts.com/css/owen-pro');
  </style>
  </head>
    <body>
      <?php
        /* show user that they have logged out of the website */ 
        echo "<div style = 'background-color:#486561; border-radius:50px; padding:50px 100px; padding-bottom:130px'><span style = 'font-family:Bochild, sans-serif; font-size:65px; color:#C7E2D9'>YOU HAVE LOGGED OUT!</span><br><br>"; 
        echo "<span style = 'font-family:Bochild, sans-serif; font-size:22px; color:#f9f0dd'>Click <a style = 'color:#C7E2D9' href = 'index.php'>here</a> to return to the homepage!</span></div>"; 
        $EmptyFile = 'data/login.txt'; //take file to show who's currently logged in
        file_put_contents($EmptyFile, " "); //show that nobody is currently logged into the website by overwriting their username with an empty string  
      ?>
  </body>
</html>
