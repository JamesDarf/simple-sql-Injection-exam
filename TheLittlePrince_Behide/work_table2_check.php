<?php
include "./db.php";

try {



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $username = "username";     // 데이터베이스 사용자 이름
    // $password = "password";     // 데이터베이스 비밀번호

    // 연결 확인
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // 사용자로부터 입력 받기
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];

    // SQL 쿼리 작성
    $sql = "SELECT * FROM users WHERE username = '$uid' AND password = '$upw'";
    $result = mysqli_query($conn, $sql);

    // 결과 확인
    if (mysqli_num_rows($result) > 0) {
        // 로그인 성공
        header("Location: picture.php"); // boa.php로 이동
        exit();
    } else {
        // 로그인 실패
        echo "<script>alert('Sry!! Nope!');</script>";

    }

    // 연결 닫기
    mysqli_close($conn);
} } catch(Exception $e ) {
    echo "<script>alert('Sry!! Nope!');</script>";
    //header( 'Location: /work_table.php' );
}


?>
