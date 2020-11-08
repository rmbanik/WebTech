<?php

include('control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('image.jpg');">
<p> <img src="getwell.jpg" width="600" height="376"> </p>
<h2 style="color:blue">GetWell Diagnostic Centre</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter your password" required>
    <br>
    <br>
    <input type="email" name="email" placeholder="Enter your email" required>
    <br>
    <br>
    <input type="phone no" name="phone no" placeholder="Enter your phone no" required>
    <br>
    <br>
    Select gender
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>

<?php include 'footer/footer.php';?>
</div>
</body>
</html>