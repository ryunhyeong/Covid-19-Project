<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!");
    $sql = "SELECT * FROM pfi_vaccine_information WHERE lot_number='".$_GET['lot_number']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['lot_number']." 해당 백신 없음!!!"."<br>";
            echo "<br> <a href='P_Info.php'> <--초기 화면</a> ";
            exit();	
        }		   
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href=''P_Info.php'> <--초기 화면</a> ";
        exit();
    }   
    $row = mysqli_fetch_array($ret);

    $lot_number = $row["lot_number"];
    $production_date = $row["production_date"];
    $expiration_date = $row["expiration_date"];
    $production_manager_name = $row["production_manager_name"];
    $number_of_vaccine = $row["number_of_vaccine"];

 ?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 화이자 백신 정보 수정 </h1>
<FORM METHOD="post"  ACTION="P_info_update_result.php">

    백신 번호 : <INPUT TYPE ="text" NAME="lot_number" VALUE=<?php echo $lot_number ?> READONLY> <br>
    생산일자 : <INPUT TYPE ="text" NAME="production_date" VALUE=<?php echo $production_date ?> > <br> 
    유통기한 : <INPUT TYPE ="text" NAME="expiration_date" VALUE=<?php echo $expiration_date ?>> <br>
    생산 책임자 : <INPUT TYPE ="text" NAME="production_manager_name" VALUE=<?php echo $production_manager_name ?> > <br>
    백신갯수 : <INPUT TYPE ="text" NAME="number_of_vaccine" VALUE=<?php echo $number_of_vaccine ?>> <br>

	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>