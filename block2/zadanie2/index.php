<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>

    <script src="js/basket.js"></script>
    <script src="js/renderBasket.js"></script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<h3>Задание 2</h3>
	<h4>Динамическая корзина.</h4>

	<input type="submit" name="get_res" id="get_res" value="Вывести данные корзины">

    <div class="product-list"></div>
    <div class="basket"></div>

	<script>

		window.onload = function () {
		    var cli = document.getElementById('get_res');
		    cli.addEventListener("click", func);

			function func(){
 				let basket = new Basket();
			    let renderBasket = new RenderBasket(basket);

			    let goods_array = [
					{name: 'Клавиатура', price: 5500}, 
					{name: 'Игровая мышь', price: 9700}, 
					{name: 'Монитор FULL HD', price: 7500},
					{name: 'Корпус', price: 1850},
					{name: 'Микрофон', price: 2300}
				];

			    for (let i = 0; i < goods_array.length; i++) {
			        let productIndex = parseInt(i);
			        let product = Object.assign({}, goods_array[productIndex]);
			        product.count = 1;
			        basket.putProduct(product);
			    }

			    let basketHtmlElement = document.querySelector('.basket');
			    renderBasket.rendering(basketHtmlElement, goods_array);
			}
		}
	</script>
	

	<br><br><a href="/index.php">На главную</a>

</body>
</html>