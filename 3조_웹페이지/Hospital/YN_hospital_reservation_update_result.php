<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

   $Myself_or_Agent = $_POST["Myself_or_Agent"];
   $Client_name = $_POST['Client_name'];
   $Reservation_date = $_POST["Reservation_date"];
   $Client_ssn = $_POST["Client_ssn"];
   $Client_age = $_POST["Client_age"];
   $Vaccine_type = $_POST["Vaccine_type"];
   $Client_phone = $_POST["Client_phone"];



   $sql ="UPDATE yn_reservation_system SET Myself_or_Agent='".$Myself_or_Agent;
   $sql = $sql."', Client_name='".$Client_name."', Reservation_date='".$Reservation_date."',Client_age='".$Client_age;
   $sql = $sql."', Vaccine_type='".$Vaccine_type."', Client_phone='".$Client_phone."' WHERE Client_ssn='".$Client_ssn."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  예약 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='Y_Reservation.php'> <--초기 화면</a> ";
?>
