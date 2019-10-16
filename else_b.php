<?php function notas($a){
	if ($a>=8.5) {
	echo "aprovado";
	} 
	elseif ($a>=7){
	echo "notable";
	}
	elseif ($a>=5){
	echo "sobresaliente";
	}
	else {
	echo "pendiente";}
	

}
	notas(4);
?>
