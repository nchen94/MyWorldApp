#!/usr/local/bin/php


<html>
 <head>
  <title>
   Treasure Hunters
  </title>
 </head>
 <body>
  <form name='form' method='post' action='profile.php'>
   Username: <input type = "Text" value = "" name = "un" id="un">
   Password: <input type = "password" value="" name= "pw" id="pw">
   <input type = "Submit" value = "Login">
  </form>
  <form name='form' method='post' action='signup.php'>
   <p>Don't have an account? 
    <input type="Submit" value="Signup">
   </p>
  </form> 
 </body>
</html>
