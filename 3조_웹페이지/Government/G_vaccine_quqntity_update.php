<?php
   
    $con=mysqli_connect("localhost",'root','qwerqwer',"term_project") or die("term_project 접속 실패 !!");
      $sql = "SELECT * FROM goverment_vaccine_quantity WHERE Pharmacist='".$_GET['Pharmacist']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Pharmacist']." 해당 제약사가 없음!!!"."<br>";
            echo "<br> <a href='G_Quantity.php'> <--초기 화면</a> ";
            exit();	
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='G_Quantity.phpl'> <--초기 화면</a> ";
        exit();
    }   
    $row = mysqli_fetch_array($ret);
    $pharmacist = $row["Pharmacist"];
    $Vaccine_Name = $row['Vaccine_Name'];
    $Now_having = $row["Now_having"];
    $today_using = $row["today_using"];
    $today_production = $row["today_production"];
    $Estimated_need = $row["Estimated_need"];
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 정부 백신물량 수정 </h1>
<FORM METHOD="post"  ACTION="G_vaccine_quqntity_update_result.php">
	제약사 : <INPUT TYPE ="text" NAME="Pharmacist" VALUE=<?php echo $pharmacist ?> READONLY> <br>
	백신명 : <INPUT TYPE ="text" NAME="Vaccine_Name" VALUE=<?php echo $Vaccine_Name ?>> <br> 
	현재 보유량 : <INPUT TYPE ="text" NAME="Now_having" VALUE=<?php echo $Now_having ?>> <br>
	금일 사용량 : <INPUT TYPE ="text" NAME="today_using" VALUE=<?php echo $today_using ?>> <br>
	금일 생산량  : <INPUT TYPE ="text" NAME="today_production" VALUE=<?php echo $today_production ?>> <br>
	추정된 필요량 : <INPUT TYPE ="text" NAME="Estimated_need" VALUE=<?php echo $Estimated_need ?>> <br>
    <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>