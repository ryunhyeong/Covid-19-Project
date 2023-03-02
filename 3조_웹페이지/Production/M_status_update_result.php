<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

   $Vaccine_name = $_POST["Vaccine_name"];
   $having_amount = $_POST['having_amount'];
   $receive_amount = $_POST["receive_amount"];
   $ordered_amount = $_POST["ordered_amount"];
   $production_plan = $_POST["production_plan"];

   $sql ="UPDATE mod_company_quantity SET having_amount='".$having_amount;
   $sql = $sql."', receive_amount='".$receive_amount."', ordered_amount='".$ordered_amount."', production_plan='".$production_plan."' WHERE Vaccine_name='".$Vaccine_name."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  모더나 백신 물량 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='M_Status.php'> <--초기 화면</a> ";
?>
