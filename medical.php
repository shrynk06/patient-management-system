<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: green;font-family: sans-serif;padding-top:15px;">
<body style="background-image: url('green.jpg');">
<?php 
$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$mdate = $_POST['ldate'];
$pid = $_POST['lpid'];
$did = $_POST['ldid'];
$medication = $_POST['medic'];
$conditionn = $_POST['cond'];



$sql="insert into medicalhistory values ('$mdate','$pid','$did','$medication','$conditionn')";

if(mysqli_query($conn, $sql)){
    echo 'Data has been entered successfully!';

echo nl2br("\n Last visit: $mdate\n Patient ID: $pid\n ". "Doctor ID: $did\n Medication: $medication\n Condition: $conditionn");
echo '<br><a href="#" onclick="history.go(-1);">Back</a>';


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>