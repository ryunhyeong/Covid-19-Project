<!doctype php>

<?php
    $conn = mysqli_connect('localhost','root','qwerqwer','term_project') or die("MySQL 접속 실패");
    session_start();
?>

<!doctype html>



<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Government Website</title>
    <style>
        @font-face {
            font-family: 'font_light.otf';
            src:url('../srcs/font_light.otf');
            font-weight: normal;
            font-style: normal;
        }

      body {
        <!-- >background-image: url('../srcs/main_back.jpg'); -->
        background-repeat : no-repeat;
        background-size : cover;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
        text-align: center;
      }
    </style>



  </head>



  <body>
    <div style="background-color: rgb(129,211,175) ;float: left; width: 100%; height : 120px; line-height:70px; color: white">
        <div style="float: left; width: 10%;  height : 100px; line-height:0px; color: white">
            <a href="../main.php"><img src="../srcs/yu.jpg"></button></a>
        </div>
        <div style="float: left; width: 45%;  height : 100px; line-height:70px; color: white">
        </div>
        <div style="float: left; width: 10%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="G_main.php" style="color:white;text-decoration:none">Government</a>
        </div>
                <div style="float: left; width: 10%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="../Hospital/choose.php" style="color:white;text-decoration:none">Hospital</a>
        </div>
                <div style="float: left; width: 20%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="../Production/choose.php" style="color:white;text-decoration:none">Pharmaceutical Company</a>
        </div>
    </div>


    <div style="width: 20%;height:5000px;padding : 10px; float: left;background-color:rgb(217,254,222);font-size : 1.5em;font-family: 'font_light.otf';">
        <br><br>
        <a href="G_Hospital.php" style="color:black;text-decoration:none;font-weight:bolder;">Hospital</a> <br><br>
        <a href="G_Quantity.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccine Quantity</a> <br><br>
        <a href="G_Status.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccination Status</a> <br><br>
        <a href="G_Region.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccination by Region</a> <br><br>
        <a href="G_Patients.php" style="color:black;text-decoration:none;font-weight:bolder;">Covid19 Patients Info</a> <br><br>

    </div>

        <div style="width: 80%;height:1000px; padding : 10px; float: left;background-image: url('../srcs/main/정부.jpg');background-repeat : no-repeat;background-size : 1300px;">
        </div>





  </body>
</html>



    <?php


        mysqli_close($conn);
    ?>

