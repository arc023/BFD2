<?php


	foreach ($rows as $row) {
			echo "<p></p>";
			echo "<b>Name: </b>";			
			echo $row['firstname'];	
			echo " ";
			echo $row['lastname'];	
			echo "<p></p>";
			echo '<b>Email: </b>';
			echo $row['notesID'];	
			echo "<p></p>";
			echo " <a href='?action=update&id".$row["id"]."'> Update</a>";
			echo "<p></p>";
			echo "<a href='?action=delete&id".$row["id"]."'> Delete</a>";
		}


?>