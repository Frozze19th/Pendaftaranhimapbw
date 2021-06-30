<?php
include_once 'koneksi.php';
$sql = "DELETE FROM calon WHERE nim='" . $_GET["nim"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
	header("location:list_admin.php");
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
mysqli_close($link);
?>