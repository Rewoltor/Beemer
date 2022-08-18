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
    <link rel="stylesheet" type="text/css" href="cogn/test11.css"> 
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
                <img src="img/9.png" class="main-image"></img>
            </div>
            <div class="answer6">
                <div class="choices1">
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
                </div>
                <div class="choices1">
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
            </div>

            <span class="button">
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>

        </div>
        


        <div class="questionForm" id="co2" data-question="2">
            <td>2/10
            <div class="main-image-div">
                <img src="img/6.png" class="main-image"></img>
            </div>
            <div class="answer6">
                <div class="choices1">
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
                </div>
                <div class="choices1">
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
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        

        
        <div class="questionForm" id="co3" data-question="3">
            <td>3/10
            <div class="main-image-div">
                <img src="img/7.png" class="main-image"></img>
            </div>
            <div class="answer6">
                <div class="choices1">
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
                </div>
                <div class="choices1">
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
                </div>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co4" data-question="4">
            <td>4/10
            <div class="answer6">
                <div class="main-image-div">
                    <img src="img/1.png" class="main-image"></img>
                </div>
                <div class="choices1">
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
                </div>
                <div class="choices1">
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
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co5" data-question="5">
            <td>5/10
            <div class="main-image-div">
                <img src="img/10.png" class="main-image"></img>
            </div>
            <div class="answer6">
                <div class="choices1">
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
                </div>
                <div class="choices1">
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
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
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
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
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
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
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
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
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
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
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
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        



        <div class="questionForm" id="co11" data-question="11">
            <td>11/20
            <div class="main-image-div">
                <img src="img/11.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="a">
                    <img name="co11" class="img" src="img/11.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="b">
                    <img name="co11" class="img" src="img/11.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="c">
                    <img name="co11" class="img" src="img/11.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="d">
                    <img name="co11" class="img" src="img/11.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="e">
                    <img name="co11" class="img" src="img/11.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="f">
                    <img name="co11" class="img" src="img/11.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="g">
                    <img name="co11" class="img" src="img/11.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co11" name="co11" value="h">
                    <img name="co11" class="img" src="img/11.8.png" />
                    <input type="radio" class="test" id="co11" name="co11" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        


        <div class="questionForm" id="co12" data-question="12">
            <td>12/20
            <div class="main-image-div">
                <img src="img/12.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="a">
                    <img name="co12" class="img" src="img/12.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="b">
                    <img name="co12" class="img" src="img/12.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="c">
                    <img name="co12" class="img" src="img/12.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="d">
                    <img name="co12" class="img" src="img/12.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="e">
                    <img name="co12" class="img" src="img/12.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="f">
                    <img name="co12" class="img" src="img/12.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="g">
                    <img name="co12" class="img" src="img/12.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co12" name="co12" value="h">
                    <img name="co12" class="img" src="img/12.8.png" />
                    <input type="radio" class="test" id="co12" name="co12" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>

        
        <div class="questionForm" id="co13" data-question="13">
            <td>13/20
            <div class="main-image-div">
                <img src="img/13.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="a">
                    <img name="co13" class="img" src="img/13.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="b">
                    <img name="co13" class="img" src="img/13.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="c">
                    <img name="co13" class="img" src="img/13.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="d">
                    <img name="co13" class="img" src="img/13.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="e">
                    <img name="co13" class="img" src="img/13.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="f">
                    <img name="co13" class="img" src="img/13.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="g">
                    <img name="co13" class="img" src="img/13.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co13" name="co13" value="h">
                    <img name="co13" class="img" src="img/13.8.png" />
                    <input type="radio" class="test" id="co13" name="co13" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co14" data-question="14">
            <td>14/20
            <div class="main-image-div">
                <img src="img/14.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="a">
                    <img name="co14" class="img" src="img/14.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="b">
                    <img name="co14" class="img" src="img/14.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="c">
                    <img name="co14" class="img" src="img/14.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="d">
                    <img name="co14" class="img" src="img/14.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="e">
                    <img name="co14" class="img" src="img/14.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="f">
                    <img name="co14" class="img" src="img/14.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="g">
                    <img name="co14" class="img" src="img/14.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co14" name="co14" value="h">
                    <img name="co14" class="img" src="img/14.8.png" />
                    <input type="radio" class="test" id="co14" name="co14" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co15" data-question="15">
            <td>15/20
            <div class="main-image-div">
                <img src="img/15.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="a">
                    <img name="co15" class="img" src="img/15.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="b">
                    <img name="co15" class="img" src="img/15.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="c">
                    <img name="co15" class="img" src="img/15.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="d">
                    <img name="co15" class="img" src="img/15.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="e">
                    <img name="co15" class="img" src="img/15.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="f">
                    <img name="co15" class="img" src="img/15.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="g">
                    <img name="co15" class="img" src="img/15.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co15" name="co15" value="h">
                    <img name="co15" class="img" src="img/15.8.png" />
                    <input type="radio" class="test" id="co15" name="co15" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co16" data-question="16">
            <td>16/20
            <div class="main-image-div">
                <img src="img/16.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co16" name="co16" value="a">
                    <img name="co16" class="img" src="img/16.1.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co16" name="co16" value="b">
                    <img name="co16" class="img" src="img/16.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co16" name="co16" value="c">
                    <img name="co16" class="img" src="img/16.3.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co16" name="co16" value="d">
                    <img name="co16" class="img" src="img/16.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co16" name="co16" value="e">
                    <img name="co16" class="img" src="img/16.5.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co16" name="co16" value="f">
                    <img name="co16" class="img" src="img/16.6.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co16" name="co16" value="g">
                    <img name="co16" class="img" src="img/16.7.png" />
                </label>
                <label>
                    <input type="radio" class="img6" id="co16" name="co16" value="h">
                    <img name="co16" class="img" src="img/16.8.png" />
                    <input type="radio" class="test" id="co16" name="co16" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co17" data-question="17">
            <td>17/20
            <div class="main-image-div">
                <img src="img/17.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="a">
                    <img name="co17" class="img" src="img/17.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="b">
                    <img name="co17" class="img" src="img/17.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="c">
                    <img name="co17" class="img" src="img/17.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="d">
                    <img name="co17" class="img" src="img/17.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="e">
                    <img name="co17" class="img" src="img/17.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="f">
                    <img name="co17" class="img" src="img/17.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="g">
                    <img name="co17" class="img" src="img/17.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co17" name="co17" value="h">
                    <img name="co17" class="img" src="img/17.8.png" />
                    <input type="radio" class="test" id="co17" name="co17" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>

        <div class="questionForm" id="co18" data-question="18">
            <td>18/20
            <div class="main-image-div">
                <img src="img/18.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="a">
                    <img name="co18" class="img" src="img/18.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="b">
                    <img name="co18" class="img" src="img/18.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="c">
                    <img name="co18" class="img" src="img/18.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="d">
                    <img name="co18" class="img" src="img/18.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="e">
                    <img name="co18" class="img" src="img/18.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="f">
                    <img name="co18" class="img" src="img/18.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="g">
                    <img name="co18" class="img" src="img/18.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co18" name="co18" value="h">
                    <img name="co18" class="img" src="img/18.8.png" />
                    <input type="radio" class="test" id="co18" name="co18" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co19" data-question="19">
            <td>19/20
            <div class="main-image-div">
                <img src="img/19.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="a">
                    <img name="co19" class="img" src="img/19.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="b">
                    <img name="co19" class="img" src="img/19.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="c">
                    <img name="co19" class="img" src="img/19.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="d">
                    <img name="co19" class="img" src="img/19.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="e">
                    <img name="co19" class="img" src="img/19.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="f">
                    <img name="co19" class="img" src="img/19.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="g">
                    <img name="co19" class="img" src="img/19.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co19" name="co19" value="h">
                    <img name="co19" class="img" src="img/19.8.png" />
                    <input type="radio" class="test" id="co19" name="co19" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit" id="submit" class="button b2">Következő</button>
                </div>
            </span>
        </div>
        
        <div class="questionForm" id="co20" data-question="20">
            <td>20/20
            <div class="main-image-div">
                <img src="img/20.png" class="main-image"></img>
            </div>
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="a">
                    <img name="co20" class="img" src="img/20.1.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="b">
                    <img name="co20" class="img" src="img/20.2.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="c">
                    <img name="co20" class="img" src="img/20.3.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="d">
                    <img name="co20" class="img" src="img/20.4.png" />
                </label>
            </div> 
            <div class="choices1">
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="e">
                    <img name="co20" class="img" src="img/20.5.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="f">
                    <img name="co20" class="img" src="img/20.6.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="g">
                    <img name="co20" class="img" src="img/20.7.png" />
                </label>
                <label>
                    <input type="radio" class="test" id="co20" name="co20" value="h">
                    <img name="co20" class="img" src="img/20.8.png" />
                    <input type="radio" class="test" id="co20" name="co20" value="0" checked="checked" style="opacity: 0;">
                </label>
            </div>
            <!-- <button name="submit11" id="submit" class="submit11">Következő</button> -->

            <span class="button">
                <div id="submita">
                    <button name="submita" id="submita" class="button b1">Előző</button>
                </div>
                <div id="submit">
                    <button name="submit11" id="submit" class="submit11" >Következő</button>
                </div>
            </span>


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
