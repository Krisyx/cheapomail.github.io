
<link rel="stylesheet" type="text/css" href="style.css"/> 
<?php
		$fnameERROR = $lnameERROR = $userERRROR= $passERROR = "";   			
		$FirstName= $LastName = $UserName= $Password =""; 
		$con = mysql_connect("localhost","root"); 
		$db = mysql_select_db('cheapomail');				 
		if($_SERVER["REQUEST_METHOD"] =="POST")					
	{
		if ($_POST['FirstName']!="")					
			$FirstName =  ($_POST['FirstName']);						
		if (($_POST['LastName'])!= "") 
			$LastName =( $_POST['LastName']);	
		if ($_POST['Username']!="") 
			$UserName=  ($_POST['UserName']);	
		if (strlen($_POST['Password'])>=8) 
			$Password =  ($_POST['Password']);						
	
		if ( $FirstName!= ""&& $LastName !=""&& $Password!="" )
		{
			$add = "INSERT INTO user(First Name, Last Name, User Name, Password) 
			VALUES ('$FirstName','$LastName', '$UserName','$Password')";
			 mysql_query($add);
			out();			
			}
										 
			
		}
	 function out() 
	{
			$query = "SELECT *from user"; 
			$result = mysql_query( $query);  
			$num_rows = mysql_num_rows($result); 
			$num_fields = mysql_num_fields($result); 
			$row = mysql_fetch_assoc($result); 	
			$keys = array_keys($row); 	
			print("<table  class = 'Header'>\n"); 
			print ("<tr class='head'>");
			for ($index = 0; $index < ($num_fields-1); $index++) 
				{
				if ($index == 2|| $index==4 || $index==5 || $index==6){
					print ("<th class ='center'>\n"); 
					print $keys[$index] . " "; }
					else {
					print("<th class = 'left'>\n");
					print $keys[$index] . " "; }
				print "</th>";
				}
			print ("</tr>");
			while ($row = mysql_fetch_row($result)) 
				{
					print("<tr >"); 
					for ($column_num = 0; $column_num < 6; $column_num++)
						{
						if ($column_num==2 || $column_num==4 || $column_num==5|| $column_num==6)
							print ("<td class ='center'>$row[$column_num]</td>\n"); 
						else
							print("<td>$row[$column_num]</td>\n");
						}
					print("</tr>\n");
				}
			print("</table>\n");
	}
	
?>