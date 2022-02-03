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
    <p style="text-align: center">Ritkán érzem magam depressziósnak</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q41" name="q41" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q41" name="q41" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q41" name="q41" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q41" name="q41" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q41" name="q41" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Szimpatizálok mások érzéseivel</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q42" name="q42" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q42" name="q42" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q42" name="q42" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q42" name="q42" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q42" name="q42" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Befejezem, amit elkezdek</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q43" name="q43" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q43" name="q43" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q43" name="q43" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q43" name="q43" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q43" name="q43" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen megtalálom másokkal a közös hangot </p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q44" name="q44" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q44" name="q44" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q44" name="q44" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q44" name="q44" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q44" name="q44" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Kerülöm a filozofikus kérdéseket</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q45" name="q45" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q45" name="q45" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q45" name="q45" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q45" name="q45" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q45" name="q45" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Gyakran változik a hangulatom</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q46" name="q46" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q46" name="q46" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q46" name="q46" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q46" name="q46" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q46" name="q46" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem szeretem a saját akaratomat érvényesíteni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q47" name="q47" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q47" name="q47" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q47" name="q47" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q47" name="q47" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q47" name="q47" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">>Nem zavarnak a rendetlen emberek</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q48" name="q48" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q48" name="q48" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q48" name="q48" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q48" name="q48" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q48" name="q48" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem vagyok vezető típus</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q49" name="q49" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q49" name="q49" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q49" name="q49" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q49" name="q49" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q49" name="q49" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem érdekel a költészet</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q50" name="q50" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q50" name="q50" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q50" name="q50" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q50" name="q50" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q50" name="q50" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit5">Tovább</button>
    </div>

 
  </div>

</form>