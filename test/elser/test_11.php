<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Website Feedback Form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      th, td {
      width: 8%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      padding: 3px;
      }
      .first-col {
      width: 16%;
      text-align: left;
      }
      textarea:hover {
      outline: none;
      border: 1px solid #1c87c9;
      }
      table {
      width: 100%;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .question {
      padding: 15px 0 5px;
      color: #095484;
      margin: 10px;
      
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  </head>

<main>
  <?php
      if (isset($_SESSION['usersEmail'])) {
          echo "Cool";
      } else {
           echo "Not cool";
      }
    ?>
</main>

  <body>



    <form action="Includes/test.inc.php" method="post">

        <p class="question">Kérem válaszoljon a kérdésekre legobb tudása szerint. Nincsenek jó vagy rossz válaszok.</p>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Egyáltalán nem</th>
            <th>Nem nagyon</th>
            <th>Közönbös</th>
            <th>Kicsit</th>
            <th>Nagyon</th>
          </tr>


            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q1" value="1" id="q1"></td>
                    <td><input type="radio" name="q1" value="2" id="q1"></td>
                    <td><input type="radio" name="q1" value="3" id="q1"></td>
                    <td><input type="radio" name="q1" value="4" id="q1"></td>
                    <td><input type="radio" name="q1" value="5" id="q1"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q2" value="1" id="q2"></td>
                    <td><input type="radio" name="q2" value="2" id="q2"></td>
                    <td><input type="radio" name="q2" value="3" id="q2"></td>
                    <td><input type="radio" name="q2" value="4" id="q2"></td>
                    <td><input type="radio" name="q2" value="5" id="q2"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q3" value="1" id="q3"></td>
                    <td><input type="radio" name="q3" value="2" id="q3"></td>
                    <td><input type="radio" name="q3" value="3" id="q3"></td>
                    <td><input type="radio" name="q3" value="4" id="q3"></td>
                    <td><input type="radio" name="q3" value="5" id="q3"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q4" value="1" id="q4"></td>
                    <td><input type="radio" name="q4" value="2" id="q4"></td>
                    <td><input type="radio" name="q4" value="3" id="q4"></td>
                    <td><input type="radio" name="q4" value="4" id="q4"></td>
                    <td><input type="radio" name="q4" value="5" id="q4"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q5" value="1" id="q5"></td>
                    <td><input type="radio" name="q5" value="2" id="q5"></td>
                    <td><input type="radio" name="q5" value="3" id="q5"></td>
                    <td><input type="radio" name="q5" value="4" id="q5"></td>
                    <td><input type="radio" name="q5" value="5" id="q5"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q6" value="1" id="q6"></td>
                    <td><input type="radio" name="q6" value="2" id="q6"></td>
                    <td><input type="radio" name="q6" value="3" id="q6"></td>
                    <td><input type="radio" name="q6" value="4" id="q6"></td>
                    <td><input type="radio" name="q6" value="5" id="q6"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q7" value="1" id="q7"></td>
                    <td><input type="radio" name="q7" value="2" id="q7"></td>
                    <td><input type="radio" name="q7" value="3" id="q7"></td>
                    <td><input type="radio" name="q7" value="4" id="q7"></td>
                    <td><input type="radio" name="q7" value="5" id="q7"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q8" value="1" id="q8"></td>
                    <td><input type="radio" name="q8" value="2" id="q8"></td>
                    <td><input type="radio" name="q8" value="3" id="q8"></td>
                    <td><input type="radio" name="q8" value="4" id="q8"></td>
                    <td><input type="radio" name="q8" value="5" id="q8"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q9" value="1" id="q9"></td>
                    <td><input type="radio" name="q9" value="2" id="q9"></td>
                    <td><input type="radio" name="q9" value="3" id="q9"></td>
                    <td><input type="radio" name="q9" value="4" id="q9"></td>
                    <td><input type="radio" name="q9" value="5" id="q9"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán szorongom1
                    <td><input type="radio" name="q10" value="1" id="q10"></td>
                    <td><input type="radio" name="q10" value="2" id="q10"></td>
                    <td><input type="radio" name="q10" value="3" id="q10"></td>
                    <td><input type="radio" name="q10" value="4" id="q10"></td>
                    <td><input type="radio" name="q10" value="5" id="q10"></td>
                </td>
            </tr>


        </table>

        <div class="register-button">
                <input type="submit" name="submit" class="inputButton" id="submit" value="Regisztráció" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

