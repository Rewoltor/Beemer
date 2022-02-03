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
    <p style="text-align: center">Kellemes érzéseim vannak magammal kapcsolatban</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q21" name="q21" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q21" name="q21" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q21" name="q21" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q21" name="q21" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q21" name="q21" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Érdekelődöm más emberek jóléte iránt</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q22" name="q22" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q22" name="q22" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q22" name="q22" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q22" name="q22" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q22" name="q22" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehezen veszem rá magamat, hogy nekiálljak a feladataimnak</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q23" name="q23" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q23" name="q23" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q23" name="q23" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q23" name="q23" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q23" name="q23" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Távolságtartó vagyok másokkal</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q24" name="q24" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q24" name="q24" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q24" name="q24" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q24" name="q24" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q24" name="q24" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen kezelek sok információt</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q25" name="q25" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q25" name="q25" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q25" name="q25" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q25" name="q25" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q25" name="q25" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen ki lehet hozni a sodromból</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q26" name="q26" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q26" name="q26" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q26" name="q26" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q26" name="q26" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q26" name="q26" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem szeretek rámenősnek tűnni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q27" name="q27" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q27" name="q27" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q27" name="q27" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q27" name="q27" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q27" name="q27" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Rendben tartom a dolgaimat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q28" name="q28" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q28" name="q28" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q28" name="q28" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q28" name="q28" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q28" name="q28" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Hiányzik belőlem a képesség az emberek befolyásolására</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q29" name="q29" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q29" name="q29" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q29" name="q29" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q29" name="q29" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q29" name="q29" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Szeretek gondolkodni a dolgokon</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q30" name="q30" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q30" name="q30" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q30" name="q30" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q30" name="q30" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q30" name="q30" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit3">Tovább</button>
    </div>

 
  </div>

</form>