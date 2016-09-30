<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
?>		


</body>
</html>

	



