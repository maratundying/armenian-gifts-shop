import Product from './product.js'
class Basket {
    constructor() {
        this.products = [];
    }

    addProducts(product) {
        this.products.push(product);
    }

    removeProduct(product) {
        const index = this.products.indexOf(product);
        if (index !== -1) {
            this.products.splice(index, 1);
        }
    }

    getTotal() {
        return this.products.reduce((total, product) => total + product.price, 0);
    }

    getItemsCount() {
        return this.products.length;
    }

    clear() {
        this.items = [];
    }
}
