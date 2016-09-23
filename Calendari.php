<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	
</body>
</html>


<table border="1">
<?php

$filas = 6;
$columnas = 7;
$uno = 1;

for($t=0; $t<$filas ;$t++){
	echo "<tr>";

	for($v=0; $v<$columnas; $v++){

		echo "<td>"."$uno"."</td>";
		$uno++;
	}
	echo "</tr>";
		
}


?>
</table>