// document.addEventListener('DOMContentLoaded', () => {
//     console.log(document.getElementById('test-id'))
// })


import Size from "./Size.js";
import Topping from "./Topping.js";
import TypePizza from "./TypePizza.js";
import Pizza from "./Pizza.js";


const pizza = new Pizza(margarita,bigSize);
pizza.addTopping(mozzarella);
pizza.addTopping(cheeseBoard);
console.log(pizza.getSize());
console.log(pizza.getStuffing());
console.log(pizza.calculateCalories());
console.log(pizza.calculatePrice());
console.log(pizza.getToppings());
pizza.removeTopping(cheeseBoard);
console.log(pizza.getToppings());
console.log(pizza.calculateCalories());
console.log(pizza.calculatePrice());

const bigSize = new Size(
    'Большая',
    200,
    200);
const smallSize = new Size(
    'Маленькая',
    100,
    100);

const mozzarella = new Topping(
    'Моцарелла',
    50,
    20);
const cheeseBoard = new Topping(
    'Сырный борт',
    150,
    50);
const chadderAndParmezan = new Topping(
    'Чеддер и пармезан',
    150,
    50);

const margarita = new TypePizza(
    'Марагрита',
    500,
    300);
const pepperoni = new TypePizza(
    'Пепперони',
    800,
    400);
const bavaskaya = new TypePizza(
    'Баварская',
    700,
    450);