<?php include "includes/check_login.php";
require "includes/db.php";
date_default_timezone_set("Asia/Colombo");
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/earning.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <?php include "includes/sidebar.php" ?>
  <section class="home-section">
    <?php include "includes/header.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM trainer WHERE username='" . $username . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $trainer_id = $row['trainer_id'];

    $sql1 = "SELECT * FROM member WHERE assign_trainer='" . $trainer_id . "'";
    $result1 = mysqli_query($conn, $sql1);

    $count_row1 = mysqli_num_rows($result1);

    $today = date("y-m-d");
    $year = date('y', strtotime($today));

    $sql2 = "SELECT * FROM assignment WHERE trainer_id='" . $trainer_id . "' AND start_date>='$year-01-01'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $rate = $row['rate'];
    $month_earning = $rate * $count_row1 * .8;

    $count_row2 = mysqli_num_rows($result2);

    //Earning chart
    $query1 = "SELECT * FROM trainer WHERE username = '" . $username . "'";
    $result1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    $trainer_id = $row1['trainer_id'];

    $response = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    date_default_timezone_set('Asia/Colombo');
    $date = date("Y");

    $query2 = "SELECT * FROM payment WHERE YEAR(payment_date) = $date AND trainer_id = $trainer_id ;";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "SELECT * FROM trainer WHERE trainer_id = $trainer_id ;";
    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);
    $rate = $row3['rate'];


    while ($row2 = mysqli_fetch_assoc($result2)) {

      $amount = $rate * 0.8;

      $temp_date = $row2['payment_date'];

      $month = date("m", strtotime($temp_date));

      $m = (int)$month;
      switch ($m) {
        case 1:
          $response[0] = $amount + $response[0];
          break;
        case 2:
          $response[1] = $amount + $response[1];
          break;
        case 3:
          $response[2] = $amount + $response[2];
          break;
        case 4:
          $response[3] = $amount + $response[3];
          break;
        case 5:
          $response[4] = $amount + $response[4];
          break;
        case 6:
          $response[5] = $amount + $response[5];
          break;
        case 7:
          $response[6] = $amount + $response[6];
          break;
        case 8:
          $response[7] = $amount + $response[7];
          break;
        case 9:
          $response[8] = $amount + $response[8];
          break;
        case 10:
          $response[9] = $amount + $response[9];
          break;
        case 11:
          $response[10] = $amount + $response[10];
          break;
        case 12:
          $response[11] = $amount + $response[11];
          break;
      }
    }

    ?>

    <div class="home-content">
      <div class="trainer-stats">
        <div class="one">
          <p class="value"><?php echo $count_row1 ?></p>
          <a class="name" href="members.php">Current members</a>
        </div>

        <div class="two">
          <p class="value"><?php echo $count_row2 ?></p>
          <a href="earnings.php" class="name">Assigned members(This year)</a>
        </div>

        <div class="three">
          <p class="value"><?php echo $month_earning; ?></p>
          <a href="bookings.php" class="name">Earnings(This month)</a>
        </div>

        <div class="four">
          <p class="value"><?php echo $count_row2 * $rate * .8 ?></p>
          <a href="calendar.php" class="name">Earnings(This year)</a>
        </div>
      </div>
      <div class="chart-div">
        <div class="earning-chart">
          <h1>EARNING ANALYSIS</h1>
          <canvas id="canvas"></canvas>
        </div>
        <div id="wrapper" class="table-div">

          <table id="table_detail" cellpadding=10 class="earning-table">

            <tr>
              <th>Month</th>
              <th style="width:200px;">Your Earning</th>
            </tr>
            <tr>
              <td>JANUARY</td>
              <td><?php echo $response[0]; ?></td>
            </tr>
            <tr>
              <td>FEBRUARY</td>
              <td><?php echo $response[1]; ?></td>
            </tr>
            <tr>
              <td>MARCH</td>
              <td><?php echo $response[2]; ?></td>
            </tr>
            <tr>
              <td>APRIL</td>
              <td><?php echo $response[3]; ?></td>
            </tr>
            <tr>
              <td>MAY</td>
              <td><?php echo $response[4]; ?></td>
            </tr>
            <tr>
              <td>JUNE</td>
              <td><?php echo $response[5]; ?></td>
            </tr>
            <tr>
              <td>JULY</td>
              <td><?php echo $response[6]; ?></td>
            </tr>
            <tr>
              <td>AUGUST</td>
              <td><?php echo $response[7]; ?></td>
            </tr>
            <tr>
              <td>SEPTEMBER</td>
              <td><?php echo $response[8]; ?></td>
            </tr>
            <tr>
              <td>OCTOBER</td>
              <td><?php echo $response[9]; ?></td>
            </tr>
            <tr>
              <td>NOVEMBER</td>
              <td><?php echo $response[10]; ?></td>
            </tr>
            <tr>
              <td>DECEMBER</td>
              <td><?php echo $response[11]; ?></td>
            </tr>

          </table>

        </div>
      </div>
    </div>
  </section>
  <?php include "includes/footer.php" ?>
  <script src="js/income_chart.js" type="text/javascript"></script>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>
</body>

</html>