<?php
   $con=mysqli_connect("localhost", "root", "qwerqwer", "term_project") or die("term_project 접속 실패 !!");
 
   $Hospital = $_POST["Hospital"];
   $pat_num = $_POST['pat_num'];
   $pat_name = $_POST["pat_name"];
   $ssn = $_POST["ssn"];
   $Address = $_POST["Address"];
   $P_Number = $_POST["P_Number"];


   $sql ="UPDATE gov_confirmed_case_identification SET Hospital='".$Hospital."', pat_name='".$pat_name;
   $sql = $sql."', ssn='".$ssn."', Address='".$Address."',P_Number='".$P_Number."' WHERE pat_num='".$pat_num."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 확진자 정보 수정 결과 </h1>";
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
