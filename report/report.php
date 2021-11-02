<?php
require_once 'dbh.inc.php';
require_once 'report.inc.php';
$userId = $_SESSION['userId'];
?>
  <?php
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
  <title>BMR - Személyiség report</title>
  <link rel="stylesheet" href="./report.css">

</head>
<body>


<input type="radio" class="radio" name="theme" value="dark" id="dark" checked>

<!--activate dark and light theme, if I have time and I am very board I will do this, but I don't want to do it as of now, maybe someone very contientious who is not me
<label for="dark" class="label">sötét</label>


<input type="radio" class="radio" name="theme" value="light" id="light">
<label for="light" class="label">világos</label>
-->

<div class="container">

  <p class="title">Személyiség</p>
  
  <label class="felirat">Tapasztalatra való nyitottság <?php echo $openness ?></label>
  <div class="rating-bar">
    <div class="scale-rating" data-rating="<?php echo htmlspecialchars($openness); ?>"></div>
  </div>

  <label class="felirat">Eltökéltség <?php echo $conscientiousness ?></label>
  <div class="rating-bar">
    <div class="scale-rating" data-rating="<?php echo htmlspecialchars($conscientiousness); ?>"></div>
  </div>

  <label class="felirat">Extraverzió <?php echo $extroversion ?></label>
  <div class="rating-bar">
    <div class="scale-rating" data-rating="<?php echo htmlspecialchars($extroversion); ?>"></div>
  </div>
  
  <label class="felirat">Alkalmazkodás <?php echo $agreeableness ?></label>
  <div class="rating-bar">
    <div class="scale-rating" data-rating="<?php echo htmlspecialchars($agreeableness); ?>"></div>
  </div>
  
  <label class="felirat">Stresszküszöb <?php echo $neuroticism ?></label>
  <div class="rating-bar">
    <div class="scale-rating" data-rating="<?php echo htmlspecialchars($neuroticism); ?>"></div>
  </div>


  <div class="button">
    <a href="C:\Users\balta\Documents\Program\Html\Test\Regist\Register.html"><button id="button-link">Register here</button></a>
  </div>

</div>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./report.js"></script>

</body>
</html>
