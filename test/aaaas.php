<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="cogn/style.css"> -->
  <link rel="stylesheet" type="text/css" href="cogn/test11.css"> 
  <script type="text/javascript" src="cogn/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="cogn/quiz_simply.js"></script>
  <script src="Js/boxes.js"></script> <!-- are boxes checked -->
</head>

<body>
  
<div class="container">
    <header>

      <div class="pull-left">Bal</div>
      <div class="pull-right">Jobb</div>

    </header>
    <main>

        <div id="introduction">
            <h3>Szuper teljesítmény, már csak 10 kérdés van hátra</h3>
            <p>Válasza ki a helyes választ</p>
            <a href="#">Start</a>
        </div>
        <div id="quiz">

        <form action="Includes/test.inc.php" method="post"> 
        <!-- <form method="post"> -->

            <div class="questionForm" id="co1" data-question="1">
                <div class="main-image-div">
                    <img src="img/1.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="a">
                        <img name="co1" class="kimage" src="img/1.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="b">
                        <img name="co1" class="kimage" src="img/1.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="c">
                        <img name="co1" class="kimage" src="img/1.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="d">
                        <img name="co1" class="kimage" src="img/1.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="e">
                        <img name="co1" class="kimage" src="img/1.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co1" name="co1" value="f">
                        <img name="co1" class="kimage" src="img/1.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő</button>
            </div>
            


            <div class="questionForm" id="co2" data-question="2">
                <div class="main-image-div">
                    <img src="img/2.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="a">
                        <img name="co2" class="kimage" src="img/2.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="b">
                        <img name="co2" class="kimage" src="img/2.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="c">
                        <img name="co2" class="kimage" src="img/2.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="d">
                        <img name="co2" class="kimage" src="img/2.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="e">
                        <img name="co2" class="kimage" src="img/2.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co2" name="co2" value="f">
                        <img name="co2" class="kimage" src="img/2.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő</button>
            </div>
            

            
            <div class="questionForm" id="co3" data-question="3">
                <div class="main-image-div">
                    <img src="img/3.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="a">
                        <img name="co3" class="kimage" src="img/3.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="b">
                        <img name="co3" class="kimage" src="img/3.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="c">
                        <img name="co3" class="kimage" src="img/3.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="d">
                        <img name="co3" class="kimage" src="img/3.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="e">
                        <img name="co3" class="kimage" src="img/3.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co3" name="co3" value="f">
                        <img name="co3" class="kimage" src="img/3.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co4" data-question="4">
                <div class="main-image-div">
                    <img src="img/4.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="a">
                        <img name="co4" class="kimage" src="img/4.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="b">
                        <img name="co4" class="kimage" src="img/4.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="c">
                        <img name="co4" class="kimage" src="img/4.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="d">
                        <img name="co4" class="kimage" src="img/4.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="e">
                        <img name="co4" class="kimage" src="img/4.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co4" name="co4" value="f">
                        <img name="co4" class="kimage" src="img/4.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co5" data-question="5">
                <div class="main-image-div">
                    <img src="img/5.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="a">
                        <img name="co5" class="kimage" src="img/5.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="b">
                        <img name="co5" class="kimage" src="img/5.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="c">
                        <img name="co5" class="kimage" src="img/5.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="d">
                        <img name="co5" class="kimage" src="img/5.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="e">
                        <img name="co5" class="kimage" src="img/5.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co5" name="co5" value="f">
                        <img name="co5" class="kimage" src="img/5.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co6" data-question="6">
                <div class="main-image-div">
                    <img src="img/6.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="a">
                        <img name="co6" class="kimage" src="img/6.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="b">
                        <img name="co6" class="kimage" src="img/6.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="c">
                        <img name="co6" class="kimage" src="img/6.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="d">
                        <img name="co6" class="kimage" src="img/6.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="e">
                        <img name="co6" class="kimage" src="img/6.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co6" name="co6" value="f">
                        <img name="co6" class="kimage" src="img/6.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co7" data-question="7">
                <div class="main-image-div">
                    <img src="img/7.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="a">
                        <img name="co7" class="kimage" src="img/7.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="b">
                        <img name="co7" class="kimage" src="img/7.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="c">
                        <img name="co7" class="kimage" src="img/7.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="d">
                        <img name="co7" class="kimage" src="img/7.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="e">
                        <img name="co7" class="kimage" src="img/7.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co7" name="co7" value="f">
                        <img name="co7" class="kimage" src="img/7.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co8" data-question="8">
                <div class="main-image-div">
                    <img src="img/8.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="a">
                        <img name="co8" class="kimage" src="img/8.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="b">
                        <img name="co8" class="kimage" src="img/8.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="c">
                        <img name="co8" class="kimage" src="img/8.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="d">
                        <img name="co8" class="kimage" src="img/8.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="e">
                        <img name="co8" class="kimage" src="img/8.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co8" name="co8" value="f">
                        <img name="co8" class="kimage" src="img/8.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co9" data-question="9">
                <div class="main-image-div">
                    <img src="img/9.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="a">
                        <img name="co9" class="kimage" src="img/9.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="b">
                        <img name="co9" class="kimage" src="img/9.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="c">
                        <img name="co9" class="kimage" src="img/9.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="d">
                        <img name="co9" class="kimage" src="img/9.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="e">
                        <img name="co9" class="kimage" src="img/9.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co9" name="co9" value="f">
                        <img name="co9" class="kimage" src="img/9.6.jpg" />
                    </div>
                </div>
                <button name="submit" id="submit" class="button">Következő1</button>
            </div>
            
            <div class="questionForm" id="co10" data-question="10">
                <div class="main-image-div">
                    <img src="img/10.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="a">
                        <img name="co10" class="kimage" src="img/10.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="b">
                        <img name="co10" class="kimage" src="img/10.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="c">
                        <img name="co10" class="kimage" src="img/10.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="d">
                        <img name="co10" class="kimage" src="img/10.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="e">
                        <img name="co10" class="kimage" src="img/10.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" id="co10" name="co10" value="f">
                        <img name="co10" class="kimage" src="img/10.6.jpg" />
                    </div>
                </div>
                <input type="submit" name="submit11" class="inputButton" value="Következő"/>
            </div>
            
        <!--
            <div class="register-button">
            <input type="submit" name="submit11" class="inputButton" value="Következő"/>
            </div>
        -->

        </form>
         

      </div>
    </main>

    <footer>
      <div class="pull-left">Összesen 10 kérdés</div>
    </footer>
</div>

</body>
</html>
