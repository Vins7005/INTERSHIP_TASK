<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>homepage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <header>
  <marquee direction="right">
<P class="smm" align="center" style="color: brown;"><h1>VSPIRE INNOVATION LTD.</h1></P>

</header>
</marquee>
<hr>
<div class="navbar">
 <a href="homepage.php" style="color: brown;" >Home</a>
</div>
</body>
</html>
<?php

include('database.php');
$sql = "SELECT fullname,address, email, contact, code,age, password FROM student";
$result = mysqli_query($con, $sql);
?>
<center>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Id</th>
    <th>fullname</th>
    <th>address</th>
    <th>email</th>
    <th>contact</th>
    <th>code</th>
    <th>age</th>
    <th>password</th>
   
  </tr>
  </center>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['fullname']; ?> </td>
   <td><?php echo $data['address']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['contact']; ?> </td>
   <td><?php echo $data['code']; ?> </td>
   <td><?php echo $data['age']; ?> </td>
   <td><?php echo $data['password']; ?> </td>
 <tr>

 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 
 </table>
 <button onclick="window.print()"> Print</button>
 <button onclick="history.back()"> <<<<</button>