<?php
//Basic Error Handling: Using the die() function

if(!file_exists("welcome.txt")) {
    die("File not found");
  } else {
    $file=fopen("welcome.txt","r");
  }
?>
