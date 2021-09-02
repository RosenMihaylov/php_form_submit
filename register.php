<?php
    include_once 'db.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    //Inserting data into database
    $sqlPost = "INSERT INTO users (userName, password) VALUES('$userName', '$password');";
    $postResult = mysqli_query($conn, $sqlPost);

    header("Location: index.php?submit=success");

//    function pre_r($array) {
//        echo "<pre>";
//        print_r($array);
//        echo '</pre>';
//    }
//    pre_r($_REQUEST);
//    if (isset($_GET['submit'])){ //The post has been submitted
//        echo 'The form is using Get method!<br/>';
//        echo "User name: ".$_GET['firstName'].'<br/>';
//        echo "Password: ".$_GET['password'].'<br/>';
//    }
//    elseif (isset($_POST['submit'])){ //The post has been submitted
//        echo 'The form is using Post method!<br/>';
//        echo "User name: ".$_POST['firstName'].'<br/>';
//        echo "Password: ".$_POST['password'].'<br/>';
//    }