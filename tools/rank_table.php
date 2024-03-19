<?php

	function load_test(){
		return "LOAD TEST OK";
	}

	function load_ranking($limit, $op){
		/* require の読み込み
		require  dirname(__FILE__) ."/../../tools/echo-test.php";
		echo echo_test();
*/

		require  dirname(__FILE__) ."/../../tools/xfile.php";
//		$con_query = 'host='.$dxdy["host"] . ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .'password='.$dxdy["pass"] .;
		$con_query = ' dbname='.$dxdy["dbname"] .' user='.$dxdy["user_iq"] .' password='.$dxdy["pass"] ;


		$dbconn = pg_connect( $con_query );

		$query = "SELECT * FROM  (select distinct on (ip_address) * from result_iq_table order by ip_address, date_ asc ) as  result_iq_table WHERE (cleartime > '11') ORDER BY score DESC OFFSET 0 LIMIT"." ".$limit;// ORDER BY score OFFSET 0 LIMIT 10";

		$result = pg_query($dbconn, $query);

		if (!$result) {
			echo "データベース接続エラーです。";
	//		exit;
		}

		$i = 0;
		$next_score = 200.0;

		if ($op =="s"){
			$table_head = '<table class="table table-striped table-hover "><thead><tr><th>Name</th><th>Score</th></tr></thead><tbody>';
			$table_bottom =  "</tbody></table>";
			$table_body = "";
			while ($row = pg_fetch_row($result)) {

				$now_score = $row[1];

				if ($next_score > $now_score ){
					$next_score = $now_score;
					$i += 1;
					$table_body = $table_body."<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
				}
				else{
					$table_body = $table_body."<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
					$next_score = $now_score;
				}
			}
			pg_close($dbconn);
			return $table_head.$table_body.$table_bottom;
		}

		elseif ($op =="D") {

			$no = 0;
			$table_head = '<table class="table table-striped table-hover "><thead><tr><th>Rank</th><th>Name</th><th>Score</th><th>Date</th><th>No</th></tr></thead><tbody>';
			$table_bottom =  "</tbody></table>";
			$table_body = "";

			while ($row = pg_fetch_row($result)) {

				$no += 1;
				$now_score = $row[1];

				if ($next_score > $now_score ){
					$next_score = $now_score;
					$i += 1;
					$table_body = $table_body."<tr><td>".$i."</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".substr( $row[42], 0, 10)."</td><td>".$no."</td></tr>";
				}
				else{
					$table_body = $table_body."<tr><td>".$i."</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".substr( $row[42], 0, 10)."</td><td>".$no."</td></tr>";
					$next_score = $now_score;
				}
			}
			pg_close($dbconn);
			return $table_head.$table_body.$table_bottom;
		}
	}

