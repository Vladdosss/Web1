<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
	<title>Web</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header class="header">
		<span>Вариант 2803</span>
		<span class="student" class="animated">Бирих Владислава Дмитриевна, P3232</span>
	</header>  


	<table class="mainTable" border="1" cellpadding="0" cellspacing="0" width="100%">

		<form name="form" class="form" action="index.php" onsubmit="return validate(this);" method="get">

			<tr>
				<td valign="top" class="main">
					Определение попадания точки на координатной плоскости в заданную область<br><br>
					<label for="X">Введите координату X:</label><br>
					<input class="inputtext" id="X" name="X" placeholder=" (-5 ... 5)"><br><br>

					<label for="Y">Выберите координату Y:</label><br>

					<table class="blocktext">
						<tr>
							<td><input name="Y" type="radio" value="-4">-4</td>
							<td><input name="Y" type="radio" value="-3">-3</td>
							<td><input name="Y" type="radio" value="-2">-2</td>
						</tr>
						<tr>
							<td><input name="Y" type="radio" value="-1">-1</td>
							<td><input name="Y" type="radio" value="0">0</td>
							<td><input name="Y" type="radio" value="1">1</td>
						</tr>
						<tr>
							<td><input name="Y" type="radio" value="2">2</td>
							<td><input name="Y" type="radio" value="3">3</td>
							<td><input name="Y" type="radio" value="4">4</td>
						</tr>
					</table>
					<br>

					<label>Выберите R:</label><br>

					<table class="blocktext">
						<td width="50"><input type="checkbox" name="R" value="1" id="checkbox1"><label for="checkbox1">1</label></td>
						<td width="50"><input type="checkbox" name="R" value="1.5" id="checkbox1"><label for="checkbox1">1.5</label></td>
						<td width="50"><input type="checkbox" name="R" value="2" id="checkbox1"><label for="checkbox1">2</label></td>
						<td width="50"><input type="checkbox" name="R" value="2.5" id="checkbox1"><label for="checkbox1">2.5</label></td>
						<td width="50"><input type="checkbox" name="R" value="3" id="checkbox1"><label for="checkbox1">3</label></td>
					</table>
					<br>
					<div id="message"></div>
					<input class="new" type="submit" value="Отправить">
					<button class="blue" type="reset">Очистить</button><br>


				</form>
			</td>
			<td width="35%"> 					
				<img src="images/график.PNG">
				<br><br>

			</td>
		</tr>


		<tr>
			<td colspan="2">

				<script type="text/javascript">

					var inputs = document.getElementsByName("R");
					for(var i = 0; i < inputs.length; i++) inputs[i].onchange = checkboxHandler;

				</script>

			<?php
			include('handler.php');
			?>
		</td>
	</tr>

</table>

<footer class="footer">
	<th><img id="VT_logo" src="images/vt_logo.png" alt="logo"></th>

	<span class="student">Веб-программирование, 2020</span>
</footer>
<script src="validator.js"></script>

</body>
</html>