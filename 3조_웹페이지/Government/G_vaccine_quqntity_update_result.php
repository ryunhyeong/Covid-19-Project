<?php
   $con=mysqli_connect("localhost",'root','qwerqwer',"term_project") or die("term_project 접속 실패 !!");
   
   $pharmacist = $_POST["Pharmacist"];
   $Vaccine_Name = $_POST["Vaccine_Name"];
   $Now_having = $_POST["Now_having"];
   $today_using = $_POST["today_using"];
   $today_production = $_POST["today_production"];
   $Estimated_need = $_POST["Estimated_need"];

   $sql ="UPDATE goverment_vaccine_quantity SET Vaccine_Name='".$Vaccine_Name;
   $sql = $sql."', Now_having='".$Now_having."', today_using='".$today_using."',today_production='".$today_production;
   $sql = $sql."', Estimated_need=".$Estimated_need." WHERE Pharmacist='".$pharmacist."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 정부 백신물량 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='G_Quantity.php'> <--초기 화면</a> ";
?>
