<?php
     $con=mysqli_connect("165.229.187.226", "ryun", "ryun", "term_project") or die("term_project 접속 실패 !!");
 
     $Number = $_POST["Number"];
   $City = $_POST["City"];
   $Institution = $_POST["Institution"];
   $Address = $_POST["Address"];
   $P_Number = $_POST["P_Number"];
   $Number_of_corona_patient = $_POST["Number_of_corona_patient"];
   $Capacity = $_POST["Capacity"];

   $sql ="UPDATE gov_hospital SET City='".$City."', Institution='".$Institution;
   $sql = $sql."', Address='".$Address."', P_Number='".$P_Number."',Number_of_corona_patient='".$Number_of_corona_patient;
   $sql = $sql."', Capacity=".$Capacity." WHERE Number='".$Number."'";
   
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
   
   echo "<br> <a href='G_Hospital.php'> <--초기 화면</a> ";
?>
