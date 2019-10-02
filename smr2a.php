<a href="http://192.168.0.121/smr2a_jonander/smr2a.php">Jonander</a>
Cristian Pereda
<a href="http://192.168.0.93/smr2a_alberto/smr2a.php">Alberto</a>
<html>
	<h1>
		<a href="http://192.168.0.115/smr2a_Cristian/catalogo.php">GITHUB</a>
	</h1>
	</html>
	<a>Email</a>
<form>
	<input name="email" type="email">
	<a Email</a> <button>Enviar</button>
</form>

<?php
$f=fopen('visitas.txt' , 'a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite ($f,$_SERVER['REMOTE_ADDR']);
fwrite ($f, "\r\n");
fclose($f);
?>

<?php
if(isset($_GET['email'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>
