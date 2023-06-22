<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: green;font-family: sans-serif;padding-top:15px;">
<body style="background-image: url('green.jpg');">
<?php 
$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$pid = $_POST['pid'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$policynumber = $_POST['policynumber'];



$sql="insert into patient values ('$pid','$name','$age','$gender','$policynumber')";

if(mysqli_query($conn, $sql)){
    echo 'Data has been entered successfully!';

echo nl2br("\n Patient ID: $pid\n Patient Name: $name\n ". "Age: $age\n Gender: $gender\n Policy number: $policynumber");
echo '<br><a href="#" onclick="history.go(-1);">Back</a>';


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>