<!DOCTYPE HTML>  
<html>
<head>
<p> My Form </p>
</head>

<body>  

<?php

$name = $email = $gender = $comment = $website = "";
$nameError=""; $emailError="";$genderError="";$commentError="";$websiteError="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
if(empty($name) || $name=="")
{
  $nameError="Please Enter Your Name";
}
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);



	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


}


  if(empty($email) || $email=="")
  {
    $emailError="Please Enter Your Email";
  }
  if(empty($website) || $website=="")
  {
    $websiteError="Please Enter Your Website";
  }
  if(empty($comment) || $comment=="")
  {
    $commentError="Please Enter Your Comment";
  }
  if(empty($gender) || $gender=="")
  {
    $genderError="Please Enter Your Gender";
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   enctype="multipart/form-data">  
  Name: <input type="text" name="name"> 
  <br><br> <?php echo $nameError;?>
  E-mail: <input type="text" name="email"> 
  <br><br><?php echo $emailError;?>
  Website: <input type="text" name="website"> 
  <br><br><?php echo $websiteError;?>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea> 
  <br><br><?php echo $commentError;?>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br> <?php echo $genderError;?>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php include 'footer/footer.php';?>

</body>
</html>