<?php
ini_set("display_errors", On);
error_reporting(E_ALL);

$user_name = "TEST";
$user_score ="140";
$email = "GMAILp@gmail.com";
$marubatu = "<h1>HELOE</h1>";
$name_uuid_S4 = "mfea-feafa-fae-faewfa";

$dwnpng = "https://iqtest2017.com/user_data/".$name_uuid_S4.".png";
echo $dwnpng;


/*	console.log(n);
	 require_once dirname(__FILE__) ."/../tools/xfile.php";
echo $dxdy["pass_SG"] ;

	echo "load<br>";
//'host='.$dxdy["host"] .
	$con_query = ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .' password='.$dxdy["pass"] ;
//	$con_query = ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .' password='.$dxdy["pass"] ;

//	$con_query =  ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .' password='.$dxdy["pass"] ;
//	$con_query =
	$query = "SELECT * FROM result_iq_table ORDER BY score OFFSET 0 LIMIT 10";//
	//ORDER BY score DESC OFFSET 0 LIMIT"." ".$limit;
	// ORDER BY score OFFSET 0 LIMIT 10";

//	echo $con_query."<br>";
	echo "loa２d<br>";

	$dbconn = pg_connect( $con_query );
//	echo $dbconn."<br>";
	echo "load3<br>";

	$result = pg_query($dbconn, $query);
	echo "lo4ad<br>";

	if (!$result) {
		echo "データベース接続エラーです。";
		exit;
	}
else{
	echo "成功！";
	pg_close($dbconn);
}
while ($row = pg_fetch_row($result)) {
		echo $row[0].$row[1]."<br>";
}
*/


