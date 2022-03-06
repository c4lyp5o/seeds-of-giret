<html>
<title>Done adding data</title>
<body>  
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$cleft = mysqli_real_escape_string($link, $_REQUEST['cleft']);

// Attempt insert query execution
$sql = "INSERT INTO school1 (fName, c.ada) VALUES ('$fullname', '$cleft')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.</br>";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<br><br><button type="button" onclick="location.href='negeris.html';">BACK to main page</button>
</body>
</html>