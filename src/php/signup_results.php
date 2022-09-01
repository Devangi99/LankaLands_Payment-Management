<?php
include_once'config30.php';
?>

<?php
$query = "SELECT * FROM details";

$result = $conn->query($query);

if (!$result) {
        die('Query error [' . $db->errno . ']: ' . $db->error . "\n\n" . $query);
    } 
	else if ($result->num_rows > 0) {
        echo 
'<div style = "border-style:groove; border-color:Black">
<table border = "1" width  = "100%">
<tr>
<td>ID</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Email</td>
 <td>Password</td>
 <td>Confirm_Password</td>
 <td>Update</td>
 <td>Delete</td>
 </tr>';
 
    while ($row=$result->fetch_assoc()) {
		    echo '<tr>';
            echo '<td>' . $row['firstName'] . '</td>';
            echo '<td>' . htmlspecialchars($row['firstName']) . '</td>';
            echo '<td>' . htmlspecialchars($row['lastName']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['email']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['password']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['confirm_password']) . '</td>';
	        echo '<td> <button name = "update" type = "button" >Update</button></td>';
			echo '<td> <button name = "delete" type = "button" >Delete</button></td>';
            echo '</tr>';
        }
		echo'</table>';
	}else {
		echo'0 results';
	}
	$conn->close();

?>