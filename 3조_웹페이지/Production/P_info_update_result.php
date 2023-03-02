<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

    $lot_number = $_POST["lot_number"];
    $production_date = $_POST["production_date"];
    $expiration_date = $_POST["expiration_date"];
    $production_manager_name = $_POST["production_manager_name"];
    $number_of_vaccine = $_POST["number_of_vaccine"];

     $sql ="UPDATE pfi_vaccine_information SET production_date='".$production_date;
   $sql = $sql."', expiration_date='".$expiration_date."', production_manager_name='".$production_manager_name."',number_of_vaccine='".$number_of_vaccine."' WHERE lot_number='".$lot_number."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  화이자 백신 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='P_Info.php'> <--초기 화면</a> ";
?>
