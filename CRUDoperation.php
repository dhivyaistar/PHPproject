<?php
// start session
// include database.php

if(isset($_POST['button']))
{
	// check if button value equals Add
 // variables for input data
 
 
 // sql query for inserting data into database
 // pass to contactbook.php using header
}

if($_POST['button']=="delete")
{
	// check if delete_id value isset
		
		// sql query to delete data from database
 
		// forward to contactbook.php using header
		
}
if($_POST['button']=="edit")
{
	// set edit_id value into session variable
	// forward to editcontact.php using header
		
}	
	if($_POST['button']=="update")
	{
		// set edit_id value into id variable
// variables for update data

// sql query for updating data into database
		// forward to contactbook.php using header		
				
			}
			
			if($_POST['button']=="logout")
			{
				//destroy session
				//// forward to login.php using header		
			}
		}
	


		



?>