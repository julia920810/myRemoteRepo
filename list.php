<p>Todo list</p>

<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>Jobname</td>
    <td>Urgent</td>
    <td>Job Content</td>
    <td>finished</td>
    <td>編輯</td>
    <td>取消</td>
  </tr>
<?php
require("dbconfighw2.php");
$sql = "select * from todo where jobfinished='未完成';";
$stmt = mysqli_prepare($conn, $sql ); //precompile sql指令，建立statement 物件，以便執行SQL
mysqli_stmt_execute($stmt); //執行SQL
$result = mysqli_stmt_get_result($stmt); //取得查詢結果
echo "<h2>unfinished table</h2>";
while (	$rs = mysqli_fetch_assoc($result)) { //用迴圈逐筆取出

	 echo "<tr><td>" , $rs['id'] ,
	 "</td><td>" , $rs['jobName'],
	 "</td><td>" , $rs['jobUrgent'],
	 "</td><td>", $rs['jobContent'],
	 "</td><td>", $rs['jobfinished'],
	 "</td><td><button onClick='loadEditForm(",$rs['id'],")'>edit</button>",
	 "</td><td><button onClick='loadCancelForm(",$rs['id'],")'>cancel</button>",
	 "</td></tr>";
}//<a href='3.editUI.php?id=",$rs['id'] ,"'>edit</a>
?>
</table>
<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>Jobname</td>
    <td>Urgent</td>
    <td>Job Content</td>
    <td>finished</td>
    <td>編輯</td>
    <td>取消</td>
  </tr>
<?php

$sql = "select * from todo where jobfinished='已完成';";
$stmt = mysqli_prepare($conn, $sql ); //precompile sql指令，建立statement 物件，以便執行SQL
mysqli_stmt_execute($stmt); //執行SQL
$result = mysqli_stmt_get_result($stmt); //取得查詢結果
echo "<h2>finished table</h2>";
while ( $rs = mysqli_fetch_assoc($result)) { //用迴圈逐筆取出

 echo "<tr><td>" , $rs['id'] ,
 "</td><td>" , $rs['jobName'],
 "</td><td>" , $rs['jobUrgent'],
 "</td><td>", $rs['jobContent'],
 "</td><td>", $rs['jobfinished'],
 "</td><td><button onClick='loadEditForm(",$rs['id'],")'>edit</button>",
 "</td><td><button onClick='loadCancelForm(",$rs['id'],")'>cancel</button>",
 "</td></tr>";
}
?>
  
</table>