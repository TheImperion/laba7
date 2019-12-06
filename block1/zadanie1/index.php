<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>

	<h3>Задание 1</h3>

	<h4>Введите число от 0 до 999</h4>
	<input type="text" name="ch" id="ch">
	<input type="submit" name="get_res" id="get_res" value="Получить объект">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('get_res');
		    cli.addEventListener("click", func);

		    function getObjFromNum( num ) {
			    var obj = {};
			    if ( num < 1 || num > 999 || isNaN( num )) {
			        console.log( 'Ошибка. Введите число от 1 до 999' );
			        return obj;
			    }
			    else {
			        obj[ 'едининцы' ] = num % 10;
			        obj[ 'десятки' ] = ( num - obj[ 'едининцы' ]) % 100 / 10;
			        obj[ 'сотни' ] = ( num - obj[ 'едининцы' ] - obj[ 'десятки' ] * 10 ) % 1000 / 100;
			        return obj;
			    }
			}

			function func(){
 				console.log(getObjFromNum(document.getElementById('ch').value) );
			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>