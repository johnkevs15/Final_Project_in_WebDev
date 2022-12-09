<?php
ob_start();
session_start();

require_once('includes/connect.inc');

// 1. Check if user clicked submit
//      a. Get username and password data
//      b. query to get the password from database via username
//      c. check if the input password == db password that was retrieved
//          - if PASS, create the session and redirect to home page
//          - if FAIL, set error message
// 2. Proceed sa login page

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $find_user_query = "select password from users where username='$username'";
    $result_query = mysqli_query($conn,$find_user_query) or die("Cannot connect to table");
    if(mysqli_num_rows($result_query) == 1) {
        $dbpassword = mysqli_fetch_row($result_query)[0];
        if($dbpassword == $password){
            echo "Same";
        } else {
            echo "Wrong";
        }
    }

} else {
    $message = "";
}
?>

<html>
    <head>
        <title>Login</title>
   </head>
   <body>
        <!--<?php echo $message ?>-->
        <form action="login.php" method="post" name="login">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" name="submit" id="submit" value="Login">
        </form>
   </body>
</html>
