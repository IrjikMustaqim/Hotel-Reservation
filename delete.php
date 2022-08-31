<?php
include ("db.php");

$id_pemesan = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM roombook WHERE id=$id_pemesan");

header("Location:halamanAdmin.php");
?>