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
    <div style="width: 70%;height:1000px; padding : 10px; float: left;font-family: 'font_light.otf';">

        <h1> Vaccination by Region </h1>
        <h5> 지역별로 화이자/모더나 1차, 2차, 부스터샷의 접종자의 수와 접종자수의 비율(%)에 대한 정보를 포함하고 있습니다.</h5>
        <hr>
        <div style="width:100%;float: left">
                <form method="post" action="G_Region.php">
                    Region : <input type = 'text' Name='Name' >
                    <input type='submit' value='Search' >
                </form>
        </div>



        <div style="float: left;width : 100%;font-family: 'font_light.otf';font-size : 1.2em;">
            <?php if (isset($_POST['Name']) and $_POST['Name'] != ""): $name = $_POST['Name'];?>


                <table>
                    <thead>
                        <tr>
                            <?php
                            $sql = "desc gov_vaccination_region";
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
                            $sql = "select * from gov_vaccination_region where Region='{$name}' order by Population desc";
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
                            $sql = "desc gov_vaccination_region";
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
                            $sql = "select * from gov_vaccination_region order by Population desc";
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
        </div>

        <div style="float: left;width : 100%;height:20px"></div>
        <br><br>

        <div style="float: left;width:30%">
            <FORM METHOD="get" ACTION="G_Region_detail_update.php">
           Region : <INPUT TYPE = "text" NAME="Region">
          <INPUT TYPE ="submit" VALUE="Change">
        </FORM>
        </div>

        <div style="width:50%;float: left">
            <form method="post" action="G_Region.php">
                Region :<input type = 'text' Name='Name2'>
                <input type='submit' value='Search'>
            </form>
        </div>


        <div style="float: left;width : 100%;font-family: 'font_light.otf';font-size : 1.2em;">
            <?php if (isset($_POST['Name2']) and $_POST['Name2'] != ""): $name2 = $_POST['Name2'];?>


                <table>
                    <thead>
                        <tr>
                            <?php
                            $sql = "desc gov_vaccination_region_detail";
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
                            $sql = "select * from gov_vaccination_region_detail where Region='{$name2}' order by Pfizer_First desc";
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
                            $sql = "desc gov_vaccination_region_detail";
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
                            $sql = "select * from gov_vaccination_region_detail order by Pfizer_First desc";
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
        </div>
        <br>

    </div>


  </body>
</html>



    <?php


        mysqli_close($conn);
    ?>

