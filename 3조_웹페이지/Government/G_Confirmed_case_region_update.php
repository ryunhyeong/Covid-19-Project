<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM gov_confirmed_by_region WHERE Region='".$_GET['Region']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Region']." 해당 지역 없음!!!"."<br>";
            echo "<br> <a href='G_Patients.php'> <--초기 화면</a> ";
            exit();	
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href=''G_Patients.php'> <--초기 화면</a> ";
        exit();
    }   
    $row = mysqli_fetch_array($ret);
    $Region = $row["Region"];
    $Confirmed_case = $row['Confirmed_case'];
    $Foreign_Inflow = $row["Foreign_Inflow"];
    $Dead = $row["Dead"];
    $Recovering = $row["Recovering"];
    $Recovered = $row["Recovered"];
    $Quarantine = $row["Quarantine"];
    $Quarantine_released = $row["Quarantine_released"];
    $Distance_step = $row["Distance_step"];
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 지역별 확진자통계 정보 수정 </h1>
<FORM METHOD="post"  ACTION="G_Confirmed_case_region_update_result.php">
	지역 : <INPUT TYPE ="text" NAME="Region" VALUE=<?php echo $Region ?> READONLY> <br>
	확진자수 : <INPUT TYPE ="text" NAME="Confirmed_case" VALUE=<?php echo $Confirmed_case ?>> <br> 
	해외유입수 : <INPUT TYPE ="text" NAME="Foreign_Inflow" VALUE=<?php echo $Foreign_Inflow ?>> <br>
	사망수 : <INPUT TYPE ="text" NAME="Dead" VALUE=<?php echo $Dead ?>> <br>
	회복중 : <INPUT TYPE ="text" NAME="Recovering" VALUE=<?php echo $Recovering ?>> <br>
	완치자수 : <INPUT TYPE ="text" NAME="Recovered" VALUE=<?php echo $Recovered ?>> <br>
    격리중 : <INPUT TYPE ="text" NAME="Quarantine" VALUE=<?php echo $Quarantine ?>> <br>
    격리해제수 : <INPUT TYPE ="text" NAME="Quarantine_released" VALUE=<?php echo $Quarantine_released ?>> <br>
	거리두기 단계 : <INPUT TYPE ="text" NAME="Distance_step" VALUE=<?php echo $Distance_step ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>