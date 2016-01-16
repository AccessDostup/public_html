<?php

		$r = fopen("../key/public.pem",'r');
		$Publickkey = fread($r,filesize("../key/public.pem"));
		openssl_get_publickey($Publickkey);

		$r = fopen("../key/private.pem",'r');
		$PrivateKey = fread($r,filesize("../key/private.pem"));


	function definition_mac($ipAddress) {

		 if(PHP_OS == 'Linux'){  $macAddr = exec("grep ".$ipAddress." /proc/net/arp | awk '{print $4}'");  }
		 elseif(PHP_OS == 'WINNT'){
		  $macAddr=false;
		  $arp=`arp -a $ipAddress`;
		  $lines=explode("\n", $arp);

			  foreach($lines as $line){
			    $cols=preg_split('/\s+/', trim($line));
			    if ($cols[0]==$ipAddress){ $macAddr=$cols[1]; }
			  }
		 }
	 return $macAddr;
	}


	//Strat
	$GetParam = isset($_GET['one']) ? stripslashes($_GET['one']) : false;
	if (!$GetParam) {
		//$Param = json_decode(file_get_contents('http://wifi.free-ddyns.ru/secret/' . definition_mac($_SERVER["REMOTE_ADDR"])), true);
		//header( 'Location: http://www.example.com/'.$Param['rediect'], true, 301 );
		$mac = definition_mac($_SERVER["REMOTE_ADDR"]);
		echo $mac;

		openssl_public_encrypt($mac,$crypttext,$Publickkey);
		echo "<br>Mac : ".$crypttext;

		openssl_private_decrypt($crypttext,$newsource,$PrivateKey);
		echo "<br>Mac : ".$newsource;

    } else {
    	$Param = json_decode(file_get_contents('http://wifi.free-ddyns.ru/token/' . $GetParam), true);
    }
?>