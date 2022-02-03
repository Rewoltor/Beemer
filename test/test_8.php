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
    <p style="text-align: center">Nehéz zavarba hozni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q71" name="q71" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q71" name="q71" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q71" name="q71" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q71" name="q71" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q71" name="q71" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Érdeklődöm mások élete iránt</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q72" name="q72" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q72" name="q72" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q72" name="q72" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q72" name="q72" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q72" name="q72" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Mindig tudom, hogy mit csinálok</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q73" name="q73" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q73" name="q73" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q73" name="q73" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q73" name="q73" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q73" name="q73" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Kimutatom, ha boldog vagyok</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q74" name="q74" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q74" name="q74" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q74" name="q74" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q74" name="q74" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q74" name="q74" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Gyors a gondolkodásom</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q75" name="q75" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q75" name="q75" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q75" name="q75" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q75" name="q75" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q75" name="q75" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehezen lehet felidegesíteni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q76" name="q76" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q76" name="q76" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q76" name="q76" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q76" name="q76" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q76" name="q76" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Keresem a konfliktust</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q77" name="q77" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q77" name="q77" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q77" name="q77" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q77" name="q77" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q77" name="q77" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem szeretem a rutinszerű dolgokat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q78" name="q78" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q78" name="q78" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q78" name="q78" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q78" name="q78" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q78" name="q78" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">A véleményemet megtartom magamnak</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q79" name="q79" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q79" name="q79" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q79" name="q79" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q79" name="q79" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q79" name="q79" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Ritkán veszem el a gondolataimban</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q80" name="q80" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q80" name="q80" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q80" name="q80" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q80" name="q80" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q80" name="q80" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit8">Tovább</button>
    </div>

 
  </div>

</form>