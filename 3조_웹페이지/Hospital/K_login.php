<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

<?php
    $conn = mysqli_connect('localhost','root','qwerqwer','term_project') or die("MySQL 접속 실패");
    $id = $_POST['ID'];
    $password = $_POST['PW'];

    $sql = "SELECT * FROM users WHERE ID ='{$id}' and PW = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['AREA'] == 'KB' or $row['AREA'] == 'ALL') {
        session_start();
        $_SESSION['userID'] = $row['AREA'];
        print_r($_SESSION);

?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "K_main.php";
    </script>
<?php } else { ?>
    <script>
        alert("로그인에 실패하였습니다");
        location.href = "K_main.php";
    </script>
<?php } ?>





