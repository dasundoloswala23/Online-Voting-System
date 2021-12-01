<?php

require 'connection.php';

function getUsersData($username)
{
	$array = array();
	$q = mysql_query("select * from 'registration' where 'username='".$username."'");
	while($r = mysql_fetch_assoc($q))
	{
		$array['username'] = $r ['username'];
		$array['lastname'] = $r['lastname'];
		$array['telno'] = $r['telno'];
		$array['address'] = $r['address'];
	}
	
	return $array;
}

function getId($username)
{
		$q = mysql_query("select 'lastname' from 'registration' where 'username='".$username."'");
		while($r = mysql_fetch_assoc($q))
		{
			return $r ['lastnamename'];
		}
		
}