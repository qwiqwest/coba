<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$edit_state = false;

	//if save button is clicked
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		$query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
		mysql_query($db, $query);
		$_SESSION['msg'] = "Address saved";
		header('location: index.php');
	}

	//update records
	if (isset($_POST['update'])) {
		$name = mysql_real_escape_string($_POST['name']);
		$address = mysql_real_escape_string($_POST['address'])
		$id = mysql_real_escape_string($_POST['id']);

		mysql_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id")
		$_SESSION['msg'] = "Address update";
		header('location: index.php');
	}

	//delete records
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysql_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['msg'] = "Address deleted";
		header('location: index.php')
	}

	// retrieve records
	$results = mysql_query($db, "SELECT * FROM info");


?>