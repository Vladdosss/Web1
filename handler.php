<!DOCTYPE html>
<html>    

<head>
	<title>Web</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link rel="stylesheet" type="text/css" href="style.css">     
</head>

<body>
	<?php

	$start = microtime(true);
	date_default_timezone_set('Europe/Moscow');

	$x= $_GET['X'];
	$y= $_GET['Y'];
	$r= $_GET['R'];;

	$res = "FALSE!";
	$bool=TRUE;
	if (!(($x > -5) & ($x < 5 ))){
		$fail = "Некорректно задано значение X.\nВозможные варианты: (-5 ... 5).\n";
		$bool=FALSE;
	} 
	if ($x == ""){
		$fail="Значение X должно быть введено.";
		$bool=FALSE;

	}
	if (!($y == -4 || $y == -3 || $y == -2 || $y == -1 || $y == 0 ||
		$y == 1 || $y == 2 || $y == 3 || $y == 4)){
		$fail = "Некорректно задано значение Y.\nВозможные варианты: -4; -3; -2; -1; 0; 1; 2; 3; 4.\n";
		$bool=FALSE;
	} 
	if ($y == "")
	{
		$fail="Значение Y должно быть введено.";
		$bool=FALSE;
	}
	
	if (!($r == 1 || $r == 1.5 || $r == 2 || $r == 2.5 || $r == 3)){
		$fail = "Некорректно задано значение R.\nВозможные варианты: 1; 1.5; 2; 2.5; 3.\n";
		$bool=FALSE;
	} 
	if ($r == "")
	{
		$fail = "Значение R должно быть введено.";
		$bool=FALSE;
	}


	if ( ( ($x>=(-$r/2)) and ($x<=0) and ($y>=(-$r)) and ($y<=0) ) 
		or (($x*$x+$y*$y<=$r*$r) and ($x>=0) and ($y<=0))  
		or (($y<=$x+$r) and ($x<=0) and ($y>=0)) ) {
		$res = "TRUE!";}
	else {
		$res = "FALSE!";
	}


	
	$timeWork = microtime(true) - $start;
	$timeWork = number_format($timeWork, 10, ".", "")*1000000;
	$time= date("H:i:s");
	if ($bool) {
		$result = array($x, $y, $r, $res, $time, $timeWork);

		if (!isset($_SESSION['results'])) {
			$_SESSION['results'] = array();
		}

		array_push($_SESSION['results'], $result);
	}
	?>


	<table class="table_result" id='table_result' border='1'>		
		<tr>
			<td>X</td>
			<td>Y</td>
			<td>R</td>
			<td>RESULT</td>
			<td>TIME</td>
			<td>TIME OF WORK</td>
		</tr>

		<?php 
		foreach ($_SESSION['results'] as $array) { ?>
			<tr>
				<td><?php echo $array[0] ?></td>
				<td><?php echo $array[1] ?></td>
				<td><?php echo $array[2] ?></td>
				<td><?php echo $array[3] ?></td>
				<td><?php echo $array[4] ?></td>
				<td><?php echo $array[5] ?></td>
			</tr>
		<?php } ?>	
		
	</table>

</body>
