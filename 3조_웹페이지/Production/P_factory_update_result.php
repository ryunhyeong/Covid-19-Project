<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");
  
    $production_manager = $_POST["production_manager"];
    $production_plant_name = $_POST["production_plant_name"];
    $plant_address = $_POST["plant_address"];
    $plant_num = $_POST["plant_num"];
    $today_sold = $_POST["today_sold"];
    $today_make = $_POST["today_make"];
    $Future_production = $_POST["Future_production"];


    $sql ="UPDATE pfi_factory_information SET production_plant_name='".$production_plant_name;
    $sql = $sql."', plant_address='".$plant_address."', plant_num='".$plant_num."',today_sold='".$today_sold;
    $sql = $sql."', today_make='".$today_make."', Future_production='".$Future_production."' WHERE production_manager='".$production_manager."'";
    
   $ret = mysqli_query($con, $sql);
 
    echo "<h1>  화이자 백신 생산 공장 정보 수정 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con); 
   
   echo "<br> <a href='P_Factory.php'> <--초기 화면</a> ";
?>
