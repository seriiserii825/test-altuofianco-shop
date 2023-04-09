jQuery(document).ready(function ($) {
	let accordion = function () {
		$('.accordion__item').eq(0).find('.accordion__content').slideDown('');
		$('.accordion__header').on('click', function () {
			const parent = $(this).closest('.accordion__item');
			if (parent.hasClass('active')) {
				parent.find('.accordion__content').slideUp();
				setTimeout(() => {
					parent.removeClass('active');
				}, 400);
			} else {
				parent.find('.accordion__content').slideDown();
				setTimeout(() => {
					parent.addClass('active');
				}, 400);
			}
		});
	};
	if (document.querySelector('.accordion')) {
		accordion();
	}
	let showMiniCart = function () {
		$('.cart-icon-target').on('click', function (e) {
			e.preventDefault();
			$('.widget_shopping_cart').fadeToggle();
		});
		$(document).keyup(function (e) {
			if (e.key === 'Escape') {
				// escape key maps to keycode `27`
				$('.widget_shopping_cart').fadeOut();
			}
		});
		document.addEventListener('mousedown', function (e) {
			let widgetShoppingCart = document.querySelector(
				'.widget_shopping_cart'
			);
			if (widgetShoppingCart) {
				if (e.target.closest('.cart-icon') === null) {
					$('.widget_shopping_cart').fadeOut();
				}
			}
		});
	};
	showMiniCart();
	function loopAddToCartQuantity() {
		setTimeout(() => {
			$(
				'.taxonomy__loop .product .quantity input[type="number"]'
			).styler();
		}, 200);
	}
	if (document.querySelector('.taxonomy__loop .product .quantity')) {
		loopAddToCartQuantity();
	}
	if (document.querySelector('.product.product-type-variable')) {
		setTimeout(() => {
			$('.single_variation_wrap .quantity input[type="number"]').styler();
		}, 800);
	}
	if (document.querySelector('.product.product-type-simple')) {
		setTimeout(() => {
			$('.add-to-cart__wrap .quantity input[type="number"]').styler();
		}, 800);
	}
	if (
		document.querySelector('body.woocommerce-checkout') ||
		document.querySelector('body.woocommerce-cart')
	) {
		$('.quantity').addClass('dark');
		setTimeout(() => {
			$('.quantity input[type="number"]').styler();
		}, 800);
	}
	$(document.body).on('updated_cart_totals', function () {
		// console.log( 'some')
		location.reload();
	});

	function stickySidebar() {
		let main_footer = document.querySelector('.main-footer');
		$('.taxonomy-page__sidebar').sticky({
			bottomSpacing: main_footer.getBoundingClientRect().height,
		});
	}

	if (
		document.querySelector('.taxonomy-page__sidebar') &&
		window.innerWidth > 768
	) {
		stickySidebar();
	}
	$(window).on('resize', function () {
		if (
			document.querySelector('.taxonomy-page__sidebar') &&
			window.innerWidth > 768
		) {
			stickySidebar();
		}
	});
  function productSlider() {
    const slider = $(".product-gallery__wrap");
    slider.slick({
      slidesToShow: 1,
      fade: true
    });
  }
  if (document.querySelector(".product-gallery__wrap")) {
    productSlider();
  }
});
