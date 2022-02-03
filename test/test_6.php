<?php
  session_start();
    //include_once 'header.php';

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
  <link rel="stylesheet" href="0.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="Includes/test.inc.php" method="post">
  
  <div class="rb-box">

    <!-- Radio Button Module -->
    <p style="text-align: center">Izgulós vagyok</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q51" name="q51" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q51" name="q51" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q51" name="q51" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q51" name="q51" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q51" name="q51" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Közömbös vagyok mások érzései iránt</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q52" name="q52" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q52" name="q52" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q52" name="q52" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q52" name="q52" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q52" name="q52" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehezen koncentrálok a feladatra, amit éppen végzek</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q53" name="q53" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q53" name="q53" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q53" name="q53" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q53" name="q53" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q53" name="q53" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Ritkán ragad el a szenvedély</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q54" name="q54" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q54" name="q54" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q54" name="q54" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q54" name="q54" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q54" name="q54" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem szeretem a nehéz olvasmányokat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q55" name="q55" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q55" name="q55" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q55" name="q55" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q55" name="q55" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q55" name="q55" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehéz a lelki nyugalmamból kibillenteni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q56" name="q56" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q56" name="q56" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q56" name="q56" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q56" name="q56" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q56" name="q56" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem helyezek másokat nyomás alá</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q57" name="q57" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q57" name="q57" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q57" name="q57" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q57" name="q57" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q57" name="q57" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Törekszem, hogy minden tökéletes legyen körülöttem</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q58" name="q58" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q58" name="q58" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q58" name="q58" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q58" name="q58" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q58" name="q58" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Jó vezetőnek tartom magamat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q59" name="q59" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q59" name="q59" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q59" name="q59" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q59" name="q59" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q59" name="q59" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Ritkán érzékelem a festmények érzelmi hátterét</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q60" name="q60" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q60" name="q60" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q60" name="q60" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q60" name="q60" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q60" name="q60" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit6">Tovább</button>
    </div>

 
  </div>

</form>