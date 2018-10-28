<html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hello";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if(isset($_POST['save'])){
$sql = "INSERT INTO student (fname)
VALUES ('".$_POST["fname"]."')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

 <form method="post"> 
    
    First name:<input type="text" name="fname"><br/>

    <button type="submit" name="save">save</button>
    
    </form>

</body>
</html>