<html>
<head>
<title>PHP Sandbox</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (firstname, age)
    VALUES ('".$_POST["firstname"]."','".$_POST["age"]."')";

    $result = mysqli_query($conn,$sql);
}

$conn->close();
?>

<form method="post">
<label>First Name</label>
<input id="FirstName" name="firstname" type="text" />
<label>Age</label>
<input id="userAge" name="age" type="text" />
<button id="SubmitInfo" name="save" type="submit" />Save</button>
</form>

</body>
</html>