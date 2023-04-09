export default function privacyPolicyText() {
	const privacy_text = ` I tuoi dati personali saranno utilizzati per elaborare il tuo ordine, supportare la tua esperienza su questo sito web e per altri scopi descritti nella nostra <a class="woocommerce-privacy-policy-link" href="/privacy-policy" target="_blank">privacy policy</a>.`;
	const privacy_block = document.querySelector('.woocommerce-privacy-policy-text');
	console.log(privacy_block, 'privacy_block');
	privacy_block.textContent = '';
	privacy_block.innerHTML = privacy_text;
}