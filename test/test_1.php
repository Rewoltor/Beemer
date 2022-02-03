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
    <p style="text-align: center">Ritkán vagyok szomorú</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q1" name="q1" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q1" name="q1" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q1" name="q1" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q1" name="q1" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q1" name="q1" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Közönyös vagyok mások problémái iránt</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q2" name="q2" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q2" name="q2" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q2" name="q2" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q2" name="q2" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q2" name="q2" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Megvalósítom a terveimet</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q3" name="q3" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q3" name="q3" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q3" name="q3" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q3" name="q3" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q3" name="q3" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen barátkozom</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q4" name="q4" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q4" name="q4" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q4" name="q4" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q4" name="q4" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q4" name="q4" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Gyorsan megértem a dolgokat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q5" name="q5" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q5" name="q5" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q5" name="q5" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q5" name="q5" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q5" name="q5" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen haragra lobbanok</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q6" name="q6" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q6" name="q6" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q6" name="q6" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q6" name="q6" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q6" name="q6" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Tekintélytisztelő vagyok</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q7" name="q7" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q7" name="q7" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q7" name="q7" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q7" name="q7" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q7" name="q7" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Széthagyom a cuccaimat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q8" name="q8" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q8" name="q8" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q8" name="q8" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q8" name="q8" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q8" name="q8" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Kezembe veszem az irányítást</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q9" name="q9" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q9" name="q9" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q9" name="q9" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q9" name="q9" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q9" name="q9" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Élvezem a természet szépségét</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q10" name="q10" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q10" name="q10" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q10" name="q10" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q10" name="q10" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q10" name="q10" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit1">Tovább</button>
    </div>

 
  </div>

</form>