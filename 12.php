<?php
# author : mkamal
# 30 maret 2019
@system("clear");
@system("clear");
@system("clear");
//warna
$merah="\033[1;34m";
$biru="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
print $ijo."
 
  ____    _    ____ ___ _   _  ____
 / ___|  / \  |  _ \_ _| \ | |/ ___|
| |     / _ \ | |_) | ||  \| | |  _
| |___ / ___ \|  __/| || |\  | |_| |
 \____/_/   \_\_|  |___|_| \_|\____|".$t;
echo $putih."Coded By : mkamal".$t.$t;

include(readline($turkis."masukan config : "));
//echo"$turkis bot start $putih \n";

print "Yogo_Video_Bot...".$t.$kuning."[>] ".$putih."sedang login!! mohon tunggu...".$t;
sleep(2);

// login
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://api2.yogopro.com/api/reward/watch"); 
      //curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail"); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$head = array();
					$head[] = "Cookie: sign=$sign;data=$data";
					$head[] = "User-Agent: Mozilla/5.0 (Linux; U; Android 8.1.0; in-id; SM-J530Y Build/M1AJQ) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		if ($js['message'] == 'OK') {
		}
		else
		{
		echo $red."[!] login gagal || ".$js['message'].$t;
		exit;
		}

sleep(1);
echo $turkis."[>] ".$putih."sedang menjalankan bot".$t;
sleep(1);

#######################################################

// video
echo $t.$turkis."[*] ".$putih."menonton video".$t;
sleep(40);
$v=0;
while($v<9999999999999999999999):
$v++;
flush();
$video		=	video($sign,$data);
$video1 = json_decode($video,true);
if ($video1['message'] == 'OK') {
	    echo $ijo."    ==> BERHASIL ";
	    }
	    else
	    {
	    $red."[!] => GAGAL !";
	    }
endwhile;
sleep(40);
#######################################################
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://video.yogopro.com/yogovideo/video/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$sign;data=$data";
					$headers[] = "Mozilla/5.0 (Linux; U; Android 8.1.0; in-id; SM-J530Y Build/M1AJQ) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
