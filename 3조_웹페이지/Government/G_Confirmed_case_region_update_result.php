<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");
   
   $Region = $_POST["Region"];
   $Confirmed_case = $_POST['Confirmed_case'];
   $Foreign_Inflow = $_POST["Foreign_Inflow"];
   $Dead = $_POST["Dead"];
   $Recovering = $_POST["Recovering"];
   $Recovered = $_POST["Recovered"];
   $Quarantine = $_POST["Quarantine"];
   $Quarantine_released = $_POST["Quarantine_released"];
   $Distance_step = $_POST["Distance_step"];


   $sql ="UPDATE gov_confirmed_by_region SET Confirmed_case='".$Confirmed_case;
   $sql = $sql."', Foreign_Inflow='".$Foreign_Inflow."', Dead='".$Dead."',Recovering='".$Recovering;
   $sql = $sql."', Recovered='".$Recovered."', Quarantine='".$Quarantine."', Quarantine_released='".$Quarantine_released."', Distance_step=".$Distance_step." WHERE Region='".$Region."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 지역별 확진자통계 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='G_Patients.php'> <--초기 화면</a> ";
?>
