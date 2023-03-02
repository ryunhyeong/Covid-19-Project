<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<?php
    $conn = mysqli_connect('localhost','root','qwerqwer','term_project') or die("MySQL 접속 실패");
    if (isset($_POST['delete'])) {
    $Table = $_POST['Table'];
    $value = $_POST['val'];

    echo $value , $Table;
    $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'term_project' AND TABLE_NAME = '{$Table}' AND COLUMN_KEY = 'PRI';";
    $res = mysqli_query($conn, $sql);
    $d=mysqli_fetch_array($res);
    echo $d[0];
    $result = mysqli_query($conn, $sql);
    $sql = "DELETE FROM {$Table} WHERE {$d[0]} = {$value}";
    echo "final", $Table , "'{$d[0]}'", "{$value}";
    $result = mysqli_query($conn, $sql);
    echo 'nice';
    }
?>

    <script>
        alert("성공적으로 제거하였습니다!")
        location.href = "../main.php";
    </script>



