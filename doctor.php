<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: green;font-family: sans-serif;padding-top:15px;">
<body style="background-image: url('green.jpg');">
<?php 
$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$name = $_POST['dname'];
$shift = $_POST['shift'];
$did = $_POST['did'];
$age = $_POST['dage'];
$gender = $_POST['dgender'];



$sql="insert into doctors values ('$name','$shift','$did','$age','$gender')";

if(mysqli_query($conn, $sql)){
    echo 'Data has been entered successfully!';

echo nl2br("\n Patient ID: $name\n Patient Name: $shift\n ". "Age: $did\n Gender: $age\n Policy number: $gender");
echo '<br><a href="#" onclick="history.go(-1);">Back</a>';


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>