<?php

  /*Session Variable  Value Destroy */
     session_start();
	 
	 if(session_unset()==false)
	 {
	    if(session_destroy()==true)
		{
			echo "<h1>Session variable value distroy </h1>";
			
		}
	 }
?>