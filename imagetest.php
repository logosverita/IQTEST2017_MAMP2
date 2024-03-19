<?php


$user_name = $_POST["p_user_name"];
$user_score = $_POST["p_user_score"];
$user_data = $_POST["p_user_data"];
$name_uuid_S4 = $user_name."_".$_POST["p_uuid"];
$email = $_POST["p_user_email"];
$cleartime = $_POST["p_user_cleartime"];
$marubatu = $_POST["p_user_marubatu"];

if ($user_score >= 145.1){
	$user_score = 133;
}

/*

/* TEST FOR  DATA
$user_name = "Jhon Dow";
$user_score = 140;
$user_data = Array(1,"A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","B","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A");
*/



// bg
$img_bg = imagecreatefrompng("./img/canva_bg.png");
$img_logo = imagecreatefrompng("./img/flogo_124.png");
// color
$white = imagecolorallocate($img_bg, 255, 255, 255);
$grey = imagecolorallocate($img_bg, 128, 128, 128);
$black = imagecolorallocate($img_bg, 0, 0, 0);
///text font
$font_Source = ("./fonts/SourceSansPro-Regular.ttf");
$font_PT = ("./fonts/PT_Serif-Web-Regular.ttf");
$font_Sawa = ("./fonts/sawarabi-mincho-medium.ttf");
$font_Crimson = ("./fonts/CrimsonText-Italic.ttf");
#text input
$text_1 = "IQ TEST 2017 com";
$text_2 = "Certificate of IQ Score";
$text_3 = "Your IQ Sccore is ...";
$text_4 =  $user_score;
$text_5 = $user_name;
$text_6 = "NATURAL VIRTUE RISE UNION";
$text_7 = "produced by";
$text_8 = "inspirationlife.jp";
$text_9 = "Created  by";
$text_10 = "for playing the IQ TEST 2017 Online Test";
$text_11 = "held in 160.16.58.142 on";
$text_12 = date ("F j, Y ");
#font size
$px_1 = 11;
$px_2 = 32;
$px_3 = 15;
$px_4 = 55;
$px_5= 63;
$px_6= 16;
$px_7 = 11;
$px_8 = 16;
$px_9= 11;
$px_10= 13;
$px_11= 13;
$px_12= 13;
# uniq key

// size
# TEZT 1 IQ TEST 2017 com";
$result = ImageTTFBBox($px_1, 0, $font_Crimson, $text_1);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_1, 0, ( (imagesx($img_bg)-$width)/2) , 114, $black, $font_Crimson, $text_1);

# TEXT 2 Certificate of IQ Score";
$result = ImageTTFBBox($px_2, 0, $font_PT, $text_2);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_2, 0, ( (imagesx($img_bg)-$width)/2)-15 ,190, $black, $font_PT, $text_2);

# TEXT 5 	NAME
$result = ImageTTFBBox($px_5, 0, $font_Sawa, $text_5);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_5, 0, ( (imagesx($img_bg)-$width)/2) , ((imagesy($img_bg)-$height)/2) -$height*0.55, $black, $font_Sawa, $text_5);

# TEXT 3 Your IQ Sccore is ...";
$result = ImageTTFBBox($px_3, 0, $font_Crimson, $text_3);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_3, 0, ( (imagesx($img_bg)-$width)/2) - $width , 436, $black, $font_Crimson, $text_3);

# TEXT 4 SCORE
$result = ImageTTFBBox($px_4, 0, $font_PT, $text_4);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_4, 0, ( (imagesx($img_bg)-$width)/2) , ((imagesy($img_bg)-$height)/2)+$height, $black, $font_PT, $text_4);

# TEXT 6  "NATURAL VIRTUE RISE UNION";
$result = ImageTTFBBox($px_6, 0, $font_PT, $text_6);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_6, 0, 135 , 700, $black, $font_PT, $text_6);

# TEXT 7 	produced by";
$result = ImageTTFBBox($px_7, 0, $font_Crimson, $text_7);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_7, 0, 245 , 723, $black, $font_Crimson, $text_7);

# TEXT 8 	 "inspirationlife.jp";
$result = ImageTTFBBox($px_8, 0, $font_PT, $text_8);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_8, 0, 640 , 700, $black, $font_PT, $text_8);

# TEXT 9 	 "Created  by";
$result = ImageTTFBBox($px_9, 0, $font_Crimson, $text_9);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_9, 0,  685  , 723, $black, $font_Crimson, $text_9);

# TEXT 10	 for playing the IQ TEST 2017 Online Test";
$result = ImageTTFBBox($px_10, 0, $font_Crimson, $text_10);
$width = $result[2] - $result[6];
$height = $result[3] - $result[7];
ImageTTFText($img_bg, $px_10, 0,  ( (imagesx($img_bg)-$width)/2)  , 490, $black, $font_Crimson, $text_10);
# TEXT 11	 held in 160.16.58.142 on";
$result_2 = ImageTTFBBox($px_11, 0, $font_Crimson, $text_11);
$width_2 = $result_2[2] - $result_2[6];
$height_2 = $result_2[3] - $result_2[7];
# TEXT 12	 "Date";
$result_3 = ImageTTFBBox($px_12, 0, $font_Crimson, $text_12);
$width_3 = $result_3[2] - $result_3[6];
$height_3 = $result_3[3] - $result_3[7];
ImageTTFText($img_bg, $px_11, 0, ( (imagesx($img_bg)-$width_2-$width_3)/2)  , 515, $black, $font_Crimson, $text_11);
ImageTTFText($img_bg, $px_12, 0,  ( (imagesx($img_bg)-$width_2)/2)+$width_3   , 515, $black, $font_Crimson, $text_12);

// mix
imagecopy($img_bg, $img_logo, ( (imagesx($img_bg) /2)- imagesx($img_logo)/2) , 622, 0, 0,  imagesx($img_logo), imagesy($img_logo));

// view
header('Content-Type: image/png');
//save





imagepng($img_bg, "./user_data/".$name_uuid_S4.".png");	//	save image



//imagepng($img_bg);
imagedestroy($img_bg);


require dirname(__FILE__)."/tools/phpmailsend.php";
do_send_mail($user_name, $user_score,  $email, $marubatu, $name_uuid_S4);
require dirname(__FILE__) . "/tools/db.php";
do_query($user_name, $user_score, $user_data, $email, $cleartime );
//do_send_mail_test();