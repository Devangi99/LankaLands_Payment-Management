<?php
//include configuration file
include_once'config31.php';
?>

<?php
//get id and delete
$cid = $_GET['cid'];

$result = mysqli_query($conn, "DELETE FROM cdetails WHERE cid=$cid");

?>
