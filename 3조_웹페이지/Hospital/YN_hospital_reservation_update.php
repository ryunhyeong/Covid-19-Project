<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM yn_reservation_system WHERE Client_ssn='".$_GET['Client_ssn']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Client_ssn']." 해당 환자 없음!!!"."<br>";
            echo "<br> <a href='Y_Reservation.php'> <--초기 화면</a> ";
            exit();
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='Y_Reservation.php'> <--초기 화면</a> ";
        exit();
    }
    $row = mysqli_fetch_array($ret);
    $Myself_or_Agent = $row["Myself_or_Agent"];
    $Client_name = $row['Client_name'];
    $Reservation_date = $row["Reservation_date"];
    $Client_ssn = $row["Client_ssn"];
    $Client_age = $row["Client_age"];
    $Vaccine_type = $row["Vaccine_type"];
    $Client_phone = $row["Client_phone"];
 ?>
 


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 예약 정보 수정 </h1>
<FORM METHOD="post"  ACTION="YN_hospital_reservation_update_result.php">
    본인/대리 예약구분 : <INPUT TYPE ="text" NAME="Myself_or_Agent" VALUE=<?php echo $Myself_or_Agent ?> > <br>
    환자이름 : <INPUT TYPE ="text" NAME="Client_name" VALUE=<?php echo $Client_name ?> > <br> 
    예약날짜 : <INPUT TYPE ="date" NAME="Reservation_date" VALUE=<?php echo $Reservation_date ?>> <br>
    주민번호 : <INPUT TYPE ="text" NAME="Client_ssn" VALUE=<?php echo $Client_ssn ?> READONLY> <br> 
    나이 : <INPUT TYPE ="text" NAME="Client_age" VALUE=<?php echo $Client_age ?>> <br>
    백신종류 : <INPUT TYPE ="text" NAME="Vaccine_type" VALUE=<?php echo $Vaccine_type ?>> <br>
    전화번호 : <INPUT TYPE ="text" NAME="Client_phone" VALUE=<?php echo $Client_phone ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>