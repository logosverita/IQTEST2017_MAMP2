<?php
//	function do_query( $user_name, $user_score, $user_data ){
	function do_query( $user_name ,  $user_score, $user_data, $email, $cleartime ){


		$ip = json_encode($_SERVER['REMOTE_ADDR']);
		//$ip = str_replace(".", "-", $ip);
		$ip = str_replace('"', "", $ip);
		$date_for_db = date("Y-n-j G:i:s");

		/*
		$user_name = "Jhon Dow";
		$user_score =140;
		$user_data = array(1,"A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","B","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A");
		*/


		//$query ="INSERT INTO  resutl_table (user_name, score, data, date_, ip_address) VALUES($user_name,$user_score,ARRAY[$user_data[1]],$date_for_db,$ip)";

		// こんなに絡む数多くていいのか心配。検索しても大丈夫らしいが...
		//$query = "INSERT INTO result_table( user_name, score, date_, ip_address ) VALUES( '$user_name' , '$user_score' , '$date_for_db' , '$ip' )";
		//$query = "INSERT INTO result_iq_table( user_name ) VALUES( '$user_name'  )";

//		$query = "INSERT INTO result_iq_table( user_name ,  score )	VALUES( '$user_name' , '$user_score' )";


		// OLD
	///	$query = "INSERT INTO result_iq_table( user_name, score, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40,date_, ip_address )VALUES( '$user_name' , '$user_score' , '$user_data[1]' , '$user_data[2]' , '$user_data[3]' , '$user_data[4]' , '$user_data[5]' , '$user_data[6]' , '$user_data[7]' , '$user_data[8]' , '$user_data[9]' , '$user_data[10]' , '$user_data[11]' , '$user_data[12]' , '$user_data[13]' , '$user_data[14]' , '$user_data[15]' , '$user_data[16]' , '$user_data[17]' , '$user_data[18]' , '$user_data[19]' , '$user_data[20]' , '$user_data[21]' , '$user_data[22]' , '$user_data[23]' , '$user_data[24]' , '$user_data[25]' , '$user_data[26]' , '$user_data[27]' , '$user_data[28]' , '$user_data[29]' , '$user_data[30]' , '$user_data[31]' , '$user_data[32]' , '$user_data[33]' , '$user_data[34]' , '$user_data[35]' , '$user_data[36]' , '$user_data[37]' , '$user_data[38]' , '$user_data[39]' , '$user_data[40]' , '$date_for_db' , '$ip' )";


		$query = "INSERT INTO result_iq_table( user_name, score, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40,date_, ip_address, email, cleartime )VALUES( '$user_name' , '$user_score' , '$user_data[1]' , '$user_data[2]' , '$user_data[3]' , '$user_data[4]' , '$user_data[5]' , '$user_data[6]' , '$user_data[7]' , '$user_data[8]' , '$user_data[9]' , '$user_data[10]' , '$user_data[11]' , '$user_data[12]' , '$user_data[13]' , '$user_data[14]' , '$user_data[15]' , '$user_data[16]' , '$user_data[17]' , '$user_data[18]' , '$user_data[19]' , '$user_data[20]' , '$user_data[21]' , '$user_data[22]' , '$user_data[23]' , '$user_data[24]' , '$user_data[25]' , '$user_data[26]' , '$user_data[27]' , '$user_data[28]' , '$user_data[29]' , '$user_data[30]' , '$user_data[31]' , '$user_data[32]' , '$user_data[33]' , '$user_data[34]' , '$user_data[35]' , '$user_data[36]' , '$user_data[37]' , '$user_data[38]' , '$user_data[39]' , '$user_data[40]' , '$date_for_db' , '$ip' , '$email' , '$cleartime' )";




		require  dirname(__FILE__) ."/../../tools/xfile.php";
		$con_query = ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .' password='.$dxdy["pass"] ;
		$dbconn = pg_connect( $con_query );

		if ($dbconn!=FALSE) {
			pg_query($dbconn,$query);
			pg_close($dbconn);
		}
	}
