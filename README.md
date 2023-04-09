## Npm
- npm install
- gulp

## Plugins
- Advanced Custom Fields PRO 5.9.3 (need to upload)
- All-in-One WP Migration
- Classic Editor
- Contact Form 7
- Cookie Notice
- Custom Taxonomy Order
- Easy Updates Manager
- Rank Math SEO
- Safe SVG
- WP Fastest Cache
- Kama Thumbnail
- WPS Hide Login
  
### For woocommerce
- Woocommerce
- Easy Auto SKU Generator

## Import Acf fields from file theme/import/acf-simple.json
### For woocommerce theme/import/acf-woocommerce.json

## Import Contact form

## import Privacy page

## Create pages
- Home
  
### For woocommerce
- Prodotti
- Come funziona
- Chi siamo
- Contatti

## Link Acf fields with pages and sections.
Home - Page Home
Footer - Options Page - Footer
Header - Options Page - Header

### For woocmmerce
- Product categories custom - Options Page - Product categories custom
- About us - Options Page - About Us 
- Come funziona - Page Come funziona 
- Contacts - Options Page - Acf Settings 
- Features - Options Page - Features

## Iframe
Put code in theme_name/assets/js/src/modules/map.js

## gulpfile change hostingUrl
theme_name/gulpfile.js

### For woocommerce uncoment styles from my.scss
- //@import "blocks/product-categories-custom"; 
- //@import "blocks/about-block"; 
- //@import "blocks/page-prodotti";
- //@import "blocks/come-funziona"; 
- //@import "blocks/accordion"; 
- //@import "blocks/taxonomy-page"; 
- //@import "blocks/categories-list"; 
- //@import "blocks/cart-icon"; 
- //@import "blocks/woocommerce-notices-wrapper"; 
- //@import "blocks/woocommerce-cart-form"; 
- //@import "blocks/woocommerce-checkout"; 
- //@import "blocks/single-product"; 
- //@import "blocks/page-cart"; 
- //@import "blocks/page-checkout";

## Google map
Insert google map iframe in to the file theme/assets/js/modules/map.js

## For non woocommerce project remove pages from admin, if those page will not be used 
- page-cart
- page-checkout
- page-chisiamo
- page-come-funziona
- page-prodotti
- Also map woocommerce
# test-altuofianco-shop
