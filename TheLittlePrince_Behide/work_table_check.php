<?php
        include "./save.php";
        $uid = $_POST["uid"];
        $pwd = $_POST["upw"];
        //uid and upw
        echo $uid;
        echo $pwd;

        if ($uid == $volt) {
            if ($pwd == $nut) {
                header( 'Location: /work_table2.php' );
            }
        }else{
            echo "<script>alert('Sry!! Nope!');</script>";
            header( 'Location: /work_table.php' );
        }
    ?>
