<?php
   $con=mysqli_connect("localhost", "root", "qwerqwer", "term_project") or die("government 접속 실패 !!");

   $pharmacist = $_POST["Pharmacist"];
   $First_Shot = $_POST["First_Shot"];
   $Percentage_of_First = $_POST["Percentage_of_First"];
   $Second_Shot = $_POST["Second_Shot"];
   $Percentage_of_Second = $_POST["Percentage_of_Second"];
   $Booster_Shot = $_POST["Booster_Shot"];
   $Percentage_of_Booster = $_POST["Percentage_of_Booster"];  

   $sql ="UPDATE gov_vaccination_status_ratio SET First_Shot='".$First_Shot;
   $sql = $sql."', Percentage_of_First='".$Percentage_of_First."', Second_Shot='".$Second_Shot."',Percentage_of_Second='".$Percentage_of_Second;
   $sql = $sql."', Booster_Shot='".$Booster_Shot."', Percentage_of_Booster=".$Percentage_of_Booster." WHERE Pharmacist='".$pharmacist."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);
   
   echo "<br> <a href='G_Status.php'> <--초기 화면</a> ";
?>
