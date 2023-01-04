<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>dmnbc consulting start page</title>
	<style>
		#logo{
			float:right;			
		}
		p{
		 clear:right;
		}
	</style>
   
</head>
	
	
	
<body>
	 <img id="logo" src="logo.svg" alt="Logo" width="150" height="90" >
	
	<?php
     $ip = $_SERVER["REMOTE_ADDR"];  
      $host = gethostbyaddr($ip);
	$t=time();
      $myfile = fopen("visitors.txt", "a") or die("Unable to open file!");
		$txt = $ip."\t".$host."\t".date("Y-m-d H:i",$t);
		fwrite($myfile, "\n". $txt);
		fclose($myfile);
      echo "IP Adresse: $ip<br>";  
      echo "Hostname: $host";  

   ?>
	<p> <a href="https://dmnb.consulting/impressum.html">Impressum</a> </p>
</body>
</html>
