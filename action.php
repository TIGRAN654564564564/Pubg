<?php 

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  echo "<h1>".$_POST['name']."</name>";

  if ($_POST['name'] == "James" & $_POST['pass'] == "1234") {
  	echo "Welcome James !";
  }else if ($_POST['name'] == "James" & $_POST['pass'] =! "1234") {
  	echo "Wrong password !";
  } else {
  	echo "Wrong User!";
  }
  

 ?>