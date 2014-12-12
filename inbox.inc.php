<?php

	$user = $_SESSION['username'];

	$connect = mysql_connect("localhost","root","") or die(mysql_error());

	mysql_select_db("cheapomail") or die(mysql_error());

	$selmsg = mysql_query("  SELECT * FROM private_message WHERE recipient_id = '$user' ");
	

	$row = mysql_num_rows($selmsg);

	if($row !=0){

		echo "<table>";
		echo "<tr>";
		echo "<td>&nbsp";
		echo "</td>";
		echo "<td>From:</td>";
		echo "<td>Subject</td>";
		echo "<td>Date:</td>";
		echo "</tr>"; 
		
		while($rows = mysql_fetch_assoc($sel_msg)){

			$id = $row['id'];
			echo "<tr>";
			echo "<td>/td>";
			echo "<td>".$senders_id = $row['sender_id']."</td>";
			echo "<td><a href='messages.php?id=is_read&mid=$id'>".$title = $row['subject']."</a></td>";
			echo "<td>".$sent_date = $row['date']."</td>";
			echo "</tr>";

		}
			

	}else{
		echo "</table><tr><br><td></td>From:</td></br><td>Subject:</td><br><td>Date: </td></br></tr><tr><td><th>NO Messages Today!</th></tr></table>";
	}

?>