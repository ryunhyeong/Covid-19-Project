<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

   $Cotest_name = $_POST["Cotest_name"];
   $Cotest_sex = $_POST['Cotest_sex'];
   $Test_date = $_POST["Test_date"];
   $Confirmation_Y_N = $_POST["Confirmation_Y_N"];
   $Cotest_ssn = $_POST["Cotest_ssn"];
   $Cotest_phone = $_POST["Cotest_phone"];
   $Cotest_address = $_POST["Cotest_address"];



   $sql ="UPDATE kp_corona_test_people SET Cotest_name='".$Cotest_name;
   $sql = $sql."', Cotest_sex='".$Cotest_sex."', Test_date='".$Test_date."',Confirmation_Y_N='".$Confirmation_Y_N;
   $sql = $sql."', Cotest_phone='".$Cotest_phone."', Cotest_address='".$Cotest_address."' WHERE Cotest_ssn='".$Cotest_ssn."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  코로나 검사자 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='K_Cotest.php'> <--초기 화면</a> ";
?>
