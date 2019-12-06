window.onload = function () {
    var cli = document.getElementById('get_res');
    cli.addEventListener("click", func);

	function func(){
			let basket = new Basket();
	    let renderBasket = new RenderBasket(basket);
	    console.log('Создан объект корзины:');
	    console.log(basket);

	    let goods_array = [
			{name: 'Монитор', price: 9500}, 
			{name: 'Мышь', price: 3500}, 
			{name: 'Клавиатура', price: 4500},
		];

	    let sizeRandom = parseInt(Math.random() * 10);

	    for (let i = 0; i < sizeRandom; ++i) {
	        let productIndex = parseInt(Math.random() * (goods_array.length - 1));
	        let count = parseInt(Math.random() * 3) + 1;
	        let product = Object.assign({}, goods_array[productIndex]);
	        product.count = count;
	        basket.putProduct(product);
	    }

	    let basketHtmlElement = document.querySelector('.basket');
	    console.dir(basketHtmlElement);
	    renderBasket.rendering(basketHtmlElement, goods_array);

	    console.log('Наполнили товарами корзину (1 шт для чет, 2 для нечет):');
	    console.log(basket);

	    console.log('Общая стоимость корзины:');
	    console.log(basket.countTotalPrice());

	    console.log('Общее количество товаров:');
	    console.log(basket.countTotalNumber());
	}
}