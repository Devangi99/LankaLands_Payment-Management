<?php
include_once'config31.php';
?>


<?php
    $query = "SELECT * FROM cdetails";
 
    $result = $conn->query($query);
 
    if (!$result) {
        die('Query error [' . $db->errno . ']: ' . $db->error . "\n\n" . $query);
    } else if ($result->num_rows > 0) {
        echo 
'<div style = "border-style:groove; border-color:Black">
<table border = "1" width  = "100%">
<tr>
<td>ID</td>
<td>Name with initials</td>
<td>Age</td>
<td>Date Of Birth</td>
<td>NIC/PASSPORT</td>
<td>Address</td>
<td>Phone Number</td>
<td>Email</td>
</tr>';
 
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['cid']) . '</td>';
            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['age']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['dob']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['nic']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['address']) . '</td>';
	        echo '<td>' . htmlspecialchars($row['phnNO']) . '</td>';
		    echo '<td>' . htmlspecialchars($row['emailADDRESS']) . '</td>';	
			echo '<td> <button name = "update" type = "button" onclick = "updateDetails()">Update</button></td>';
			echo '<td> <button name = "delete" type = "button" onclick = "deleteDetails()">Delete</button></td>';
            echo '</tr>';
        }
 
        echo '</table>';
    } else {
        echo '0 results';
    }
 
$conn->close();
?>