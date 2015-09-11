<?php

require_once('include/SugarQuery/SugarQuery.php');

array_push($job_strings, 'mid_point_send_email');

function mid_point_send_email()
{
    
	$sugarQuery = new SugarQuery();

	$sugarQuery->select(array(''))
    //return true for completed
    return true;
}

?>