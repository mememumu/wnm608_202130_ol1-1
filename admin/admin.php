<?php
include 'config.php';
session_start();
/*if(isset($_SESSION['aid'])){
		header('location:admin.php');
	}
else
{
    header('location:index.php');
}*/
?>
<html>
    <head>
        <title>Krisewelry Jewelry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .foot{
        background-color: #cfcac6;
        padding: 20px;
        }
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.sub_button {
    background-color: #aca392;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
.sub_button:hover {
    opacity: 0.8;
}

.sub_button {
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
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
                <a href="index.php" class="navbar-brand"><b><i><font size=5>Shop Krisewelry Jewelry</font></i></b></a>
			</div>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log out</a>
                </li>
            </ul>
		</div>
	</div>
        <form action="insert.php" method="POST">
<div class="container"><br><br><br>
    <h1>ADMIN Home</h1>
    <label for="prod_name"><b>Product Name</b></label>
    <input type="text" placeholder="Product Name" name="pname" required><br>
    <label for="colour"><b>Product Colour</b></label>
    <input type="text" placeholder="Product Colour" name="color" required><br>
    <label for="pic"><b>Product Image</b></label>
    <input type="text" placeholder="Product Image" name="pic" required><br>
    <label for="desc"><b>Product Description</b></label>
    <input type="text" placeholder="Product Description" name="desc" required><br>
    <label for="price"><b>Product Price</b></label>
    <input type="number" placeholder="Product Price" name="price" required><br>
    <input type="submit" value="Submit" class="sub_button">
  </div>
</form>
    </body>
</html>