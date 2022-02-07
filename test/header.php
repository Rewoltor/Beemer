<?php
  session_start();


if (isset($_SESSION['userId'])) {
  echo "Cool";
  echo $_SESSION['userId'];
} else {
     echo "Not cool";
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Js/0.css">
  <script src="Js/boxes.js"></script> <!-- are boxes checked .js -->
</head>