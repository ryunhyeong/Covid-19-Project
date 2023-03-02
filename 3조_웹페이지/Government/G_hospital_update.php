<?php
    $con=mysqli_connect("localhost", "root", "qwerqwer", "term_project") or die("MariaDB 접속 실패 !!");
    $sql = "SELECT * FROM gov_hospital WHERE Number='".$_GET['Number']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Number']." 해당 병원이 없음!!!"."<br>";
            echo "<br> <a href='main.html'> <--초기 화면</a> ";
            exit();	
        }		   
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='main.html'> <--초기 화면</a> ";
        exit();
    }   
    $row = mysqli_fetch_array($ret);
    $Number = $row["Number"];
    $City = $row['City'];
    $Institution = $row["Institution"];
    $Address = $row["Address"];
    $P_Number = $row["P_Number"];
    $Number_of_corona_patient = $row["Number_of_corona_patient"];
    $Capacity = $row["Capacity"];  
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 백신물량 수정 </h1>
<FORM METHOD="post"  ACTION="G_Hospital_update_result.php">
	넘버 : <INPUT TYPE ="text" NAME="Number" VALUE=<?php echo $Number ?> READONLY> <br>
	도시명 : <INPUT TYPE ="text" NAME="City" VALUE=<?php echo $City ?>> <br> 
	기관명 : <INPUT TYPE ="text" NAME="Institution" VALUE=<?php echo $Institution ?>> <br>
	주소 : <INPUT TYPE ="text" NAME="Address" VALUE=<?php echo $Address ?>> <br>
	병원_전화번호 : <INPUT TYPE ="text" NAME="P_Number" VALUE=<?php echo $P_Number ?>> <br>
	코로나환자인원수 : <INPUT TYPE ="text" NAME="Number_of_corona_patient" VALUE=<?php echo $Number_of_corona_patient ?>> <br>
	코로나환자 수용가능인원수 : <INPUT TYPE ="text" NAME="Capacity" VALUE=<?php echo $Capacity ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>