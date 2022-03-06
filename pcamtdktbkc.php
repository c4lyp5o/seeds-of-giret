<html>
<title>Done adding data</title>
<body>
    

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "p.cam.tdk");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$icnum = mysqli_real_escape_string($link, $_REQUEST['ic']);

 
 
// Attempt insert query execution
$sql = "INSERT INTO tbkc (first_name, last_name, email, ic) VALUES ('$first_name', '$last_name', '$email', '$icnum')";
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