document.addEventListener('DOMContentLoaded', () => {
    const arrows = document.querySelectorAll('.list-item__arrow');

    arrows.forEach((arrow) => {
        arrow.addEventListener('click', () => {
            const parent = arrow.parentNode.parentNode;
            const items = parent.querySelector('.list-item__items');
            parent.classList.toggle('list-item_open');
            items && items.classList.toggle('list-item__items_open');
        });
    });
});
