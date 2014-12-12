<?php
	
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);

	$user  = $_SESSION['username'];

	$connect = mysql_connect("localhost","root","") or die(mysql_error());

	mysql_select_db("cheapomail") or die(mysql_error());

	$recipient_id = $_POST['recipient_id'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$submit  = $_POST['submit'];
	$date = date("Y/m/d");


	$to_user = mysql_escape_string($recipient_id);
	$subject = mysql_escape_string($subject);
	$message = mysql_escape_string($message);


	if($submit){
		
	}
	if($to_user && $subject && $message){
		
		$ins = mysql_query(" INSERT INTO 'private_message' VALUES('', '$message', '$subject', '$user', '$to_user', '0') ");
		echo "<b>Message Sent</b>";
	}else{
		echo"fill in boxes";
	}
	

	echo "
	<form action='' method = 'POST'>
	<table>
	<tr>
		<td>Send To:</td>
		<td><input type='text' name='recipiant'/></td>
	</tr>
	<tr>
		<td>Subject:</td>
		<td><input type='text' name='subject'/></td>
	</tr>
	<tr>
		<td>Message:</td>
		<td><textarea name='message' cols='50' rows='10'></textarea></td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' name='submit' value = 'Send Message'/></td>

	</tr>
	</form>
	";

?>