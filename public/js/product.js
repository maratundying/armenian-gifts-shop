export default class Product {
    constructor(name, price, description, image, hashedKey = null) {
        this.name = name;
        this.price = price;
        this.description = description;
        this.image = image;
        this.hashedKey = hashedKey
    }

    getName() {
        return this.name;
    }

    getPrice() {
        return this.price;
    }

    getDescription() {
        return this.description;
    }

    getImage() {
        return this.image;
    }

    getHashedKey() {
        return this.hashedKey;
    }

    setName(name) {
        this.name = name;
    }

    setPrice(price) {
        this.price = price;
    }

    setDescription(description) {
        this.description = description;
    }

    setImage(image) {
        this.image = image;
    }
}

