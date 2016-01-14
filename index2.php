<?php

	private function definition_mac($ipAddress) {

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
		$Param = json_decode(file_get_contents('http://wifi.free-ddyns.ru/secret/' . definition_mac($_SERVER["REMOTE_ADDR"])), true);
		header( 'Location: http://www.example.com/'.$Param['rediect'], true, 301 );
    } else {
    	$Param = json_decode(file_get_contents('http://wifi.free-ddyns.ru/token/' . $GetParam), true);    }

                    //$user['network'] - соц. сеть, через которую авторизовался пользователь
                    //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
                    //$user['first_name'] - имя пользователя
                    //$user['last_name'] - фамилия пользователя


?>