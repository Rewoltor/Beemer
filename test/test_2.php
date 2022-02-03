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
    <p style="text-align: center">Gyakran kételkedem a dolgokban</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q11" name="q11" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q11" name="q11" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q11" name="q11" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q11" name="q11" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q11" name="q11" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen átélem mások érzéseit</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q12" name="q12" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q12" name="q12" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q12" name="q12" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q12" name="q12" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q12" name="q12" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Kifolyik az idő a kezem közül</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q13" name="q13" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q13" name="q13" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q13" name="q13" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q13" name="q13" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q13" name="q13" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehéz engem megismerni</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q14" name="q14" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q14" name="q14" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q14" name="q14" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q14" name="q14" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q14" name="q14" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nehezen értek meg absztrakt gondolatokat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q15" name="q15" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q15" name="q15" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q15" name="q15" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q15" name="q15" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q15" name="q15" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Ritkán vagyok ingerült</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q16" name="q16" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q16" name="q16" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q16" name="q16" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q16" name="q16" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q16" name="q16" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Gyakran gondolom, hogy jobb vagyok másoknál</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q17" name="q17" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q17" name="q17" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q17" name="q17" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q17" name="q17" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q17" name="q17" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Szeretem a rendet</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q18" name="q18" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q18" name="q18" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q18" name="q18" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q18" name="q18" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q18" name="q18" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Erős személyiségem van</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q19" name="q19" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q19" name="q19" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q19" name="q19" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q19" name="q19" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q19" name="q19" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Hiszek a művészet fontosságában</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q20" name="q20" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q20" name="q20" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q20" name="q20" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q20" name="q20" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q20" name="q20" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit2">Tovább</button>
    </div>

 
  </div>

</form>