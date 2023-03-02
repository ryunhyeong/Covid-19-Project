<?php
    $con=mysqli_connect("localhost",'root','qwerqwer',"term_project") or die("term_project 접속 실패 !!");
    $sql = "SELECT * FROM gov_vaccination_status_ratio WHERE Pharmacist='".$_GET['Pharmacist']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Pharmacist']." 해당 제약사가 없음!!!"."<br>";
            echo "<br> <a href='G_Status.php'> <--초기 화면</a> ";
            exit();	
        }		   
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='G_Status.php'> <--초기 화면</a> ";
        exit();
    }   
    $row = mysqli_fetch_array($ret);
    $pharmacist = $row["Pharmacist"];
    $First_Shot = $row['First_Shot'];
    $Percentage_of_First = $row["Percentage_of_First"];
    $Second_Shot = $row["Second_Shot"];
    $Percentage_of_Second = $row["Percentage_of_Second"];
    $Booster_Shot = $row["Booster_Shot"];
    $Percentage_of_Booster = $row["Percentage_of_Booster"];  
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 백신물량 수정 </h1>
<FORM METHOD="post"  ACTION="G_vaccination_ratio_update_result.php">
	제약사 : <INPUT TYPE ="text" NAME="Pharmacist" VALUE=<?php echo $pharmacist ?> READONLY> <br>
	1차접종 : <INPUT TYPE ="text" NAME="First_Shot" VALUE=<?php echo $First_Shot ?>> <br> 
	1차접종비율 : <INPUT TYPE ="text" NAME="Percentage_of_First" VALUE=<?php echo $Percentage_of_First ?>> <br>
	2차접종 : <INPUT TYPE ="text" NAME="Second_Shot" VALUE=<?php echo $Second_Shot ?>> <br>
	2차접종비율 : <INPUT TYPE ="text" NAME="Percentage_of_Second" VALUE=<?php echo $Percentage_of_Second ?>> <br>
	부스터샷 : <INPUT TYPE ="text" NAME="Booster_Shot" VALUE=<?php echo $Booster_Shot ?>> <br>
	부스터샷비율 : <INPUT TYPE ="text" NAME="Percentage_of_Booster" VALUE=<?php echo $Percentage_of_Booster ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>