<!DOCTYPE html>
<html>
<body>


<h2>REGISTRATION</h2>
<form action="loginaction/result.php" method='post'>
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
<table style="width:46%">
  <tr>
    <td><label for="userName">User Name:</label></td>
    <td><input type="text" id="userName"></td>
  </tr>
  </table>
</hr>

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

<table style="width:50%">

  
  <tr>
  
   <td><input type="radio" id="male"><label for="male">Male</label></td>
   <td><input type="radio" id="female"><label for="female">Female</label></td>
   
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