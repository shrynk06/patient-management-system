<?php 

$host="localhost";
$user="root";
$password="";
$db="patient details";

$conn = mysqli_connect($host, $user, $password,$db);


if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
$retval = mysqli_select_db( $conn, 'patient details' );
if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
#echo'worked';
if(isset($_POST['uname'])){
    
$uname=$_POST['uname'];
$password=$_POST['password'];
#echo $uname;
#echo $password;
    
$sql="select * from users where id='".$uname."'AND password='".$password."' limit 1";
    
$result=mysqli_query($conn,$sql);  
if(mysqli_num_rows($result)==1){
    echo "<p align='center'> <font color=green>YOU HAVE LOGGED IN SUCCESSFULLY</font> </p>";
    echo "<p align='center'>YOU WILL BE REDIRECTED NOW</p>";
    header('Location: dashboard.html');
    die();
    }
else{
        echo "Invalid password";
        exit();
    }
}  
#echo'worked again';
?>