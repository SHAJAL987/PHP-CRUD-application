<?php  
include('connection.php');
 
	if (isset($_POST["submit"])) {
		# code...
		$name = $_POST["name"];
		$email = $_POST["email"];

		$sql = "insert into student(id,Name,Email)
		values(Null,'$name','$email')";
		$query_process = mysqli_query($conn,$sql);

		if ($query_process) {
			echo "Sucessfully Insert";
		}
	}
?>