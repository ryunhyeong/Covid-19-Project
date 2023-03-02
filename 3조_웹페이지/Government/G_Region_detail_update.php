<?php
    $con=mysqli_connect("localhost",'root','qwerqwer',"term_project") or die("term_project 접속 실패 !!");
    $sql = "SELECT * FROM gov_vaccination_region_detail WHERE Region='".$_GET['Region']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Region']." 해당 지역이 없음!!!"."<br>";
            echo "<br> <a href='G_Region.php'> <--초기 화면</a> ";
            exit();	
        }		   
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='G_Region.php'> <--초기 화면</a> ";
        exit();
    }   

    $row = mysqli_fetch_array($ret);
    $Region = $row["Region"];
    $Pfizer_First = $row['Pfizer_First'];
    $Percentage_P_first = $row["Percentage_P_first"];
    $Pfizer_Second = $row["Pfizer_Second"];
    $Percentage_P_second = $row["Percentage_P_second"];
    $Moderna_First = $row["Moderna_First"];
    $Percentage_M_first = $row["Percentage_M_first"];  
    $Moderna_Second = $row["Moderna_Second"]; 
    $Percentage_M_second = $row["Percentage_M_second"];

 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 1,2차 백신물량 수정 </h1>
<FORM METHOD="post"  ACTION="G_Region_detail_update_result.php">
	지역 : <INPUT TYPE ="text" NAME="Region" VALUE=<?php echo $Region ?> READONLY> <br>
	화이자1차접종 인구수 : <INPUT TYPE ="text" NAME="Pfizer_First" VALUE=<?php echo $Pfizer_First ?>> <br> 
	화이자1차접종 비율 : <INPUT TYPE ="text" NAME="Percentage_P_first" VALUE=<?php echo $Percentage_P_first ?>> <br>
	화이자2차접종 인구수 : <INPUT TYPE ="text" NAME="Pfizer_Second" VALUE=<?php echo $Pfizer_Second ?>> <br>
	화이자2차접종 비율 : <INPUT TYPE ="text" NAME="Percentage_P_second" VALUE=<?php echo $Percentage_P_second ?>> <br>
	모더나1차접종 인구수 : <INPUT TYPE ="text" NAME="Moderna_First" VALUE=<?php echo $Moderna_First ?>> <br>
	모더나1차접종 비율 : <INPUT TYPE ="text" NAME="Percentage_M_first" VALUE=<?php echo $Percentage_M_first ?>> <br>
    모더나2차접종 인구수 : <INPUT TYPE ="text" NAME="Moderna_Second" VALUE=<?php echo $Moderna_Second ?>> <br>
	모더나2차접종 비율 : <INPUT TYPE ="text" NAME="Percentage_M_second" VALUE=<?php echo $Percentage_M_second ?>> <br>
  <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>