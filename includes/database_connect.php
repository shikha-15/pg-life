<?php
// $conn = mysqli_connect("127.0.0.1", "root", "", "pglife");
$conn = mysqli_connect("containers-us-west-50.railway.app", "root", "jTJYeQ76W02pB3RPLAWD", "railway", "5493");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

// }Q-lEVC6K#T9[~F1