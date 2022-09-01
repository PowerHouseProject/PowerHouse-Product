<?php

require "db.php";

// $userEmail = "kulasekarsakmbs@gmail.com";

// $mail_query = "SELECT * FROM admin WHERE email = '" . $userEmail . "'";
// $mail_result = mysqli_query($conn, $mail_query);

// if (!$mail_result) {
//     $_SESSION["notification"] = "Email does not exist";
//     header("Location: ../index.php");
//     exit();
// } else {
//     print_r($mail_result);
// }


// $sql = "INSERT INTO pwdreset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES('safsdfsdfsdf', 'sdfsdfdf', 'sfsfsdf' , 'sddfdgfdgdfg' );";

// $l_result = mysqli_query($conn, $sql);

// if ($l_result) {
//     echo "query done";
// } else {
//     echo "not done";
// }

// die(mysqli_error($conn));

// $token = "bimsara";

// $hashedToken = password_hash($token, PASSWORD_DEFAULT);

// // echo "$hashedToken";

// $result = password_verify($token, $hashedToken);

// if ($result) {
//     echo "Done";
// } else {
//     echo "no";
//}
$sql_query = "SELECT password FROM admin WHERE username='" . $username . "' OR email='" . $username . "'";
        //$sql_query = "SELECT COUNT(*) AS cntUser FROM admin WHERE username='" . $username . "' AND password='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        print_r($result);

?>
