<?php

include "includes/check_login.php";

//include 'includes/db.php';
if (isset($_POST['name'])) {
    // echo "asfsdfd";
    $key = $_POST['name'];
    $sql = "SELECT * FROM member WHERE f_name LIKE '" . $_POST['name'] . "%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $query = "SELECT membership_type, joined_date FROM membership WHERE member_id = $row[member_id];";
            $result2 = mysqli_query($conn, $query);
            $row2 = mysqli_fetch_assoc($result2);
            $dateMembership = $row2['joined_date'];
            $membershipType = $row2['membership_type'];
            $dateMembership = date('Y-m-d', strtotime($dateMembership));
            $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
            $today = date("Y-m-d");
            $expired = "";
            if ($today > $expireMembership) {
                $expired = "expired";
            }

?>




            <tr class=<?php $expired ?>>
                <td>
                    <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $row['image'] ?>"></span><?php echo " " . $row['f_name'] . " " . $row['l_name'] ?></div>
                </td>
                <td><?php echo $row['username'] ?> </td>
                <td><?php echo $row['phone_no'] ?> </td>
                <td><?php echo $dateMembership ?> </td>
                <td><?php echo  $row2['membership_type'] . ' months' ?> </td>
                <td><?php echo  $expireMembership ?> </td>




            </tr>



<?php }
    }
}
