<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");

   $Pat_num = $_POST["Pat_num"];
   $Pat_name = $_POST['Pat_name'];
   $Register_date = $_POST["Register_date"];
   $Discharg_date = $_POST["Discharg_date"];
   $Pat_ssn = $_POST["Pat_ssn"];
   $Date_of_death = $_POST["Date_of_death"];
   $Pat_phone = $_POST["Pat_phone"];
   $Pat_address = $_POST["Pat_address"];
   $side_effect = $_POST["side_effect"];



   $sql ="UPDATE dg_corona_patient_information SET Pat_name='".$Pat_name;
   $sql = $sql."', Register_date='".$Register_date."',Pat_ssn='".$Pat_ssn;
   $sql = $sql."', Pat_phone='".$Pat_phone."', Pat_address='".$Pat_address."', side_effect='".$side_effect;
   if ($Date_of_death != ''):
      $sql = $sql."', Date_of_death='".$Date_of_death;
   endif;
   if ($Discharg_date != ''):
      $sql = $sql."', Discharg_date='".$Discharg_date;
   endif;
   $sql = $sql."' WHERE Pat_num='".$Pat_num."'";

   $ret = mysqli_query($con, $sql);

    echo "<h1>  대구병원 확진자 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);
   
   echo "<br> <a href='D_Patient.php'> <--초기 화면</a> ";
?>
