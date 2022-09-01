<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_NAME", "power_house");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

// if ($conn) {
//     echo "we are connected";
// } else {
//     echo "not connected";
// }
