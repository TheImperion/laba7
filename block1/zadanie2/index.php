<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>

	<h3>Задание 2</h3>
	<h4>Продолжить работу с интернет-магазином, а именно, перенести функционал подсчета корзины на объектно-ориентированную базу.</h4>
	<input type="submit" name="get_admin" id="get_admin" value="Получить результат">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('get_admin');
		    cli.addEventListener("click", to_f);

		    class Basket {
			    goodList = [];

			    countTotalPrice() {
			        let totalPrice = 0;
			        this.goodList.forEach(function (product) {
			            totalPrice += product.price * product.count;
			        });
			        return totalPrice;
			    }

			    countTotalNumber() {
			        let totalCount = 0;
			        this.goodList.forEach(function (product) {
			            totalCount += product.count;
			        });
			        return totalCount;
			    }

			    putProduct(product) {
			        this.goodList.push(product);
			    }
			}

			function to_f(){
				
				let basket = new Basket();
			    console.log('Создан объект корзины:');
			    console.log(basket);

			    let goods_array = [
					{name: 'Монитор', price: 9500}, 
					{name: 'Мышь', price: 3500}, 
					{name: 'Клавиатура', price: 4500}
				];

			    goods_array.forEach(function (item, index) {
			        let product = Object.assign({}, item);
			        product.count = index % 2 == 0 ? 1 : 2;
			        basket.putProduct(product);
			    });



			    console.log('Наполнили товарами корзину (1 шт для чет, 2 для нечет):');
			    console.log(basket);

			    console.log('Общая стоимость корзины:');
			    console.log(basket.countTotalPrice());

			    console.log('Общее количество товаров:');
			    console.log(basket.countTotalNumber());

			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>
	
</body>
</html>