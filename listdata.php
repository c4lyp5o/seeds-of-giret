<html>
    <title>Listing data for SMKC</title>
    <body>
        
    
<?php
$con=mysqli_connect("localhost", "root", "", "pahang");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM smkc");

echo "<table border='1'>
<tr>
<th>First name</th>
<th>Lastn ame</th>
<th>Email</th>
<th>Ic num</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['ic'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<br><br><button type="button" onclick="location.href='negeris.html';">BACK to main page</button>
</body>
</html>