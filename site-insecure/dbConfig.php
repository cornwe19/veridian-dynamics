	<?php
	// Replace the variable values below
	// with your specific database information.
	$host = "localhost";
	$user = "dennis";
	$pass = "asswordp";
	$db   = "veridian_dynamics";

	// This part sets up the connection to the 
	// database (so you don't need to reopen the connection
	// again on the same page).
	$ms = mysql_pconnect($host, $user, $pass, 65536);

	if ( !$ms )
	{
        echo "Error connecting to database.\n";
	}

	// Then you need to make sure the database you want
	// is selected.
	
	mysql_select_db($db, $ms);
	?>
	