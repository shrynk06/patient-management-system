<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: green;font-family: sans-serif;padding-top:15px;">
<body style="background-image: url('green.jpg');">
<?php 
$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$aid = $_POST['aid'];
$starttime = $_POST['stime'];
$ddate = $_POST['adate'];
$did = $_POST['adid'];
$status = $_POST['status'];



$sql="insert into appointments values ('$aid','$starttime','$ddate','$did','$status')";

if(mysqli_query($conn, $sql)){
    echo 'Data has been entered successfully!';

echo nl2br("\n Appointment ID: $aid\n Start time: $starttime\n ". "Date: $ddate\n Doctor ID: $did\n Status: $status");
echo '<br><a href="#" onclick="history.go(-1);">Back</a>';


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>