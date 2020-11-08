<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>
</head>

<body style="background-color:#D5D8DC">

<h2>REGISTRATION</h2>
<p> Please fill up the registration form </p>
<br>
<form action="creatTableAndColumns.php" method='post'>
<table style="width:70%">
    <tr>
      <td><label for="fname">Name:</label></td>
      <td><input type="text" id="name"></td>
    </tr>
    </table>
<hr>
<table style="width:70%">
  <tr>
    <td><label for="  email">Email:</label></td>
    <td><input type="email" id="email"></td>
  </tr>
  </table>

<hr>
<table style="width:51%">
  <tr>
    <td><label for="password">Password:</label></td>
    <td><input type="password" id="pdw"></td>
  </tr>
  </table>

<hr>
<table style="width:34%">
  <tr>
    <td><label for="confirmPassword">Confirm Password:</label></td>
    <td><input type="password" id="Cpdw"></td>
  </tr>
  </table>

<hr>

<label for="gender">Gender:</label>

<table style="width:30%">

  
  <tr>
  
   <td style="width:46%"></td>
   <td><input type="radio" id="male"><label for="male">Male</label> <input type="radio" id="female"><label for="female">Female</label></td>
   
   
   
  </tr>
</table>

<hr>

<table style="width:37%">
  <tr>
  <td><label for="dob">Date of Birth:</label></td>
  <td><input type="date" id="dob"></td>
  </tr>
  </table>

  <hr>
  <br>

  <input type="submit" value="Submit">
  <input type="reset">

</body>
</html>