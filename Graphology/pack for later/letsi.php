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

<form action="up.php" method="post" enctype="multipart/form-data">
    <div class="preview img-wrapper"></div>
    <div class="file-upload-wrapper">
            <input type="file" name="file" class="file-upload-native" accept="image/*" id="file" />
            <input type="submit" value="Upload Image" name="submit" class="file-upload-text" disabled placeholder="upload image">
    </div>
</form>


