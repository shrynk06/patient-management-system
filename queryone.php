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
  padding: 15px;
 
}
.container{  
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
   }
   button.last{
    padding: 15px;
    font-size: small;
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
$sql = "SELECT patient.* FROM patient
JOIN medicalhistory m ON patient.pid = m.pid
JOIN doctors ON m.did = doctors.did
WHERE doctors.name = 'Madhukar'";
$result = $conn->query($sql);
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
<button class="button" onclick="location.href='querydash.html'" type="button">BACK</button>
</table>
</body>
</html>