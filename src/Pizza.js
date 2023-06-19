export default class Pizza{
    calories = 0;
    size = null;
    type = null;
    price = 0;
    topping = [];

    constructor(type, size) {
        this.type = type;
        this.addThing(type);
        this.size = size;
        this.addThing(size);
    }

    addThing(pizza){
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
            const pizza = this.topping.indexOf(topping);
            this.remove(topping);
            this.topping.splice(pizza, 1);
        }
    }
    getToppings(){
        return `Добавки: ${this.topping.map((item) => item.name).join(', ')}`;
    }
    getSize(){
        return `Размер: ${this.size.name}`;
    }
    getStuffing(){
        return `Вид: ${this.type.name}`;
    }
    calculatePrice(){
        return `Цена: ${this.price} , руб`;
    }
    calculateCalories(){
        return `Калории: ${this.calories} кк`;
    }

}