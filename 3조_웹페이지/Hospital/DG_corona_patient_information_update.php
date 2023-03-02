<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM dg_corona_patient_information WHERE Pat_num='".$_GET['Pat_num']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Pat_num']." 해당 환자 없음!!!"."<br>";
            echo "<br> <a href='D_Patient.php'> <--초기 화면</a> ";
            exit();
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='D_Patient.php'> <--초기 화면</a> ";
        exit();
    }
    $row = mysqli_fetch_array($ret);
    $Pat_num = $row["Pat_num"];
    $Pat_name = $row['Pat_name'];
    $Register_date = $row["Register_date"];
    $Discharg_date = $row["Discharg_date"];
    $Pat_ssn = $row["Pat_ssn"];
    $Date_of_death = $row["Date_of_death"];
    $Pat_phone = $row["Pat_phone"];
    $Pat_address = $row["Pat_address"];
    $side_effect = $row["side_effect"];
 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 대구병원 확진자 정보 수정 </h1>
<FORM METHOD="post"  ACTION="DG_corona_patient_information_update_result.php">
	환자번호 : <INPUT TYPE ="text" NAME="Pat_num" VALUE=<?php echo $Pat_num ?> READONLY> <br>
	환자이름 : <INPUT TYPE ="text" NAME="Pat_name" VALUE=<?php echo $Pat_name ?>> <br> 
	등록일 : <INPUT TYPE ="date" NAME="Register_date" VALUE=<?php echo $Register_date ?>> <br>
	퇴원일 : <INPUT TYPE ="date" NAME="Discharg_date" VALUE=<?php echo $Discharg_date ?>> <br>
	주민번호 : <INPUT TYPE ="text" NAME="Pat_ssn" VALUE=<?php echo $Pat_ssn ?>> <br>
	사망일 : <INPUT TYPE ="date" NAME="Date_of_death" VALUE=<?php echo $Date_of_death ?>> <br>
    전화번호 : <INPUT TYPE ="text" NAME="Pat_phone" VALUE=<?php echo $Pat_phone ?>> <br>
    주소 : <INPUT TYPE ="text" NAME="Pat_address" VALUE=<?php echo $Pat_address ?>> <br>
	부작용 : <INPUT TYPE ="text" NAME="side_effect" VALUE=<?php echo $side_effect ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>