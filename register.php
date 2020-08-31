<?php 

   $connect = mysqli_connect("localhost:3307","root","","anikdbproject") or die("can't connect");
   
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   echo $username;
   echo $password;
   echo $email;

   if($username && $password && $email)
   {
   	  echo "<br> query execution";
      $query = mysqli_query($connect,"INSERT INTO customer(id,username,email,password,phone,address) VALUES ('','$username','$email','$password','')");
      header("location:clogin.html");
   }
   else
   { 
	   header("location:reg.php?error=All fields are required"); 
   }

?>