export default function productSimpleFields() {
	let fields_selects = document.querySelectorAll(
		'.product-type-simple .wccpf_fields_table select'
	);
	let btnSubmit = document.querySelector(
		'.product-type-simple .add-to-cart__wrap button[type="submit"]'
	);
	fields_selects = [...fields_selects];

	function checkSelects() {
		return fields_selects.every((item) => item.value === 'Non selezionato');
	}

	function toggleDisableSubmit() {
		if (checkSelects()) {
			btnSubmit.setAttribute('disabled', 'disabled');
		} else {
			btnSubmit.removeAttribute('disabled');
		}
	}

	toggleDisableSubmit();

	fields_selects.forEach((select) => {
		select.addEventListener('change', function () {
			toggleDisableSubmit();
		});
	});
}
