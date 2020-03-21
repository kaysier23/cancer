
<h1>Welcome User</h1>

<img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:100%">

 <h1>Profile Picture</h1>
 
 <h1>Name: <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?> </h1>
<h1>Email: <?php echo $_SESSION['user_email_address'] ?></h1>

<h1><a href="logout-google.php">Logout</a>
