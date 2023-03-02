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
    <title>Main Website</title>
    <style>
        @font-face {
            font-family: 'font_light.otf';
            src:url('../srcs/font_light.otf');
            font-weight: normal;
            font-style: normal;
        }

      body {
        <!-- >background-image: url('srcs/main_back.jpg'); -->
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
        <div style="float: left; width: 10%;  height : 100px; line-height:0px; color: white;font-family: 'font_light.otf';font-size : 2em;">
            <a href="../main.php"><img src="../srcs/yu.jpg"></button></a>
        </div>
        <div style="float: left;width : 45%;color: white;font-family: 'font_light.otf';font-size : 1.2em;">
            <?php if ($_SESSION['userID'] == "Moderna" or $_SESSION['userID'] == "ALL"):?>
                <div style="line-height:150px;float: left;font-weight:bolder">
                    <Center><a href="M_logout.php" style="color:white;text-decoration:none;line-height:150px;height:50px;">Logout</a>
               </div>
            <?php else: ?>
                <div style="line-height:150px;float: left;font-weight:bolder">
                    <form method="post" action="M_login.php">
                        ID  :  <input type = 'text' Name='ID' style="height:50px;background-color:rgb(200,240,230);border:0;outline:0;font-family: 'font_light.otf';font-weight:bolder">
                        PW : <input type = 'text' name ='PW' style="height:50px;background-color:rgb(200,240,230);border:0;outline:0;font-family: 'font_light.otf';font-weight:bolder">
                        <input type='submit' value='Login' style="line-height:50px;height:50px;background-color:rgb(129,211,175);border:0;outline:0;font-family:'font_light.otf';font-weight:bolder;color:white">
                    </form>
            </div>
        <?php endif; ?>

        </div>
        <div style="float: left; width: 10%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="../Government/G_main.php" style="color:white;text-decoration:none">Government</a>
        </div>
                <div style="float: left; width: 10%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="../Hospital/choose.php" style="color:white;text-decoration:none">Hospital</a>
        </div>
                <div style="float: left; width: 20%;  height : 100px; line-height:150px; color: white;font-size : 1.5em;font-family: 'font_light.otf';text-align: right">
            <a href="choose.php" style="color:white;text-decoration:none">Pharmaceutical Company</a>
        </div>
    </div>
    <!--
    <div style="background-color: black ; color: white;width: 15%;float: left;height : 70px;text-align:center" >
    <?php

        if (isset($_SESSION['userID'])) {
        echo "관리자";
        }
        else {
        echo "사용자";
        }
    ?>
    </div>


    <div style="width: 100%; padding : 10px;font-family: Impact; float: left">
        <Center> This Website Provide Moderna Vaccine Information
    </div>
    -->
    <div style="width: 20%;height:1000px;padding : 10px; float: left;background-color:rgb(217,254,222);font-size : 1.5em;font-family: 'font_light.otf';">
        <?php if ($_SESSION['userID'] == "Moderna" or $_SESSION['userID'] == "ALL"): ?>
            <a style="color:gray;text-decoration:none;font-weight:bolder;font-size : 1em;">Administrator</a><br>
        <?php else: ?>
            <a style="color:gray;text-decoration:none;font-weight:bolder;font-size : 1em;">User</a><br>
        <?php endif; ?>
        <br>
        <a href="M_Status.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccine Status</a> <br><br>
        <a href="M_Info.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccine Info</a> <br><br>

        <?php if ($_SESSION['userID'] == "Moderna" or $_SESSION['userID'] == "ALL"):?>
            <a href="M_Factory.php" style="color:black;text-decoration:none;font-weight:bolder;">Production Factory</a> <br><br>

            <a href="M_Insert.php" style="color:black;text-decoration:none;font-weight:bolder;">  Entry Insert</a> <br><br>
            <a href="M_Delete.php" style="color:black;text-decoration:none;font-weight:bolder;">  Entry Delete</a> <br><br>
        <?php endif; ?>
    </div>
    <div style="width: 80%;height:1000px; padding : 10px; float: left;background-image: url('../srcs/main/모더나.jpg');background-repeat : no-repeat;background-size : 1300px;">
    </div>

  </body>
</html>


    <?php
        mysqli_close($mysqli);
    ?>

