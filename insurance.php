<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: green;font-family: sans-serif;padding-top:15px;">
<body style="background-image: url('green.jpg');">
<?php 
$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$pid = $_POST['ipid'];
$policynumber = $_POST['ipolnumber'];
$amount = $_POST['amt'];
$nominee = $_POST['nominee'];
$dateofmaturity = $_POST['idate'];



$sql="insert into insurance values ('$pid','$policynumber','$amount','$nominee','$dateofmaturity')";

if(mysqli_query($conn, $sql)){
    echo 'Data has been entered successfully!';

echo nl2br("\n Patient ID: $pid\n Policy Number: $policynumber\n ". "Amount: $amount\n Nominee: $nominee\n Date of Maturity: $dateofmaturity");
echo '<br><a href="#" onclick="history.go(-1);">Back</a>';


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>