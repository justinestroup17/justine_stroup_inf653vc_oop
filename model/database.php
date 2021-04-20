<?php
    //local development server connection
    /*
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';*/
    //$password = 'pa55word';

    // Heroku connection
    $dsn = 'mysql:host=z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=q5eb1vj9faharoe4';
    $username = 'qt34l1n36ohrcfn6';
    $password = 'rbqy5g1b3879gv4e';
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        //$db = new PDO($dsn, $username);

        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        //include('../view/error.php');
        include('C:\xampp\htdocs\justine_stroup_inf653vc_authentication\view\error.php');
        exit();
    }
?>