<?php
	require_once('../sys.includes.php');
	$this_user = CURRENT_USER_USERNAME;
	if (!empty($_GET['client']) && CURRENT_USER_LEVEL != '0') {
		$this_user = mysql_real_escape_string($_GET['client']);
	}
	include_once(TEMPLATE_PATH);
?>