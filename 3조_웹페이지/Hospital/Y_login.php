<html>
    <head>
    <meta charset="utf-8">
    </head>

<?php
    $conn = mysqli_connect('localhost','root','qwerqwer','term_project') or die("MySQL 접속 실패");
    $id = $_POST['ID'];
    $password = $_POST['PW'];

    $sql = "SELECT * FROM users WHERE ID ='{$id}' and PW = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['AREA'] == 'YU' or $row['AREA'] == 'ALL') {
        session_start();
        $_SESSION['userID'] = $row['AREA'];
        print_r($_SESSION);

?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "Y_main.php";
    </script>
<?php } else { ?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "Y_main.php";
    </script>
<?php } ?>





