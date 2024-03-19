// IQ TEST 2017 com
//
// S Yuya
//
var btn_game_start= document.getElementById("game_start");
btn_game_start.addEventListener("click", game_start, false);

var now_question = 1;
var score = 79.5;
var usr_answer = new Array(1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
//var usr_answer = new Array(1,"A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","B","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A",0,0,0);

//var usr_answer = new Array(1,"A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","B","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A");
//var usr_maru_x = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
var hide_answer = new Array();
var score_point = new Array(0,1,1,1,1,1,1,1,1,1,1,1,1.5,1.5,1.5,1,1.5,1.5,1.5,1.5,1.5,1.5,1.5,1.5,1,3,1,1.5,1.5,1.5,2,1.5,1.5,2,3,3,3,2.5,3,3,3);
var mail_mx = "";

function generate_uuid(){
		var S4 = function() {
			return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
		}
		return (S4()+"-"+S4()+"-"+S4()+"-"+S4());
}

function game_start() {
	$(document).on('click', '#game_start', function(){
 	 	$("#main").load("game_start.txt",  load_func);
      });
}


 function load_func(){


 	var count_Seconds = new Date().getTime() + 1000*60*50;//2400000;//5000;
 	var start_time =  new Date().getTime();
	$('#clock').countdown(count_Seconds, {elapse: true}).on('update.countdown', function(event) {
		var $this = $(this);
		if (event.elapsed) {//After end:　カウント終了後
			// 未記入の問題すべてを架空の選択肢 Gで埋める
			send_score(start_time);//強制送還
		}
		else {	//To end:  カウントダウン中
			$this.html(event.strftime('<span>%M:%S</span>'));
		}
	});


	var btn_a = document.getElementById("btn_a");
	var btn_b = document.getElementById("btn_b");
	var btn_c = document.getElementById("btn_c");
	var btn_d = document.getElementById("btn_d");
	var btn_e = document.getElementById("btn_e");
	var btn_f = document.getElementById("btn_f");
	var btn_send_score = document.getElementById("send_score");
	var btn_1= document.getElementById("btn_1");
	var btn_2= document.getElementById("btn_2");
	var btn_3= document.getElementById("btn_3");
	var btn_4= document.getElementById("btn_4");
	var btn_5= document.getElementById("btn_5");
	var btn_6= document.getElementById("btn_6");
	var btn_7= document.getElementById("btn_7");
	var btn_8= document.getElementById("btn_8");
	var btn_9= document.getElementById("btn_9");
	var btn_10= document.getElementById("btn_10");
	var btn_11= document.getElementById("btn_11");
	var btn_12= document.getElementById("btn_12");
	var btn_13= document.getElementById("btn_13");
	var btn_14= document.getElementById("btn_14");
	var btn_15= document.getElementById("btn_15");
	var btn_16= document.getElementById("btn_16");
	var btn_17= document.getElementById("btn_17");
	var btn_18= document.getElementById("btn_18");
	var btn_19= document.getElementById("btn_19");
	var btn_20= document.getElementById("btn_20");
	var btn_21= document.getElementById("btn_21");
	var btn_22= document.getElementById("btn_22");
	var btn_23= document.getElementById("btn_23");
	var btn_24= document.getElementById("btn_24");
	var btn_25= document.getElementById("btn_25");
	var btn_26= document.getElementById("btn_26");
	var btn_27= document.getElementById("btn_27");
	var btn_28= document.getElementById("btn_28");
	var btn_29= document.getElementById("btn_29");
	var btn_30= document.getElementById("btn_30");
	var btn_31= document.getElementById("btn_31");
	var btn_32= document.getElementById("btn_32");
	var btn_33= document.getElementById("btn_33");
	var btn_34= document.getElementById("btn_34");
	var btn_35= document.getElementById("btn_35");
	var btn_36= document.getElementById("btn_36");
	var btn_37= document.getElementById("btn_37");
	var btn_38= document.getElementById("btn_38");
	var btn_39= document.getElementById("btn_39");
	var btn_40= document.getElementById("btn_40");


	btn_a.addEventListener("click", skip_question, false);
	btn_b.addEventListener("click", skip_question, false);
	btn_c.addEventListener("click", skip_question, false);
	btn_d.addEventListener("click", skip_question, false);
	btn_e.addEventListener("click", skip_question, false);
	btn_f.addEventListener("click", skip_question, false);

	btn_1.addEventListener("click", change_question, false);
	 btn_2.addEventListener("click", change_question, false);
	 btn_3.addEventListener("click", change_question, false);
	 btn_4.addEventListener("click", change_question, false);
	 btn_5.addEventListener("click", change_question, false);
	 btn_6.addEventListener("click", change_question, false);
	 btn_7.addEventListener("click", change_question, false);
	 btn_8.addEventListener("click", change_question, false);
	 btn_9.addEventListener("click", change_question, false);
	 btn_10.addEventListener("click", change_question, false);
	 btn_11.addEventListener("click", change_question, false);
	 btn_12.addEventListener("click", change_question, false);
	 btn_13.addEventListener("click", change_question, false);
	 btn_14.addEventListener("click", change_question, false);
	 btn_15.addEventListener("click", change_question, false);
	 btn_16.addEventListener("click", change_question, false);
	 btn_17.addEventListener("click", change_question, false);
	 btn_18.addEventListener("click", change_question, false);
	 btn_19.addEventListener("click", change_question, false);
	 btn_20.addEventListener("click", change_question, false);
	 btn_21.addEventListener("click", change_question, false);
	 btn_22.addEventListener("click", change_question, false);
	 btn_23.addEventListener("click", change_question, false);
	 btn_24.addEventListener("click", change_question, false);
	 btn_25.addEventListener("click", change_question, false);
	 btn_26.addEventListener("click", change_question, false);
	 btn_27.addEventListener("click", change_question, false);
	 btn_28.addEventListener("click", change_question, false);
	 btn_29.addEventListener("click", change_question, false);
	 btn_30.addEventListener("click", change_question, false);
	 btn_31.addEventListener("click", change_question, false);
	 btn_32.addEventListener("click", change_question, false);
	 btn_33.addEventListener("click", change_question, false);
	 btn_34.addEventListener("click", change_question, false);
	 btn_35.addEventListener("click", change_question, false);
	 btn_36.addEventListener("click", change_question, false);
	 btn_37.addEventListener("click", change_question, false);
	 btn_38.addEventListener("click", change_question, false);
	 btn_39.addEventListener("click", change_question, false);
	 btn_40.addEventListener("click", change_question, false);
	 btn_send_score.addEventListener("click", check_ans, false);


 	hide_answer =(String.fromCharCode.apply(null, ["0","0x00041","0x00044","0x00041","0x00042","0x00043","0x00046","0x00042","0x00044","0x00043","0x00044","0x00044","0x00045","0x00043","0x00045","0x00046","0x00042","0x00041","0x00045","0x00045","0x00042","0x00044","0x00043","0x00045","0x00043","0x00046","0x00044","0x00044","0x00043","0x00042","0x00046","0x00046","0x00041","0x00043","0x00045","0x00046","0x00041","0x00041","0x00045","0x00042","0x00044"]));



	function change_question(){
		if (this.name){
			now_question = this.name;
			//console.log("this.name:",this.name);
			//console.log(now_question);
			view();
		}
	}
	function skip_question(){
		if (this.name){
	 		usr_answer[now_question]= this.name;
		}
		if (usr_answer[now_question]!=0){	//記入済み
	 		usr_answer[now_question]= this.name;
	 		if ( usr_answer.indexOf(0) < now_question){
				now_question = parseInt(now_question)+1;
				//console.log(now_question);
			}
			else {
				now_question = usr_answer.indexOf(0);
			//	console.log(now_question);
			}
		}
		if (now_question > 40){	// まだ答えてない問題に飛ぶ
				now_question = usr_answer.indexOf(0);
		}

	//	console.log("skip question");
	//	console.log(now_question);
	//	console.log(usr_answer);

		view();
	}
	function change_color(){

		//console.log("btn_"+now_question);
		//document.getElementById("btn_"+now_question).style.backgroundColor = "#60B531"; // now Q change
		for (var i=1;i<=40;i++){
			if (usr_answer[i]!=0){
				document.getElementById("btn_"+i).style.backgroundColor = "#6F6F6F";	// check done A
			}
		}
	}
	function view() {

		//console.log(usr_answer);
		if (usr_answer.indexOf(0) == -1) {
			//console.log(usr_answer.indexOf(0));
			send_score(start_time);
		}

		if (now_question >=1 && now_question <=40){

			 var img_q = new Image();
			 var img_a = new Image();
			 var img_b = new Image();
			 var img_c = new Image();
			 var img_d = new Image();
			 var img_e = new Image();
			 var img_f = new Image();

			img_q.src = "img/q"+now_question+"/q"+now_question+".gif";
			img_a.src = "img/q"+now_question+"/a.gif" ;
			img_b.src = "img/q"+now_question+"/b.gif" ;
			img_c.src = "img/q"+now_question+"/c.gif" ;
			img_d.src = "img/q"+now_question+"/d.gif" ;
			img_e.src = "img/q"+now_question+"/e.gif" ;
			img_f.src = "img/q"+now_question+"/f.gif" ;

			document.getElementById("question_number").innerHTML = "<h3>第"+now_question+"問</h3>";
			document.getElementById("click_q").src = img_q.src;
			document.getElementById("click_a").src = img_a.src;
			document.getElementById("click_b").src = img_b.src;
			document.getElementById("click_c").src = img_c.src;
			document.getElementById("click_d").src = img_d.src;
			document.getElementById("click_e").src = img_e.src;
			document.getElementById("click_f").src = img_f.src;
		}

		change_color();
	}
	function check_ans(){
		if ( usr_answer.indexOf(0) >= 1){
		//	console.log("0あり");
		//	console.log(usr_answer);
			skip_question();
		}
		else{
			send_score(start_time);
		}
	}

	function send_score(start_time){

		dataLayer.push({'event': 'EndTEST'});

		var end_time = new Date().getTime();
		var ms = end_time - start_time;
		var s = (ms /1000 );
		s = Math.round(s);
		var m = (s / 60) ;
		var ss = s - Math.floor(m)*60 ;
		var mm = Math.floor(m);
		mm = ( "00" + mm).substr(-2);
		ss = ( "00" + ss).substr(-2);
		var user_cleartime = mm.toString(10)+":"+ss.toString(10);//+"秒";

		mail_mx = "<table><tr><td>番号</td><td>あなたの回答</td><td>正誤判定</td><td>配点</td></tr>";
 		for (var i = 1; i<=40;i++){
 			if (hide_answer[i] == usr_answer[i]){
 				score += score_point[i];
 				mail_mx = mail_mx+"<tr><td><span style='color:#008000;'>"+i+"</span></td><td><span style='color:#008000;'>"+usr_answer[i]+"</span></td><td><span style='color:#008000;'>○</span></td><td><span style='color:#008000;'>"+score_point[i]+"</span></tr>";
 			}
 			else{
 				mail_mx = mail_mx + "<tr><td>"+i+"</td><td>"+usr_answer[i]+"</td><td>×</td><td>"+score_point[i]+"</tr>";
 			}
 		}
 		mail_mx = mail_mx+"</table>";


		$("#main").load("result.txt",   function(){
			var S4_uuid = generate_uuid();
			$("#col-right").empty();
			$('#demo-form').parsley().on('form:submit', function() {
				dataLayer.push({'event': 'SendTEST'});

				// 送信判定がOK奈良
				var n = $('input[name="input_fullname"]').val();
				var e = $('input[name="input_email"]').val();
				$.ajax({
					type: "POST",
					url: "./imagetest.php",
					data: {
						"p_user_name":n,
						"p_user_score":score,
						"p_uuid":S4_uuid,
						"p_user_data[]":usr_answer,
						"p_user_email": e,
						"p_user_cleartime": user_cleartime,
						"p_user_marubatu": mail_mx
					},
					success: function() {},
					error:function(){}
				});


				var iqtext = '<div class="btn btn-lg" role="button"><a href="http://twitter.com/share?text=%E3%81%82%E3%81%AA%E3%81%9F%E3%81%AEIQ%E3%82%B9%E3%82%B3%E3%82%A2%E3%81%AF...%20%25_score_%25%EF%BC%81&url=http%3A%2F%2Fiqtest2017.com%2F&hashtags=IQ%E3%83%86%E3%82%B9%E3%83%88,iqtest2017" target="_blank"><img src="./img/iqtest2017_twitter_share_btn.jpg"></a></div>'
				iqtext = iqtext.replace( /%25_score_%25/g , score ) ;

				$('#col-center').html( "<h3>あなたのIQスコアは..."+score+"</h3>"
				+iqtext+
				'<p>あなたのメールアドレスに「IQテスト2017の解答と解説PDF」特典を送信しました。もしも届いていない場合は、迷惑メールに入っていないか確認してください。</p>');
				$("#col-mail").empty();

				return false; //.loadでSafariとChromeが自動リロードしてしまう問題を解決する
			});	// 送信判定がOK奈良ココマデ
		});	// MAIN LOAD RESULT.TXT END
 	}	//	FUNC SEND SCORE
}