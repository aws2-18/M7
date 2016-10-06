<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		td {
			text-align:center;
		}
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<center><table border="1">


<?php

$b = 0;
$uno = 0;
$mes = date("n");
$any = date("Y");
$primerdia = mktime(01,01,01,$mes,01,$any);
$c = date("w",$primerdia);
$casilla=0;
$d = date('t');

$k = date('j');


   if ($mes=="1") {
         echo "Gener";
    }elseif ($mes=="2") {
        echo "Febrer";
    }elseif ($mes=="3") {
        echo "Març";
    }elseif ($mes=="4") {
        echo "Abril";
    }elseif  ($mes=="5") {
        echo "Maig";
    }elseif ($mes=="6"){
        echo "Juny";
    }elseif ($mes=="7") {
        echo "Juliol";
    }elseif ($mes=="8") {
        echo "Agost";
    }elseif ($mes=="9") {
        echo "Setembre";
    } elseif ($mes=="10") {
        echo "Octubre";
    } elseif ($mes=="11") {
        echo "Novembre";
    }elseif ($mes=="12"){
        echo "Desembre";
    }


for($i=1;$i<=7;$i++){
	if($i==1){
		echo "<tr style='background-color: #585858'><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td><td>Sabado</td><td>Domingo</td></tr>";
		}
	
	else {
		echo "<tr>";
			for($b=1;$b<=7;$b++){
					if($b<$c && $i==2){
						echo "<td></td>";
					}
					else if($uno<$d){
										 $uno++;
										  if($uno==$k){
										  	echo "<td style='background-color: #585858'>$uno</td>";
										  }
										  else {
											echo "<td style='background-color: #A4A4A4'>$uno</td>";
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


