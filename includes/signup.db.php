<?php
//move php include to below button so you can just echo error messages from get method there
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repPwd = $_POST["repPwd"];

    require_once 'db.php';
    require_once 'functions.php';

    echo "name " . $fname . "\n";
    echo "uname " . $uname . "\n";
    echo "email " . $email . "\n";
    echo "pwd " . $pwd . "\n";
    echo "repPwd " . $repPwd . "\n";
    if (emptyInputSignup($fname, $uname, $email, $pwd, $repPwd) !== false){
        header("location: index.php?error=emptyInput");
        exit();
    }
    if (invalidUser($uname) !==false){
        header("location: index.php?error=invalidUser");
        exit();
    }
    if (invalidEmail($email) !==false ){
        header("location: index.php?error=invalidUser");
        exit();        
    }
    if (samePass($pwd, $repPwd) !==false ){
        header("location: index.php?error=notSamePass");
        exit();        
    }
    if (userExists($con, $uname, $email) !==false ){
        header("location: index.php?error=userTaken");
        exit();        
    }
    addUser($con, $fname, $uname, $email, $pwd);
}
else {
    header("location: index.php");
    exit();
}