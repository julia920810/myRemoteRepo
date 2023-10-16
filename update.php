<?php
require('dbconfighw2.php');
$jobID=$_POST['jobID'];
$jobName=$_POST['jobName']; //$_GET, $_REQUEST
$jobUrgent=$_POST['jobUrgent'];
$jobContent=$_POST['jobContent'];
$jobfinished=$_POST['jobfinished'];

	$sql = "update todo set jobName=?, jobUrgent=?, jobContent=? ,jobfinished=? where id=?"; //SQL中的 ? 代表未來要用變數綁定進去的地方
	$stmt = mysqli_prepare($conn, $sql); //prepare sql statement
	mysqli_stmt_bind_param($stmt, "ssssi", $jobName, $jobUrgent,$jobContent,$jobfinished,$jobID); //bind parameters with variables, with types "sss":string, string ,string
	mysqli_stmt_execute($stmt);  //執行SQL
	echo "message added.";
?>
<a href="list.php">回工作列表</a>
