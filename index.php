<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		
    <?php 
		$ip = $_SERVER['REMOTE_ADDR'];
		$port = $_SERVER['REMOTE_PORT'];
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$ref = $_SERVER['HTTP_REFERER'];
		$fh = fopen('log.txt', 'a');

		fwrite($fh, 'IP Address: '."".$ip ."\n");
		fwrite($fh, 'Hostname: '."".$hostname ."\n");
		fwrite($fh, 'Port Number: '."".$port ."\n");
		fwrite($fh, 'User Agent: '."".$agent ."\n");
		fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
		fclose($fh);
		?> 
		<h2>This means the page loaded properly</h2>
  </body>
</html>
