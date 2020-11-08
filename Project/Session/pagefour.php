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
<h1>Sports News</h1>
<div style="background-color:#D5D8DC">
<h2>JUVENTUS SHOW DANGEROUS RELIANCE ON RONALDO</h2>

<p> <center><img src="sport.jpg" width="600" height="376"> </center> </p>

<p>Juventus earned a first away win in seven Serie A matches with a 4-1 victory over Spezia on Sunday, 
but it required the introduction of Cristiano Ronaldo to swing the match. The Bianconeri were labouring 
to a draw after Tommaso Pobega cancelled out Alvaro Morata’s early strike, but Ronaldo’s impact from the 
bench after a three week coronavirus-enforced absence was instant. Ronaldo netted within minutes of entering 
the pitch in the second half and after Adrien Rabiot had added gloss to the scoreline, the Portuguese star 
completed his brace with a late penalty. </p>
</div>

<h3><?php echo $_SESSION["username"];?></h3>
<br/>

<a href="control/logout.php">logout</a>

</body>
</html>