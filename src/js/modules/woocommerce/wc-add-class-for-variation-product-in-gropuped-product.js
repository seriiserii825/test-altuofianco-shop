export default function wc_add_class_for_variation_product_in_gropuped_product(){
    const products = document.querySelectorAll('.woosg-product');
    products.forEach(item => {
        const title = item.querySelector('.woosg-title');
        if(title.querySelector('.variations_form')){
            item.classList.add('woosg-product--variation');
        }
    });
}