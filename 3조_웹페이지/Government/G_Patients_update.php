<?php
    $con=mysqli_connect("localhost",'root','qwerqwer',"term_project") or die("term_project 접속 실패 !!");
    $sql = "SELECT * FROM gov_confirmed_case_identification WHERE pat_num='".$_GET['pat_num']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Number']." 해당 환자 없음!!!"."<br>";
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
    $Hospital = $row["Hospital"];
    $pat_num = $row['pat_num'];
    $pat_name = $row["pat_name"];
    $ssn = $row["ssn"];
    $Address = $row["Address"];
    $P_Number = $row["P_Number"];
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 확진자 정보 수정 </h1>
<FORM METHOD="post"  ACTION="G_Patients_update_result.php">
	병원명 : <INPUT TYPE ="text" NAME="Hospital" VALUE=<?php echo $Hospital ?> > <br>
	환자번호 : <INPUT TYPE ="text" NAME="pat_num" VALUE=<?php echo $pat_num ?> READONLY> <br> 
	환자이름 : <INPUT TYPE ="text" NAME="pat_name" VALUE=<?php echo $pat_name ?>> <br>
	주민번호 : <INPUT TYPE ="text" NAME="ssn" VALUE=<?php echo $ssn ?>> <br>
	주소 : <INPUT TYPE ="text" NAME="Address" VALUE=<?php echo $Address ?>> <br>
	전화번호 : <INPUT TYPE ="text" NAME="P_Number" VALUE=<?php echo $P_Number ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>