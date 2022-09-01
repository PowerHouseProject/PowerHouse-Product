<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require "includes/db.php";

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, strtolower($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($username != "" && $password != "") {

        $sql_query = "SELECT password, user_type, username FROM users WHERE username='" . $username . "' OR email='" . $username . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);
        $password_hash = $row['password'];
        $username = $row['username'];

        $verify = password_verify($password, $password_hash);

        if ($verify) {
            $_SESSION['username'] = $username;
            if ($row['user_type'] == 'admin') {
                header('Location: ../admin/members.php');
                $_SESSION['user_type'] = 'admin';
            } elseif ($row['user_type'] == 'member') {


                $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
                $result1 = mysqli_query($conn, $query1);
                $row1 = mysqli_fetch_assoc($result1);

                $member_id = $row1['member_id'];

                $query2 = "SELECT * FROM membership  WHERE member_id = '" . $member_id . "'";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);

                $membership_type = $row2['membership_type'];
                $joined_date = $row2['joined_date'];

                if ($membership_type == 12) {
                    $exp_date = date('Y-m-d', strtotime("+12 month", strtotime("$joined_date")));
                } else if ($membership_type == 6) {
                    $exp_date = date('Y-m-d', strtotime("+6 month", strtotime("$joined_date")));
                } else if ($membership_type == 3) {
                    $exp_date = date('Y-m-d', strtotime("+3 month", strtotime("$joined_date")));
                } else if ($membership_type == 1) {
                    $exp_date = date('Y-m-d', strtotime("+1 month", strtotime("$joined_date")));
                }

                $date = date('Y-m-d');
                $today = new DateTime($date);
                $mem_date = new DateTime($joined_date);
                $expirey = new DateTime($exp_date); // $expirey = "2021-12-01";

                if ($today > $expirey) {

                    $query3 = "SELECT * FROM extend_membership  WHERE member_id = '" . $member_id . "'";
                    $result32 = mysqli_query($conn, $query3);
                    $result3 = mysqli_num_rows($result32);


                    if ($result3 != 0) {
                        $result3 = mysqli_query($conn, $query3);
                        $row3 = mysqli_fetch_assoc($result3);

                        $extdpk_id = $row3['extdpk_id'];
                        $membership_type = $row3['membership_type'];
                        $activated_date = $row3['activated_date'];

                        $query4 = "UPDATE membership SET membership_type = '$membership_type'  WHERE member_id = '" . $member_id . "'";
                        $result4 = mysqli_query($conn, $query4);

                        $query5 = "DELETE FROM extend_membership WHERE member_id = '" . $member_id . "'";
                        $result5 = mysqli_query($conn, $query5);

                        header('Location: ../member/dashboard.php');
                        $_SESSION['subscription'] = 'Valid';
                        $_SESSION['user_type'] = 'member';
                    } else {
                        $_SESSION['user_type'] = 'member';
                        $_SESSION['subscription'] = 'Invalid';
                        header('Location: ../member/membershipexpire.php');
                    }
                } else {
                    header('Location: ../member/dashboard.php');
                    $_SESSION['subscription'] = 'Valid';
                    $_SESSION['user_type'] = 'member';
                }
            } elseif ($row['user_type'] == 'trainer') {
                header('Location: ../trainer/dashboard.php');
                $_SESSION['user_type'] = 'trainer';
            } elseif ($row['user_type'] == 'accountant') {
                header('Location: ../accountant/acc_dashboard.php');
                $_SESSION['user_type'] = 'accountant';
            }
        } else {
            $_SESSION['notification'] = "Incorrect Username or Password.";
            header('Location: index.php');
        }
    }
}
