<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM pfi_factory_information WHERE production_manager='".$_GET['production_manager']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['production_manager']." 해당 공장 없음!!!"."<br>";
            echo "<br> <a href='P_Factory.php'> <--초기 화면</a> ";
            exit();
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='P_Factory.php'> <--초기 화면</a> ";
        exit();
    }
    $row = mysqli_fetch_array($ret);

    $production_manager = $row["production_manager"];
    $production_plant_name = $row["production_plant_name"];
    $plant_address = $row["plant_address"];
    $plant_num = $row["plant_num"];
    $today_sold = $row["today_sold"];
    $today_make = $row["today_make"];
    $Future_production = $row["Future_production"];

 ?>
 


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 화이자 백신 생산 공장 정보 수정 </h1>
<FORM METHOD="post"  ACTION="P_factory_update_result.php">
    생산 책임자 : <INPUT TYPE ="text" NAME="production_manager" VALUE=<?php echo $production_manager ?> READONLY> <br>
    생산 공장명 : <INPUT TYPE ="text" NAME="production_plant_name" VALUE=<?php echo $production_plant_name ?> > <br> 
    공장 주소 : <INPUT TYPE ="text" NAME="plant_address" VALUE=<?php echo $plant_address ?>> <br>
    공장 전화번호 : <INPUT TYPE ="text" NAME="plant_num" VALUE=<?php echo $plant_num ?> > <br>
    금일 출품량 : <INPUT TYPE ="text" NAME="today_sold" VALUE=<?php echo $today_sold ?>> <br>
    금일 생산량 : <INPUT TYPE ="text" NAME="today_make" VALUE=<?php echo $today_make ?>> <br>
    생산 예정량 : <INPUT TYPE ="text" NAME="Future_production" VALUE=<?php echo $Future_production ?>> <br>

	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>