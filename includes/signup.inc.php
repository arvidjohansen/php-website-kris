<?php
error_log(print_r($_POST, true));
error_log(print_r($_GET, true));
error_log("running signup.inc.php");

if (isset($_POST["submit"])) {
    error_log("inside isset post submit");

    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    error_log($name . $email . $username . $pwd . $pwdRepeat);
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdmatch($pwd, $pwd) !== false) {
        header("location: ../signup.php?error=incorrectpasswords");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
	error_log(print_r($_POST, true));
	error_log("else: signup.inc.php");
    header("location: ../signup.php");

}
?>