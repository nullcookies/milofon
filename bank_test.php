<?php

echo("<title>");
echo("</title>");
echo("<body>");
if($_GET['token']=='5664del'){
	unlink("/home/bartercoin/tmp/qaz");
	echo('bank_test unlink');
	exit;
}

if($_GET['token']!='9287')exit;

echo('bank_test');

$last_time_lt = file_get_contents("/home/bartercoin/tmp/qaz");


echo("<pre>");
print_r($last_time_lt);
echo("</pre>");
echo("</body>");



