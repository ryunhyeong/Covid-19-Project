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
    <title> Kyungpook University Hospital</title>
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
            <?php if ($_SESSION['userID'] == "KB" or $_SESSION['userID'] == "ALL"):?>
                <div style="line-height:150px;float: left;font-weight:bolder">
                    <Center><a href="K_logout.php" style="color:white;text-decoration:none;line-height:150px;height:50px;">Logout</a>
               </div>
            <?php else: ?>
                <div style="line-height:150px;float: left;font-weight:bolder">
                    <form method="post" action="K_login.php">
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
            <a href="../Production/choose.php" style="color:white;text-decoration:none">Pharmaceutical Company</a>
        </div>
    </div>

        <div style="width: 20%;height:1000px;padding : 10px; float: left;background-color:rgb(217,254,222);font-size : 1.5em;font-family: 'font_light.otf';">
        <?php if ($_SESSION['userID'] == "KB" or $_SESSION['userID'] == "ALL"): ?>
            <a style="color:gray;text-decoration:none;font-weight:bolder;font-size : 1em;">Administrator</a><br>
        <?php else: ?>
            <a style="color:gray;text-decoration:none;font-weight:bolder;font-size : 1em;">User</a><br>
        <?php endif; ?>
        <br>

        <a href="K_Patient.php" style="color:black;text-decoration:none;font-weight:bolder;">Covid19 Patients</a> <br><br>
        <?php if ($_SESSION['userID'] == "KB" or $_SESSION['userID'] == "ALL"):?>
            <a href="K_Cotest.php" style="color:black;text-decoration:none;font-weight:bolder;">Covid19 Cotest People</a> <br><br>
            <a href="K_Reservation.php" style="color:black;text-decoration:none;font-weight:bolder;">Reservation System</a> <br><br>
            <a href="K_insert.php" style="color:black;text-decoration:none;font-weight:bolder;">Entry Insert</a> <br><br>
                        <a href="K_delete.php" style="color:black;text-decoration:none;font-weight:bolder;">Entry Delete</a> <br><br>
        <?php else: ?>
            <a href="KP_apply.php" style="color:black;text-decoration:none;font-weight:bolder;">Vaccine Apply</a> <br><br>

        <?php endif; ?>
    </div>
    <div style="width: 70%;height:1000px; padding : 10px; float: left;font-family: 'font_light.otf';">

        <h1> Covid19 Cotest People  </h1>
        <h5> 병원 이름, 코로나 검사를 받은 사람의 이름, 성별, 검사 날짜, 휴대폰 번호, 코로나 확진 여부, 주민번호에 대한 정보를 포함하고 있습니다.</h5>
        <hr>


        <div style="float: left;width:30%">
            <FORM METHOD="get" ACTION="KP_corona_test_people_update.php">
           Cotest_ssn : <INPUT TYPE = "text" NAME="Cotest_ssn">
          <INPUT TYPE ="submit" VALUE="Change">
        </FORM>
        </div>

        <div style="width:50%;float: left">
            <form method="post" action="K_Cotest.php">
                Name :<input type = 'text' Name='Name'>
                <input type='submit' value='Search'>
            </form>
        </div>
        <br><br>

        <div style="float: left;width : 100%;font-family: 'font_light.otf';font-size : 1.2em;">
            <?php if (isset($_POST['Name']) and $_POST['Name'] != ""): $name = $_POST['Name'];?>


                <table>
                    <thead>
                        <tr>
                            <?php
                            $sql = "desc kp_corona_test_people";
                            $res = mysqli_query($conn,$sql);
                            $i = 0;
                            while ($d=mysqli_fetch_array($res)) {
                                echo "<th>" , $d[0] , "</th>";
                                $c_name[$i] = $d[0];
                                $i += 1;
                            }
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from kp_corona_test_people where Cotest_name='{$name}'";
                            $res = mysqli_query($conn,$sql);

                            while ($d=mysqli_fetch_array($res)) {
                            echo '<tr>';
                                for ($j=0;$j<$i;$j+=1) {
                                    echo '<td>' , $d[$c_name[$j]] , '</td>';
                                }
                            echo '</tr>';

                            }

                        ?>

                    </tbody>
                </table>




            <?php unset($_POST);else: ?>
                <table>
                    <thead>
                        <tr>
                            <?php
                            $sql = "desc kp_corona_test_people";
                            $res = mysqli_query($conn,$sql);
                            $i = 0;
                            while ($d=mysqli_fetch_array($res)) {
                                echo "<th>" , $d[0] , "</th>";
                                $c_name[$i] = $d[0];
                                $i += 1;
                            }
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from kp_corona_test_people";
                            $res = mysqli_query($conn,$sql);

                            while ($d=mysqli_fetch_array($res)) {
                            echo '<tr>';
                                for ($j=0;$j<$i;$j+=1) {
                                    echo '<td>' , $d[$c_name[$j]] , '</td>';
                                }
                            echo '</tr>';

                            }

                        ?>

                    </tbody>
                </table>
        <?php endif; ?>



  </body>
</html>


    <?php
        mysqli_close($conn);
    ?>

