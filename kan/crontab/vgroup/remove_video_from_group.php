<?php
include dirname(__FILE__).'/../init.php';
$db  = mini_db_connection::getHandle();
$rows = $db->findAll("select id from videos where status=2");
if(!empty($rows))
	foreach($rows as $k =>$row)
{
	repairService::removeVideoFromGroup($row['id']);
}
