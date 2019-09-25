Cristian (alumno)
<a href="http://192.168.0.93/smr2a_alberto/smr2a.php">alberto</a>
<?php

$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)

?>