<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

   $Myself_or_Agent = $_POST["Myself_or_Agent"];
   $Client_name = $_POST['Client_name'];
   $Reservation_date = $_POST["Reservation_date"];
   $Client_ssn = $_POST["Client_ssn"];
   $Client_age = $_POST["Client_age"];
   $Vaccine_type = $_POST["Vaccine_type"];
   $Client_phone = $_POST["Client_phone"];



   $sql ="INSERT INTO dg_reservation_system (Myself_or_Agent,Client_name,Reservation_date,Client_ssn,Client_age,Vaccine_type,Client_phone) VALUES ('".$Myself_or_Agent;
   $sql = $sql."','".$Client_name."','".$Reservation_date."','".$Client_ssn."','".$Client_age;
   $sql = $sql."','".$Vaccine_type."','".$Client_phone."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  예약 추가 </h1>";
   if($ret) {
	   echo "예약이 성공적으로 접수됨.";
   }
   else {
	   echo "예약 접수 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='D_main.php'> <--초기 화면</a> ";
?>
