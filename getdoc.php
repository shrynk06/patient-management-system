<div style="text-align: center; font-weight:bold; font-size:24px;margin: auto;
  width: 20%; margin-top: 15%;color: #025839;font-family: sans-serif; border: 3px solid #04AA6D; padding-top:25px;">
<body style="background-image: url('green.jpg');">
<?php 

$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);

$dname=$_POST['dname'];

$sql="select * from doctors where did='".$dname."'";

$result=mysqli_query($conn,$sql);  
if(mysqli_num_rows($result)==1){
    while($rowData = mysqli_fetch_array($result)){
        echo "Doctor ID: ",$rowData["did"].'<br><br>';
  		echo "Name: ",$rowData["name"].'<br><br>';
		echo "Shift: ",$rowData["shift"].'<br><br>';
		echo "Age: ",$rowData["age"].'<br><br>';
		echo "Gender: ",$rowData["gender"].'<br><br>';
        echo '<a href="#" onclick="history.go(-1);">Back</a>';
		
    die();
    }}
else{
        echo "Invalid id";
        exit();
    }
 
 ?>
 </div>