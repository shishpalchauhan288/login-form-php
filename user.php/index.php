 <?php
  session_start();
  if(!$_SESSION['auth'])
  {
      header('lpcation:login.php');
  }
  ?>

  <h1>Welcome you are authenticated.....!</h1>
 
 <a href="logout.php"> Logout...!</a>
 
 
 
 