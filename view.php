<?php
include('connection.php');

	$sql = "SELECT id, Name, Email FROM student";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
    echo "<table border= 1;><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td> ".$row["Email"]."</td></tr>";
    }
    echo "</table>";
    } else {
	    echo "0 results";
	}

	mysqli_close($conn);
?>