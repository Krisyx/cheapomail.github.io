<?php
ob_start();
session_start();
 
$conn = mysql_connect(getenv('IP'), 'Admin', 'Abcde123');
mysql_select_db('cheapomail', $conn);
 
if (isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $admin = $_POST['Admin'];

    if( $user == "" || $pass == "")
    {
        echo '<div id ="errormsg">Please fill in all fields</div>';
    }

    else 
    {
        $query = mysqli_query($dbcon, "SELECT * FROM users WHERE username = '$user'
        and password = '$pass' and admin = '$admin' ") or die ("Can't query the database");
        $count = mysqli_num_rows($query);

       if (isset($admin)){
             $_SESSION['username'] = $user;
             header("location: login.html");
             exit;
} 
      else {
             $_SESSION['username'] = $user;
             header("location: users.php");
             exit;
 }
}    
}
