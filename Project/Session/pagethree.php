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
<h1>Trending News</h1>
<div style="background-color:#D5D8DC">
<h2>Police hunt gunmen in Vienna streets after ‘terrorist’ attack</h2>
<p> <center><img src="Capture.png" width="600" height="376"> </center> </p>

<p>Shootings by multiple gunmen in a busy part of central Vienna have left at least two people dead 
and several others wounded in an attack Austria described as a “repulsive terrorist attack”.
Vienna Mayor Michael Ludwig told public broadcaster ORF that a woman who was wounded during the 
attack died of her injuries in the early hours of Tuesday. One suspect was also killed by police forces 
and at least one of the gunmen was still on the run. The attack began at about 8pm (19:00 GMT) on Monday, 
when several men armed with rifles opened fire – starting outside the city’s main synagogue – as many people 
took advantage of the last evening before a nationwide curfew took effect because of COVID-19. </p>
</div>

<h3><?php echo $_SESSION["username"];?></h3>
<br/>
<h5>Do you want to go to <a href="pagefour.php">nextpage</a></h5>

<a href="control/logout.php">logout</a>

</body>
</html>