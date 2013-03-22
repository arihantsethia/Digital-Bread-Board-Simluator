<?php

$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  include("success.php");
} else {
  include("unsuccess.php");
}

?> 
