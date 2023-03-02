<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM mod_company_quantity WHERE Vaccine_name='".$_GET['Vaccine_name']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Vaccine_name']." 해당 백신 없음!!!"."<br>";
            echo "<br> <a href='M_Status.php'> <--초기 화면</a> ";
            exit();
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='M_Status.php'> <--초기 화면</a> ";
        exit();
    }
    $row = mysqli_fetch_array($ret);
    $Vaccine_name = $row["Vaccine_name"];
    $having_amount = $row['having_amount'];
    $receive_amount = $row["receive_amount"];
    $ordered_amount = $row["ordered_amount"];
    $production_plan = $row["production_plan"];

 ?>
 


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 모더나 백신 물량 정보 수정 </h1>
<FORM METHOD="post"  ACTION="M_status_update_result.php">
    백신종류 : <INPUT TYPE ="text" NAME="Vaccine_name" VALUE=<?php echo $Vaccine_name ?> READONLY> <br>
    현재 보유량 : <INPUT TYPE ="text" NAME="having_amount" VALUE=<?php echo $having_amount ?> > <br> 
    금일 수급량 : <INPUT TYPE ="text" NAME="receive_amount" VALUE=<?php echo $receive_amount ?>> <br>
    금일 주문받은량 : <INPUT TYPE ="text" NAME="ordered_amount" VALUE=<?php echo $ordered_amount ?> > <br>
    생산계획 : <INPUT TYPE ="text" NAME="production_plan" VALUE=<?php echo $production_plan ?>> <br>

	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>