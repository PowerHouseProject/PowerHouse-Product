<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="sidebar">
    <div class="logo-details">
        <p>PH</p>
        <span class="logo_name">FITNESS</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="./acc_dashboard.php" class="links_name">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>
        <li id="utton">
            <a href="./member_payment.php">
            <i class="fa fa-credit-card"></i>
                <span class="links_name">Member Payments</span>
            </a>



        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>
        <!-- <style>
            .active2 {
                list-style: circle;
                height: 150px;
            }
        </style>
        <script>
            $('#utton').click(function() {
                $(this).addClass("active2");
            });
        </script> -->
        <li>
            <a href="trainer_payment.php">
            <i class="fas fa-money-check-alt"></i>
                <span class="links_name">Trainer Payments</span>
            </a>
        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>
        <li>
            <a href="./pay_history.php">
                <i class="fa fa-history"></i>
                <span class="links_name">Payment History</span>
            </a>
        </li>

        <span class="fade-effect1"></span>

        <li>
            <a href="profile.php">
                <i class='fas fa-user-alt'></i>
                <span class="links_name">My Profile</span>
            </a>
        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>
        <!-- <li>
            <a href="#">
                <i class='bx bx-dumbbell'></i>
                <span class="links_name">Inventory</span>
            </a>
        </li>

        <span class="fade-effect1"></span>

        <li>
            <a href="#">
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="links_name">Reports</span>
            </a>
        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>
        <li>
            <a href="#">
                <i class='bx bx-user-pin'></i>
                <span class="links_name">Profile</span>
            </a>
        </li>
        <div calss="divider">
            <span class="fade-effect1"></span>
        </div> -->
        <!-- <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="links_name">Favrorites</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Setting</span>
            </a>
        </li> -->
        <li class="log_out">
            <a href="../admin/includes/logout.php">
                <i class='bx bx-log-out'></i>
                <span class=" links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>