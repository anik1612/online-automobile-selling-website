<?php 
   session_start();
   
   $connect = mysqli_connect("localhost:3307","root","","anikdbproject") or die("can't connect");
   
   $username = $_POST['username'];
   $password = $_POST['password'];

   echo $username;
   echo $password;

   $query = mysqli_query($connect,"SELECT * FROM master WHERE username='$username'");
   $numrow = mysqli_num_rows($query);
		
		if($numrow!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$db_username = $row['username'];
				$db_password = $row['password'];
			}
            echo $db_username;
            echo $db_password;
		}
		if ($db_username==$username && $db_password==$password) {
			$_SESSION['login_user']=$db_username;
			header("location:master.php");
		}
		else
		{
			header("location:amin.php?error='Invalid Entry!'");
		}
   
 ?>