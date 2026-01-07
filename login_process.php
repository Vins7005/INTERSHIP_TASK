<?php
session_start();          // ✅ ADD THIS LINE
include 'database.php';

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
    $que = mysqli_query($con, $sql);

    if (mysqli_num_rows($que) > 0)
    {
        $row = mysqli_fetch_assoc($que);   // ✅ ADD THIS LINE

        $_SESSION['email'] = $row['email']; // ✅ ADD THIS LINE
        

        echo "<script>alert('Login successful')</script>";
        echo "<script>window.open('homepage.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Wrong email or password')</script>";
        echo "<script>window.open('login student.php','_self')</script>";
    }

    mysqli_close($con);
}
?>
