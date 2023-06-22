<!DOCTYPE html>
<html>
<head>
<title>PATIENTS</title>
<style>
body {background-image: url('green.jpg');}
table {
border-collapse: collapse;
width: 100%;
color: rgb(6, 25, 34);
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #17408b;
color: white;
}
tr:nth-child(even) {background-color: #27fdf3}
tr:nth-child(odd) {background-color: #6CB4EE}
.button {
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: black; /* White text */
  font-size: large;
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  display: block;
  align-items: center;
  padding:30px;
  display: flex;
  margin: auto;
 
}
.container{  
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
   }
</style>
</head>
<body>


<table align="center">
<tr>
<th>PID</th>
<th>NAME</th>
<th>AGE</th>
<th>GENDER</th>
<th>POLICY NUMBER</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "patient details");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE PROCEDURE getPatientsByGend (IN ggender varchar(6))\n"

    . "BEGIN\n"

    . "    SELECT * FROM patient\n"

    . "    WHERE gender = ggender;END;";
$nsql = "CALL getPatientsByGend('Male');";
$result = $conn->query($nsql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["pid"]. "</td><td>" . $row["name"]    . "</td><br><td>"
. $row["age"]. "</td><td>" .$row["gender"] . "</td><td>" .$row["policynumber"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<button class="button" onclick="location.href='dashboard.html'" type="button">BACK</button>
</table>
</body>
</html>