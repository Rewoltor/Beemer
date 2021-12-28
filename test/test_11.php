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
  <script src="Js/count.js"></script>    <!--clock for the time limit-->     
       
</head>

<body>
  
<div class="container">
    <header>

      <div class="pull-left">Bal</div>
      <div class="pull-right">Hátralévő idő: <span id="count">600</span> ms</div>

    </header>
    <main>

        <div id="introduction">
            <h3 style="text-align: center;">Szuper, Már csak 10 kérdés</h3>
            <p style="text-align: center;">----------</p>
            <p style="text-align: center;">Erre a részre kérdésenként 1 perce van. Összesen 600 másodperc</p>
            <p style="text-align: center;">A hátralévő idejét a jobb felső sarokban tekintheti meg</p>
            <!--<p style="text-align: center;">A test kezdéséhez kattinstron a "Start" gombra</p>-->
            <a href="#" class="start-button" id="startClock">Start</a>
        </div>
        <div id="quiz">

        <form action="Includes/test.inc.php" method="post"> 
        <!-- <form method="post"> -->

            <div class="questionForm" id="co1" data-question="1">
                <td>1/10
                <div class="main-image-div">
                    <img src="img/1.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="a">
                        <img name="co1" class="kimage" src="img/1.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="b">
                        <img name="co1" class="kimage" src="img/1.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="c">
                        <img name="co1" class="kimage" src="img/1.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="d">
                        <img name="co1" class="kimage" src="img/1.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="e">
                        <img name="co1" class="kimage" src="img/1.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage1" id="co1" name="co1" value="f">
                        <img name="co1" class="kimage" src="img/1.6.jpg" />
                        <input type="radio" class="kimage" id="co1" name="co1" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit1">Következő</button>
            </div>
            


            <div class="questionForm" id="co2" data-question="2">
                <td>2/10
                <div class="main-image-div">
                    <img src="img/2.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="a">
                        <img name="co2" class="kimage" src="img/2.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="b">
                        <img name="co2" class="kimage" src="img/2.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="c">
                        <img name="co2" class="kimage" src="img/2.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="d">
                        <img name="co2" class="kimage" src="img/2.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="e">
                        <img name="co2" class="kimage" src="img/2.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage2" id="co2" name="co2" value="f">
                        <img name="co2" class="kimage" src="img/2.6.jpg" />
                        <input type="radio" class="kimage2" id="co2" name="co2" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit2">Következő</button>
            </div>
            

            
            <div class="questionForm" id="co3" data-question="3">
                <td>3/10
                <div class="main-image-div">
                    <img src="img/3.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="a">
                        <img name="co3" class="kimage" src="img/3.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="b">
                        <img name="co3" class="kimage" src="img/3.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="c">
                        <img name="co3" class="kimage" src="img/3.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="d">
                        <img name="co3" class="kimage" src="img/3.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="e">
                        <img name="co3" class="kimage" src="img/3.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage3" id="co3" name="co3" value="f">
                        <img name="co3" class="kimage" src="img/3.6.jpg" />
                        <input type="radio" class="kimage3" id="co3" name="co3" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit3">Következő</button>
            </div>
            
            <div class="questionForm" id="co4" data-question="4">
                <td>4/10
                <div class="main-image-div">
                    <img src="img/4.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="a">
                        <img name="co4" class="kimage" src="img/4.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="b">
                        <img name="co4" class="kimage" src="img/4.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="c">
                        <img name="co4" class="kimage" src="img/4.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="d">
                        <img name="co4" class="kimage" src="img/4.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="e">
                        <img name="co4" class="kimage" src="img/4.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage4" id="co4" name="co4" value="f">
                        <img name="co4" class="kimage" src="img/4.6.jpg" />
                        <input type="radio" class="kimage4" id="co4" name="co4" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit4" id="submit" class="submit4">Következő</button>
            </div>
            
            <div class="questionForm" id="co5" data-question="5">
                <td>5/10
                <div class="main-image-div">
                    <img src="img/5.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="a">
                        <img name="co5" class="kimage" src="img/5.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="b">
                        <img name="co5" class="kimage" src="img/5.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="c">
                        <img name="co5" class="kimage" src="img/5.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="d">
                        <img name="co5" class="kimage" src="img/5.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="e">
                        <img name="co5" class="kimage" src="img/5.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage5" id="co5" name="co5" value="f">
                        <img name="co5" class="kimage" src="img/5.6.jpg" />
                        <input type="radio" class="kimage5" id="co5" name="co5" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit5">Következő</button>
            </div>
            
            <div class="questionForm" id="co6" data-question="6">
                <td>6/10
                <div class="main-image-div">
                    <img src="img/6.jpg" class="main-image"></img>
                </div>
                <div class="choices">
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="a">
                        <img name="co6" class="kimage" src="img/6.1.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="b">
                        <img name="co6" class="kimage" src="img/6.2.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="c">
                        <img name="co6" class="kimage" src="img/6.3.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="d">
                        <img name="co6" class="kimage" src="img/6.4.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="e">
                        <img name="co6" class="kimage" src="img/6.5.jpg" />
                    </div>
                    <div class="option">
                        <input type="radio" class="kimage6" id="co6" name="co6" value="f">
                        <img name="co6" class="kimage" src="img/6.6.jpg" />
                        <input type="radio" class="kimage6" id="co6" name="co6" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit6">Következő</button>
            </div>
            
            <div class="questionForm" id="co7" data-question="7">
                <td>7/10
                <div class="main-image-div">
                    <img src="img/7.jpg" class="main-image"></img>
                </div>
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="a">
                        <img name="co7" class="kimage11" src="img/7.1.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="b">
                        <img name="co7" class="kimage11" src="img/7.2.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="c">
                        <img name="co7" class="kimage11" src="img/7.3.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="d">
                        <img name="co7" class="kimage11" src="img/7.4.jpg" />
                    </div>
                </div> 
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="e">
                        <img name="co7" class="kimage11" src="img/7.5.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="f">
                        <img name="co7" class="kimage11" src="img/7.6.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="g">
                        <img name="co7" class="kimage11" src="img/7.7.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage7" id="co7" name="co7" value="h">
                        <img name="co7" class="kimage11" src="img/7.8.jpg" />
                        <input type="radio" class="kimage7" id="co7" name="co7" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit7">Következő</button>
            </div>
        
            <div class="questionForm" id="co8" data-question="8">
                <td>8/10
                <div class="main-image-div">
                    <img src="img/8.jpg" class="main-image"></img>
                </div>
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="a">
                        <img name="co8" class="kimage11" src="img/8.1.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="b">
                        <img name="co8" class="kimage11" src="img/8.2.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="c">
                        <img name="co8" class="kimage11" src="img/8.3.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="d">
                        <img name="co8" class="kimage11" src="img/8.4.jpg" />
                    </div>
                </div> 
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="e">
                        <img name="co8" class="kimage11" src="img/8.5.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="f">
                        <img name="co8" class="kimage11" src="img/8.6.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="g">
                        <img name="co8" class="kimage11" src="img/8.7.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage8" id="co8" name="co8" value="h">
                        <img name="co8" class="kimage11" src="img/8.8.jpg" />
                        <input type="radio" class="kimage8" id="co8" name="co8" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit8">Következő</button>
            </div>
            
            <div class="questionForm" id="co9" data-question="9">
                <td>9/10
                <div class="main-image-div">
                    <img src="img/9.jpg" class="main-image"></img>
                </div>
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="a">
                        <img name="co9" class="kimage11" src="img/9.1.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="b">
                        <img name="co9" class="kimage11" src="img/9.2.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="c">
                        <img name="co9" class="kimage11" src="img/9.3.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="d">
                        <img name="co9" class="kimage11" src="img/9.4.jpg" />
                    </div>
                </div> 
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="e">
                        <img name="co9" class="kimage11" src="img/9.5.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="f">
                        <img name="co9" class="kimage11" src="img/9.6.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="g">
                        <img name="co9" class="kimage11" src="img/9.7.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage9" id="co9" name="co9" value="h">
                        <img name="co9" class="kimage11" src="img/9.8.jpg" />
                        <input type="radio" class="kimage9" id="co9" name="co9" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit" id="submit" class="submit9">Következő</button>
            </div>
            
            <div class="questionForm" id="co10" data-question="10">
                <td>10/10
                <div class="main-image-div">
                    <img src="img/10.jpg" class="main-image"></img>
                </div>
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="a">
                        <img name="co10" class="kimage11" src="img/10.1.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="b">
                        <img name="co10" class="kimage11" src="img/10.2.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="c">
                        <img name="co10" class="kimage11" src="img/10.3.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="d">
                        <img name="co10" class="kimage11" src="img/10.4.jpg" />
                    </div>
                </div> 
                <div class="choices1">
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="e">
                        <img name="co10" class="kimage11" src="img/10.5.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="f">
                        <img name="co10" class="kimage11" src="img/10.6.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="g">
                        <img name="co10" class="kimage11" src="img/10.7.jpg" />
                    </div>
                    <div class="option1">
                        <input type="radio" class="kimage110" id="co10" name="co10" value="h">
                        <img name="co10" class="kimage11" src="img/10.8.jpg" />
                        <input type="radio" class="kimage110" id="co10" name="co10" value="0" checked="checked" style="opacity: 0;">
                    </div>
                    <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
                </div>
                <button name="submit11" id="submit" class="submit11">Következő</button>
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
