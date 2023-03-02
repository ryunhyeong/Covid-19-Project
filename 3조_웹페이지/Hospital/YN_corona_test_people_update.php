<?php
    $con=mysqli_connect('localhost','root','qwerqwer','term_project') or die("term_project 접속 실패 !!"); 
    $sql = "SELECT * FROM yn_corona_test_people WHERE Cotest_ssn='".$_GET['Cotest_ssn']."'";

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
        if ($count==0) {
            echo $_GET['Cotest_ssn']." 해당 검사자 없음!!!"."<br>";
            echo "<br> <a href='Y_Cotest.php'> <--초기 화면</a> ";
            exit();
        }
    }
    else {
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='Y_Cotest.php'> <--초기 화면</a> ";
        exit();
    }
    $row = mysqli_fetch_array($ret);
    $Cotest_name = $row["Cotest_name"];
    $Cotest_sex = $row['Cotest_sex'];
    $Test_date = $row["Test_date"];
    $Confirmation_Y_N = $row["Confirmation_Y_N"];
    $Cotest_ssn = $row["Cotest_ssn"];
    $Cotest_phone = $row["Cotest_phone"];
    $Cotest_address = $row["Cotest_address"];

 ?>




<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 코로나 검사자 정보 수정 </h1>
<FORM METHOD="post"  ACTION="YN_corona_test_people_update_result.php">
	검사자이름 : <INPUT TYPE ="text" NAME="Cotest_name" VALUE=<?php echo $Cotest_name ?> > <br>
	성별 : <INPUT TYPE ="text" NAME="Cotest_sex" VALUE=<?php echo $Cotest_sex ?>> <br> 
	검사일 : <INPUT TYPE ="date" NAME="Test_date" VALUE=<?php echo $Test_date ?>> <br>
	확진결과 : <INPUT TYPE ="text" NAME="Confirmation_Y_N" VALUE=<?php echo $Confirmation_Y_N ?>> <br>
	주민번호 : <INPUT TYPE ="text" NAME="Cotest_ssn" VALUE=<?php echo $Cotest_ssn ?> READONLY> <br>
	전화번호 : <INPUT TYPE ="text" NAME="Cotest_phone" VALUE=<?php echo $Cotest_phone ?>> <br>
    주소 : <INPUT TYPE ="text" NAME="Cotest_address" VALUE=<?php echo $Cotest_address ?>> <br>
	 <BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>