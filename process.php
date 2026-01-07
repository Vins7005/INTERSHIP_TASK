<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$fullName=$_POST['fullname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$code=$_POST['code'];
	$age=$_POST['age'];
    
    $password=$_POST['password'];
   
	
	$sql="insert into student( fullName,address, email,contact,code,age,password)
	values('$fullName','$address','$email','$contact','$code' , '$age' ,'$password')";
	
	

	if (!empty($email) && !empty($password)) {

    // CHECK DUPLICATE EMAIL
    $check = "SELECT email FROM student WHERE email='$email'";
    $result = mysqli_query($con, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Duplicate email')</script>";
        echo "<script>window.open('insert.php','_self')</script>";
        exit();
    }

    // INSERT RECORD
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('New record inserted')</script>";
        echo "<script>window.open('login student.php','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

} else {
    echo "<script>alert('Fields are empty')</script>";
    echo "<script>window.open('insert.php','_self')</script>";
}
}
?>