<?php
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
$delete="update BookingDetail set sideno=1000 where sideno=2735";
$remove=mysqli_query($connection,$delete);
if($remove)
{
    echo '<script>alert("updaateed")</script>';
}
else {
    echo '<script>alert("not updated")</script>';
}

?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>