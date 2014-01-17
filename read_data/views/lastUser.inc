<?php


	foreach ($rows as $row) {
		
			echo $row['firstname'];	
			echo " ";
			echo $row['lastname'];	
			echo "<p></p>";
			echo "<a href=?action=details&id=".$row["userID"].">More information</a>";
			//echo "<a href=?details&id=".$row["userID"].">More information</a>";
			echo "<p></p>";
		}
	
	
	