<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>

	<style type="text/css">
		table {
            font-family: Impact, sans-serif;
            font-size: 30px;
            background-color: beige;
            color: #3a2702;
        }
        td {
            height: 50px;
            width: 50px;
            text-align: center;
            vertical-align: middle;
        }
        tr:nth-child(even) td:nth-child(odd) {
            background-color: #000111;
        }
        tr:nth-child(odd) td:nth-child(even) {
            background-color: #000111;
        }
        tr:last-child td:nth-child(odd),
        tr:first-child td:nth-child(even){
            background-color: beige;
        }
        tr:nth-child(even) td:first-child{
            background-color: beige;
        }
        tr:nth-child(odd) td:last-child{
            background-color: beige;
        }
	</style>
</head>
<body>

	<h3>Задание 1</h3>
	<h4>Нажмите на кнопку, чтобы вывести шахматную доску</h4>
	<input type="submit" name="get_res" id="get_res" value="Вывести доску">

	<script>

		window.onload = function () {
		    var cli = document.getElementById('get_res');
		    cli.addEventListener("click", func);

		    function chessboard1() {
			    var newTable = document.createElement( 'table' ),
			        lets = [ '','A','B','C','D','E','F','G','H','' ];
			    for ( var i = 0, a = 9; i < 10, a >= 0; i++, a-- ) {
			        var newTr = newTable.insertRow(i);
			        for ( var j = 0; j < 10; j++ ) {
			            var newTd = newTr.insertCell( j );
			                        switch (i) {
			                case 0:
			                    newTd.innerText = lets[ j ];
			                    break;
			                case 9:
			                    newTd.innerText = lets[ j ];
			                    break;
			                default:
			                    if ( j === 0 || j === 9 ) {
			                        newTd.innerHTML = a;
			                    }
			                    break;
			            }
			        }
			    }
			    
			    document.body.appendChild( newTable );
			};

			function func(){
 				chessboard1();
			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>