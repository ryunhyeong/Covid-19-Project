
<?php

$con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");
     
   $Region = $_POST["Region"];
   $Pfizer_First = $_POST['Pfizer_First'];
   $Percentage_P_first = $_POST["Percentage_P_first"];
   $Pfizer_Second = $_POST["Pfizer_Second"];
   $Percentage_P_second = $_POST["Percentage_P_second"];
   $Moderna_First = $_POST["Moderna_First"];
   $Percentage_M_first = $_POST["Percentage_M_first"];  
   $Moderna_Second = $_POST["Moderna_Second"]; 
   $Percentage_M_second = $_POST["Percentage_M_second"];

   $sql ="UPDATE gov_vaccination_region_detail SET Pfizer_First='".$Pfizer_First."', Percentage_P_first='".$Percentage_P_first;
   $sql = $sql."', Pfizer_Second='".$Pfizer_Second."', Percentage_P_second='".$Percentage_P_second."',Moderna_First='".$Moderna_First;
   $sql = $sql."', Percentage_M_first='".$Percentage_M_first."', Moderna_Second='".$Moderna_Second."',  Percentage_M_second='".$Percentage_M_second."' WHERE Region='".$Region."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 지역별 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   echo "<br> <a href='G_Region.php'> <--초기 화면</a> ";
?>
