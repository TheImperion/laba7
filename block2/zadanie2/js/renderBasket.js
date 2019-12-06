class RenderBasket {
    basket = null;
    constructor(basket) {
        this.basket = basket;
    }

    fillGoodsList(goodsListElement) {
        for (let i = 0; i < this.basket.countProducts(); ++i) {
            let child = this.createChildRow(this.basket.getProduct(i));
            goodsListElement.appendChild(child);
        }
    }

    addGoodsList(element) {

        let goodsListElement = document.createElement('div');
        goodsListElement.classList.add('basket-doogs-list');
        element.appendChild(goodsListElement);

        this.fillGoodsList(goodsListElement);
    }

    setTotalTextToElement(element) {
        let totalCount = this.basket.countTotalNumber();
        if (totalCount === 0) {
            element.innerText = 'Корзина пуста';
        } else {
            let totalPrice = this.basket.countTotalPrice();
            element.innerText = `В корзине: ${totalCount} товаров на сумму ${totalPrice} рублей`;
        }
    }

    addTotalInfo(element) {
        let totalEl = document.createElement('div');

        this.setTotalTextToElement(totalEl);

        totalEl.classList.add('basket-total');
        element.appendChild(totalEl);
    }

    removeAllChildren(element) {
        while (element.hasChildNodes()) {
            element.removeChild(element.firstChild);
        }
    }

    createChildRow(product) {
        let row = document.createElement('div');
        row.classList.add('goodItem');

        let txt = document.createElement('span');
        txt.innerText = `${product.name}: цена: ${product.price} р.; кол-во: ${product.count}`;
        txt.classList.add('goodItem-txt');

        row.appendChild(txt);
        return row;
    }

    repaintGoodsList() {
        let goodsListElement = document.querySelector('.basket-doogs-list');
        this.removeAllChildren(goodsListElement);
        this.fillGoodsList(goodsListElement);
        let totalElement = document.querySelector('.basket-total');
        this.setTotalTextToElement(totalElement);
    }

    rendering(element, priceList) {
        if (this.basket == null) {
            return;
        }

        this.removeAllChildren(element);
        this.addGoodsList(element);
        this.addTotalInfo(element);
    }
}