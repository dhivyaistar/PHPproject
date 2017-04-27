<?php

// includee database.php

if(isset($_POST['action']))
{
	// check if action value equals login 
	// set variable for input data
		// write a query to select user from user table with given username
// fetch the query result with the help of mysql_fetch_array
// set the value of userid 
// set the value of userid into session varaible sessionid

if($row["username"]==$username && $row["password"]==$pass)
{
	// forward to contactbook.php using header
		
	
	
}
else
    // display a sorry message for wrong credential with use of echo
	}
	elseif($_POST['action']=="signup")
	{
		// set variable for input data
		// sql query for inserting data into database
		// forward to login.php using header

		
	}
}
?>