<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
		<th>Birthday</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Tel.</th>
		<th>Emergency Tel.</th>
		<th>Email</th>
		<th>Address</th>
		<th>Size</th>
      </tr>
    </thead>
    <tbody>
<?php
include("conn/mysqlconn.php");

$sql = "SELECT * FROM gundam";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		?>
      <tr>
        <td><?php echo $row["userid"];?></td>
        <td><?php echo $row["firstname"];?></td>
		<td><?php echo $row["lastname"];?></td>
		<td><?php echo $row["birthday"];?></td>
		<td><?php echo $row["age"];?></td>
		<td><?php echo $row["gender"];?></td>
		<td><?php echo $row["tel"];?></td>
		<td><?php echo $row["emergency"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["size"];?></td>
      </tr>
	  <?php
    }
	
} else {
    echo "0 results";
}

?>
	</tbody>
	</table>
</body>
</html>