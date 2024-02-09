<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <table>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email"><span class="error">* <?php echo $emailErr;?></span></td>
        </tr>
        <tr>
            <td>Website: </td>
            <td><input type="text" name="website"><span class="error"> <?php echo $websiteErr ;?></span></td>
        </tr>
        <tr>
            <td>Comment: </td>
            <td><textarea name="comment" rows="5" cols="21"></textarea></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
                <input type="radio" name="gender" value="female">Female
            &nbsp;
            <input type="radio" name="gender" value="male">Male
            &nbsp;
            <input type="radio" name="gender" value="other">Other
            &nbsp;
            <span class="error">* <?php echo $genderErr;?></span> </td>

        </tr>
</table>
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
</body>
</html>