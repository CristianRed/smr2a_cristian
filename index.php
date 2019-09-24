Cristian

<?php

$f=fopen('smr2a.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)

?>