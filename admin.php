<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	 <?php 

if ($_POST['add_product']) {
	
	$title = $_POST['title'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$desc = $_POST['desc'];

	$link = mysqli_connect('localhost', 'root', 'usbw','pubg');

    if ($link) {
    	$sql = "INSERT INTO `weapon`(`title`, `price`, `image`, `description`) VALUES ('$title', $price, '$image', '$description')";

    $result = mysqli_query($link,$sql);

    if ($result) {
    	echo "OK";
    }else {
    	echo "ERROR";
    }

    mysqli_close($link); 
    }
}

   ?>

<form method="post" action="#">
	<input required="required" type="text" name="title"><br>
	<input required="required" type="number" name="price"><br>
	<input required="required" type="text" name="image"><br>
	<input required="required" type="text" name="desc"><br>
	<input type="submit" name="add_product"><br>
</form>

</body>
</html>