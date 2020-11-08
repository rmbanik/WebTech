<?php
session_start(); 
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.
<h5>Do you want to go to <a href="pagethree.php">nextpage</a></h5>

<a href="control/logout.php">logout</a>

</body>
</html>