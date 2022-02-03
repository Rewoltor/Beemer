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
    <p style="text-align: center">Könnyen elcsüggedek</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q61" name="q61" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q61" name="q61" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q61" name="q61" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q61" name="q61" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q61" name="q61" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Kevés időt szánok másokra</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q62" name="q62" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q62" name="q62" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q62" name="q62" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q62" name="q62" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q62" name="q62" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Gyorsan elintézem a dolgaimat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q63" name="q63" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q63" name="q63" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q63" name="q63" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q63" name="q63" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q63" name="q63" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem vagyok nagyon beszédes</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q64" name="q64" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q64" name="q64" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q64" name="q64" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q64" name="q64" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q64" name="q64" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nagyon színes a szókincsem</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q65" name="q65" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q65" name="q65" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q65" name="q65" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q65" name="q65" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q65" name="q65" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Olyan ember vagyok, akinek a hangulata könnyen ingadozik</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q66" name="q66" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q66" name="q66" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q66" name="q66" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q66" name="q66" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q66" name="q66" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen megsértek embereket</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q67" name="q67" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q67" name="q67" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q67" name="q67" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q67" name="q67" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q67" name="q67" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Nem zavar a rendetlenség</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q68" name="q68" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q68" name="q68" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q68" name="q68" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q68" name="q68" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q68" name="q68" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Könnyen rábeszélek embereket dolgokra</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q69" name="q69" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q69" name="q69" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q69" name="q69" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q69" name="q69" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q69" name="q69" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <p style="text-align: center">Szükségem van rá, hogy szabadon engedjem a kreativitásomat</p>      
    <div class="rb">
      <div class="rb-tab">
        <td><input type="radio" id="q70" name="q70" value="1"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q70" name="q70" value="2"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q70" name="q70" value="3"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q70" name="q70" value="4"></td>
      </div>
      <div class="rb-tab">
        <td><input type="radio" id="q70" name="q70" value="5"></td>
      </div>
      <div>
        <div class="pull-left">Hamis</div>
        <div class="pull-right">Igaz</div>
      </div>
    </div>

    <div class="button-box">
      <button class="button trigger" type="submit" name="submit7">Tovább</button>
    </div>

 
  </div>

</form>