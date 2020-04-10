<?php
if($_GET['sticky']==1){
  session_start();
}

header('Content-Type: text/plain');
echo "Hostname: ".gethostname();
echo "\nServer IP: ".$_SERVER['SERVER_ADDR'];
echo "\nClient IP: ".$_SERVER['REMOTE_ADDR'];
echo "\nX-Forwarded-for: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
if($_GET['sticky']==1){
  print_r($_COOKIE);
  if(!isset($_SESSION['visit'])){
   echo "This is the first time you are visiting this server.\n";
   $_SESSION['visit'] = 0;
  } else {
   echo "Your number of visits: ".$_SESSION['visit']."\n";
   $_SESSION['visit']++;
  }
  print_r($_SESSION);
}
?>

