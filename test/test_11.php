<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="a.css"> 
    <script type="text/javascript" src="cogn/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="cogn/quiz_simply.js"></script>
    <script src="Js/count.js"></script>    <!--clock for the time limit-->  
</head>
<body>
  
<div class="container">
    <header>

      <div class="pull-left"></div>
      <div class="pull-right">Hátralévő idő: <span id="count">600</span> ms</div>

    </header>
    <main>

<div id="introduction">
    <h3 style="text-align: center;">Szuper, Már csak 10 kérdés</h3>
    <p style="text-align: center;">----------</p>
    <p style="text-align: center;">Erre a részre kérdésenként 1 perce van. Összesen 600 másodperc</p>
    <p style="text-align: center;">A hátralévő idejét a jobb felső sarokban tekintheti meg</p>
    <!--<p style="text-align: center;">A test kezdéséhez kattinstron a "Start" gombra</p>-->
    <a href="#" class="-btn -bg -txt" id="startClock">Start</a>
</div>
<div id="quiz">

    <form action="Includes/test.inc.php" method="post"> 
    <!-- <form method="post"> -->



        <div class="questionForm" id="co1" data-question="1">

            <td>1/10
        
            <div class="main-image-div">
                <img src="img/1.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="a">
                    <img class="img" src="img/1.1.png">
                </label>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="b">
                    <img class="img" src="img/1.2.png">
                </label>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="c">
                    <img class="img" src="img/1.1.png">
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="d">
                    <img class="img" src="img/1.2.png">
                </label>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="e">
                    <img class="img" src="img/1.1.png">
                </label>
                <label> 
                    <input type="radio" name="test" id="co1" name="co1" value="f">
                    <img class="img" src="img/1.2.png">
                </label>
                <label>
                    <input type="radio" name="test" id="co1" name="co1" value="g">
                    <img class="img" src="img/1.1.png">
                </label>
                <label> 
                    <input type="radio" name="test" id="co1" name="co1" value="h">
                    <img class="img" src="img/1.2.png">
                    <input type="radio" name="test" id="co1" name="co1" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
        
            <button name="submit" id="submit" class="submit-fort">Következő</button>
        </div>



        <div class="questionForm" id="co1" data-question="1">
            <td>1/10
            <div class="main-image-div">
                <img src="img/9.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="a">
                    <img name="co1" class="img" src="img/9.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="b">
                    <img name="co1" class="img" src="img/9.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="c">
                    <img name="co1" class="img" src="img/9.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="d">
                    <img name="co1" class="img" src="img/9.4.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="e">
                    <img name="co1" class="img" src="img/9.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co1" name="co1" value="f">
                    <img name="co1" class="img" src="img/9.6.png" />
                    <input type="radio" class="img" id="co1" name="co1" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        


        <div class="questionForm" id="co2" data-question="2">
            <td>2/10
            <div class="main-image-div">
                <img src="img/6.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="a">
                    <img name="co2" class="img" src="img/6.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="b">
                    <img name="co2" class="img" src="img/6.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="c">
                    <img name="co2" class="img" src="img/6.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="d">
                    <img name="co2" class="img" src="img/6.4.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="e">
                    <img name="co2" class="img" src="img/6.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co2" name="co2" value="f">
                    <img name="co2" class="img" src="img/6.6.png" />
                    <input type="radio" class="test" id="co2" name="co2" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        

        
        <div class="questionForm" id="co3" data-question="3">
            <td>3/10
            <div class="main-image-div">
                <img src="img/7.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="a">
                    <img name="co3" class="img" src="img/7.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="b">
                    <img name="co3" class="img" src="img/7.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="c">
                    <img name="co3" class="img" src="img/7.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="d">
                    <img name="co3" class="img" src="img/7.4.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="e">
                    <img name="co3" class="img" src="img/7.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co3" name="co3" value="f">
                    <img name="co3" class="img" src="img/7.6.png" />
                    <input type="radio" class="test" id="co3" name="co3" value="0" checked="checked" style="opacity: 0;">
                </label>
                <script LANGUAGE="JavaScript" src="Js/box.js"></script> 
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co4" data-question="4">
            <td>4/10
            <div class="main-image-div">
                <img src="img/1.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="a">
                    <img name="co4" class="img" src="img/1.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="b">
                    <img name="co4" class="img" src="img/1.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="c">
                    <img name="co4" class="img" src="img/1.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="d">
                    <img name="co4" class="img" src="img/1.4.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="e">
                    <img name="co4" class="img" src="img/1.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co4" name="co4" value="f">
                    <img name="co4" class="img" src="img/1.6.png" />
                    <input type="radio" class="test" id="co4" name="co4" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co5" data-question="5">
            <td>5/10
            <div class="main-image-div">
                <img src="img/10.png" class="main-image"></img>
            </div>
            <div>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="a">
                    <img name="co5" class="img" src="img/10.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="b">
                    <img name="co5" class="img" src="img/10.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="c">
                    <img name="co5" class="img" src="img/10.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="d">
                    <img name="co5" class="img" src="img/10.4.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="e">
                    <img name="co5" class="img" src="img/10.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co5" name="co5" value="f">
                    <img name="co5" class="img" src="img/10.6.png" />
                    <input type="radio" class="test" id="co5" name="co5" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co6" data-question="6">
            <td>6/10
            <div class="main-image-div">
                <img src="img/2.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co6" name="co6" value="a">
                    <img name="co6" class="img" src="img/2.1.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co6" name="co6" value="b">
                    <img name="co6" class="img" src="img/2.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co6" name="co6" value="c">
                    <img name="co6" class="img" src="img/2.3.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co6" name="co6" value="d">
                    <img name="co6" class="img" src="img/2.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co6" name="co6" value="e">
                    <img name="co6" class="img" src="img/2.5.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co6" name="co6" value="f">
                    <img name="co6" class="img" src="img/2.6.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co6" name="co6" value="g">
                    <img name="co6" class="img" src="img/2.7.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co6" name="co6" value="h">
                    <img name="co6" class="img" src="img/2.8.png" />
                    <input type="radio" class="test" id="co6" name="co6" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co7" data-question="7">
            <td>7/10
            <div class="main-image-div">
                <img src="img/3.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="a">
                    <img name="co7" class="img" src="img/3.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="b">
                    <img name="co7" class="img" src="img/3.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="c">
                    <img name="co7" class="img" src="img/3.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="d">
                    <img name="co7" class="img" src="img/3.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="e">
                    <img name="co7" class="img" src="img/3.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="f">
                    <img name="co7" class="img" src="img/3.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="g">
                    <img name="co7" class="img" src="img/3.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co7" name="co7" value="h">
                    <img name="co7" class="img" src="img/3.8.png" />
                    <input type="radio" class="test" id="co7" name="co7" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>

        <div class="questionForm" id="co8" data-question="8">
            <td>8/10
            <div class="main-image-div">
                <img src="img/4.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="a">
                    <img name="co8" class="img" src="img/4.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="b">
                    <img name="co8" class="img" src="img/4.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="c">
                    <img name="co8" class="img" src="img/4.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="d">
                    <img name="co8" class="img" src="img/4.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="e">
                    <img name="co8" class="img" src="img/4.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="f">
                    <img name="co8" class="img" src="img/4.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="g">
                    <img name="co8" class="img" src="img/4.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co8" name="co8" value="h">
                    <img name="co8" class="img" src="img/4.8.png" />
                    <input type="radio" class="test" id="co8" name="co8" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co9" data-question="9">
            <td>9/10
            <div class="main-image-div">
                <img src="img/5.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="a">
                    <img name="co9" class="img" src="img/5.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="b">
                    <img name="co9" class="img" src="img/5.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="c">
                    <img name="co9" class="img" src="img/5.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="d">
                    <img name="co9" class="img" src="img/5.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="e">
                    <img name="co9" class="img" src="img/5.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="f">
                    <img name="co9" class="img" src="img/5.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="g">
                    <img name="co9" class="img" src="img/5.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co9" name="co9" value="h">
                    <img name="co9" class="img" src="img/5.8.png" />
                    <input type="radio" class="test" id="co9" name="co9" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submita" id="submita">Előző</button>
            <button name="submit" id="submit">Következő</button>
        </div>
        
        <div class="questionForm" id="co10" data-question="10">
            <td>10/10
            <div class="main-image-div">
                <img src="img/8.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="a">
                    <img name="co10" class="img" src="img/8.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="b">
                    <img name="co10" class="img" src="img/8.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="c">
                    <img name="co10" class="img" src="img/8.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="d">
                    <img name="co10" class="img" src="img/8.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="e">
                    <img name="co10" class="img" src="img/8.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="f">
                    <img name="co10" class="img" src="img/8.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="g">
                    <img name="co10" class="img" src="img/8.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co10" name="co10" value="h">
                    <img name="co10" class="img" src="img/8.8.png" />
                    <input type="radio" class="test" id="co10" name="co10" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <button name="submit11" id="submit" class="submit11">Következő</button>
        </div>
        


    </form>
         
</div>
    </main>

    <footer>
      <div class="pull-left">Összesen 10 kérdés</div>
    </footer>
</div>

</body>
</html>
