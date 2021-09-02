<?php
    include_once 'db.php';
    $sqlGet = "SELECT * FROM users;";
    $getResults = mysqli_query($conn, $sqlGet);
    $resultCheck = mysqli_num_rows($getResults);
    echo "<br/> <h1>Registered users</h1> <br/>";

    if($resultCheck>0) {
        while ($row = mysqli_fetch_assoc($getResults)) {
            echo "ID: ".$row['id'].'<br/>';
            echo "userName: ".$row['userName'].'<br/>';
            echo "password: ".$row['password'].'<br/> <br/>';
        }
    } else {
        echo 'There are no users';
    }