<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
?>
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 백신 예약 </h1>
<FORM METHOD="post"  ACTION="DG_apply_result.php">
    본인/대리 예약구분 : <INPUT TYPE ="text" placeholder="본인" NAME="Myself_or_Agent" VALUE=<?php echo $Myself_or_Agent ?> > <br>
    이름 : <INPUT TYPE ="text" placeholder="배승호" NAME="Client_name" VALUE=<?php echo $Client_name ?> > <br>
    예약날짜 : <INPUT TYPE ="text" placeholder="2021-11-30" NAME="Reservation_date" VALUE=<?php echo $Reservation_date ?>> <br>
    주민번호 : <INPUT TYPE ="text" placeholder="980328-1122334" NAME="Client_ssn" VALUE=<?php echo $Client_ssn ?>> <br>
    나이 : <INPUT TYPE ="text" placeholder="24" NAME="Client_age" VALUE=<?php echo $Client_age ?>> <br>
    백신종류 : <INPUT TYPE ="text" placeholder="모더나" NAME="Vaccine_type" VALUE=<?php echo $Vaccine_type ?>> <br>
    전화번호 : <INPUT TYPE ="text" placeholder="010-8014-2323" NAME="Client_phone" VALUE=<?php echo $Client_phone ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="백신 예약">
</FORM>

</BODY>
</HTML>