export default class Pizza{
    calories = 0;
    size = null;
    type = null;
    price = 0;
    topping = [];

    constructor(type, size) {
        this.size = size;
        this.addThing()
    }

    addThing({price, calories}){
        this.price += price;
        this.calories += calories;
    }

    addTopping(topping){
        this.addThing(topping);
        this.topping.push(topping);
    }
    deleteTopping(topping){
        if(this.topping.includes(topping))
        {

        }
    }

}