<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Website Feedback Form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="Js/test.css">
    <script src="Js/boxes.js"></script> <!-- are boxes checked .js -->
  </head>

<main>


  <?php

      if (isset($_SESSION['userId'])) {
          echo "Cool";
          echo $_SESSION['userId'];
      } else {
           echo "Not cool";
      }

    ?>


    <p>5-ős skálán tud válaszolni majd a kérdésekre, hogy mennyire igazak önre</p>
</main>