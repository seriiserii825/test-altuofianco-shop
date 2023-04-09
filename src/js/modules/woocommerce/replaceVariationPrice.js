export default function replaceVariationPrice() {
	const default_price = document.querySelector(
		'.product-type-variable .summary .price'
	);
	// const price = document.querySelector('.woocommerce-variation-price .woocommerce-Price-amount');
	// const price_html = `
	// 	<bdi><span class="woocommerce-Price-currencySymbol">€</span>410,00</bdi>
	// `;
	// const price_number = parseInt(price.textContent.replace(/[^0-9]/, ''));
	
	default_price.style.display = "none";
}
