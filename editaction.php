<?php
include 'db.php';
$id = $_POST ['id'];
$name = $_POST ['name'];
$contact = $_POST['contact'];

$sql = "UPDATE names SET name = '$name', phone= '$contact' WHERE id= $id";

$result = mysqli_query($conn, $sql);

if($result){
    header("location:index.php");
}

?>