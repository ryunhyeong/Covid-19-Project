<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<script>
    var str = "";
</script>
<?php
    $conn = mysqli_connect('localhost','root','qwerqwer','term_project') or die("MySQL 접속 실패");
    if (isset($_POST['insert'])) {
    $Table = $_POST['Table'];
    $sql = "desc {$Table}";
    $res = mysqli_query($conn, $sql);
    $i = 0;
    while ($d=mysqli_fetch_array($res)) {
        $table_val[$i]= $_POST[$i];
        $i += 1;
    }

    $values  = implode(", ", $table_val);
    echo $values;
    $sql = "INSERT INTO {$Table} VALUES ($values)";
    $result = mysqli_query($conn, $sql);
    }
?>
    <script>
        alert("성공적으로 입력했습니다!")
        location.href = "../main.php";
    </script>





