import { Catalog } from "./src/components/catalog.js"

const renderPostItem = item => `
    <a  
        href="posts.html?post=${item.id}"
        class="post-item"
    >
        <span class="post-item__title">
            ${item.title}
        </span>

        <span class="post-item__body">
            ${item.body}
        </span>
    </a>
`, getPostItems = async ({limit, page}) => {
    return await fetch(`https://jsonplaceholder.typicode.com/posts?_limit=${limit}&_page=${page}`)
        .then(async res => {
            const total = +res.headers.get('x-total-count')
            const items = await res.json()
            return {items, total}
        }).catch(err => alert(err));
};
export default renderPostItem;
let init;
init = async () => {
    let catalog;
    catalog = document.getElementById('catalog');
    await new Catalog(catalog, {
        renderItem: renderPostItem,
        getItems: getPostItems
    }).init()
};

if (document.readyState !== 'loading') {
    await init()
} else {
    document.addEventListener('DOMContentLoaded', init)
}
