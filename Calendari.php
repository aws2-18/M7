<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<center><table border="1">


<?php

$b = 0;
$uno = 1;
$mes = date("n");
$any = date("Y");
$primerdia = mktime(01,01,01,$mes,01,$any);
$c = date("w",$primerdia);
$casilla=0;
$d = date('t');
echo "\n" ;
$k = date('j');




for($i=1;$i<=7;$i++){
	if($i==1){
		echo "<tr><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td><td>Sabado</td><td>Domingo</td></tr>";
		}
	
	else {
		echo "<tr>";
			for($b=1;$b<=7;$b++){
					if($b<$c && $i==2){
						echo "<td></td>";
					}
					else if($uno<=$d){
										 $uno++;
										  if($uno==$k){
										  	echo "<td style='background-color: blue'>$uno</td>";
										  }
										  else {
											echo "<td>$uno</td>";
										  }
				}
			}
		echo "</tr>";
	
	}
}
?>

</table>
</center>
</body>
</html>


