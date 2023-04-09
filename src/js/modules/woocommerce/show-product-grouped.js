export default function showProductGroped() {
	const products = document.querySelectorAll('.products li.product');
	products.forEach(item => {
		const product_class = item.getAttribute("class");
		if(!product_class.includes('product-type-woosg')){
			item.setAttribute('style', 'display: none;');
		}
	});
}