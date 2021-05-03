<?php

function emptyInputSignup($fname, $uname, $email, $pwd, $repPwd) {
    $ret = false;
    if(empty($fname) || empty($uname) || empty($email) || empty($pwd) || empty($repPwd)){
        $ret = true;
    }
    return $ret;
}
function invalidUser($uname){
    $ret = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uname)){
        $ret = true;
    }
    return $ret;
}
function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ret = true;
    }else{
        $ret = false;
    }
    return $ret;
}
function samePass($pwd, $repPwd){
    $ret = false;
    if($pwd !== $repPwd){
        $ret = true;
    }
    return $ret;
}
function userExists($con, $uname, $email){
    $ret = false;
    $sql = "SELECT * FROM users WHERE usersId = ? OR usersEmail = ?;";
    //use prepared statement to make more secure, try without maybe
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: index.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $ret = false;
        return $ret;
    }

    mysqli_stmt_close($stmt);
}
function  addUser($con, $fname, $uname, $email, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUName, usersPwd) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: index.php?error=stmtFailed");
        exit();
    }
    //hashing
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fname, $email, $uname, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: index.php?error=none");
}