<?php 
try {
    $conn = mysqli_connect(
        'mysql',
        'root',
        'thelittleprincebehide',
        'thelittleprince',
        3306
    );
    
    // var_dump($conn);
    // echo "<br>=============<br>";

    // $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);
    // echo '<h1>'.$row['username'].'</h1>';
    // echo '<h1>'.$row['password'].'</h1>';

} catch(Exception $e){
    echo "SORRY NOPE!!";
}



?>