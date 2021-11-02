<?php
session_start();
      if (isset($_SESSION['userId'])) {
          echo "Cool";
          echo "{$_SESSION['userId']}";
      } else {
           echo "Not cool";
      }
    ?>

<!DOCTYPE html>

<script src="up.js"></script> <!-- are boxes checked .js -->
<link rel="stylesheet" href="up.css">

<html>
<body>

<!-- php action backend -->
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>






<!--

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

    -->