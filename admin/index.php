<?php
include 'config.php';
session_start();
?>
<html>
<head>
<title>LOGIN</title>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.logbutton {
    background-color: #aca392;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
.logbutton:hover {
    opacity: 0.8;
}

.logbutton {
    width: auto;
    padding: 10px 18px;
    background-color: #aca392;
}



/* Add padding to containers */
.container {
    padding: 16px;
}
        .foot{
        background-color: #cfcac6;
        padding: 20px;
        }

</style>
    <title>Krisewelry Jewelry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
     <div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
                <a href="index.php" class="navbar-brand"><b><i><font size=5>Krisewelry Jewelry</font></i></b></a>
			</div>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="http://localhost/online/index.php">Exit Admin</a>
                </li>
            </ul>
		</div>
	</div>
    <br>
    <br>
    <form action="admin_verf.php" method="POST">
<div class="container">
    <h1>ADMIN LOGIN</h1>
    <label for="admin_id"><b>Admin Username</b></label>
    <input type="text" placeholder="Admin Username" name="admin_name" required>

    <label for="admin_pass"><b>Admin Password</b></label>
    <input type="password" placeholder="Admin Password" name="admin_pass" required>

    <input type="submit" value="Login" class="logbutton">
  </div>
</form>
</body>
</html>
