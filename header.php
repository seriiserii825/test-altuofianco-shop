<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
    <div class="container">
        <div class="main-header__wrap">
            <div class="logo">
                <?php if (get_field('logo', 'option')) : ?>
                    <?php if (is_front_page()) : ?>
                        <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                    <?php else : ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="main-header__content">
                <div id="js-top-info">
                    <?php echo get_template_part('template-parts/header/header-info'); ?>
                </div>
                <div>
                    <div class="main-header__bottom">
                        <?php wp_nav_menu([
                                'theme_location' => 'menu-1',
                                'menu' => '',
                                'container' => '',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'main-menu main-header__main-menu',
                                'menu_id' => 'js-main-menu',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'before' => '',
                                'after' => '',
                                'link_before' => '',
                                'link_after' => '',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 0,
                                'walker' => '',
                        ]); ?>
                        <div class="cart-icon" id="js-cart-icon">
                            <div class="cart-icon__target">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9435 6.1875H4.05598C3.88681 6.18829 3.72372 6.25067 3.59719 6.36296C3.47066 6.47525 3.38936 6.62978 3.36848 6.79766L2.14816 17.7977C2.13731 17.8935 2.14675 17.9906 2.17586 18.0825C2.20497 18.1745 2.25311 18.2593 2.31714 18.3314C2.38117 18.4035 2.45966 18.4614 2.54751 18.5012C2.63537 18.541 2.73062 18.5619 2.82707 18.5625H19.1724C19.2688 18.5619 19.3641 18.541 19.4519 18.5012C19.5398 18.4614 19.6183 18.4035 19.6823 18.3314C19.7463 18.2593 19.7945 18.1745 19.8236 18.0825C19.8527 17.9906 19.8621 17.8935 19.8513 17.7977L18.631 6.79766C18.6101 6.62978 18.5288 6.47525 18.4023 6.36296C18.2757 6.25067 18.1126 6.18829 17.9435 6.1875V6.1875Z"
                                          stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.5625 8.9375V6.1875C7.5625 5.27582 7.92466 4.40148 8.56932 3.75682C9.21398 3.11216 10.0883 2.75 11 2.75C11.9117 2.75 12.786 3.11216 13.4307 3.75682C14.0753 4.40148 14.4375 5.27582 14.4375 6.1875V8.9375"
                                          stroke="white" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="cart-icon__count">0</div>
                                <div class="cart-icon__title">Punti nel carrello</div>
                                <?php bsv_eccommerce_woocommerce_cart_link(); ?>
                            </div>
                            <?php the_widget('WC_Widget_Cart', 'title='); ?>
                        </div>
                        <div class="main-header__sandwich sandwitch-wrap" id="js-sandwitch-wrap">
                            <div class="sandwitch">
                                <div class="sandwitch__line sandwitch__line--top"></div>
                                <div class="sandwitch__line sandwitch__line--middle"></div>
                                <div class="sandwitch__line sandwitch__line--bottom"></div>
                            </div>
                        </div>
                        <a
                                data-id="js-reservation-button"
                                href="<?php echo get_permalink(87); ?>"
                                class="main-header__button">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.875 7.5625H4.125C3.7453 7.5625 3.4375 7.8703 3.4375 8.25V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V8.25C18.5625 7.8703 18.2547 7.5625 17.875 7.5625Z"
                                      stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.90625 7.5625V4.46875C7.90625 3.64824 8.2322 2.86133 8.81239 2.28114C9.39258 1.70095 10.1795 1.375 11 1.375C11.8205 1.375 12.6074 1.70095 13.1876 2.28114C13.7678 2.86133 14.0938 3.64824 14.0938 4.46875V7.5625"
                                      stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Area riservata</span>
                        </a>
                        <buttton
                                data-id="js-logout-button"
                                class="main-header__button main-header__button--danger">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.875 7.5625H4.125C3.7453 7.5625 3.4375 7.8703 3.4375 8.25V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V8.25C18.5625 7.8703 18.2547 7.5625 17.875 7.5625Z"
                                      stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.90625 7.5625V4.46875C7.90625 3.64824 8.2322 2.86133 8.81239 2.28114C9.39258 1.70095 10.1795 1.375 11 1.375C11.8205 1.375 12.6074 1.70095 13.1876 2.28114C13.7678 2.86133 14.0938 3.64824 14.0938 4.46875V7.5625"
                                      stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Logout</span>
                        </buttton>
                    </div>
                </div>
                <div class="main-header__mobile" id="js-header-mobile">
                    <div class="container">
                        <ul data-id="js-menu-mobile" class="menu-mobile">
                            <?php wp_nav_menu([
                                    'theme_location' => 'menu-1',
                                    'menu' => '',
                                    'container' => '',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'echo' => true,
                                    'fallback_cb' => 'wp_page_menu',
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 0,
                                    'walker' => '',
                            ]); ?>
                        </ul>
                        <?php echo get_template_part('template-parts/header/header-info'); ?>
                        <div class="main-header__links">
                            <a data-id="js-reservation-button"
                               href="<?php echo get_permalink(87); ?>"
                               class="main-header__button main-header__button--full">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.875 7.5625H4.125C3.7453 7.5625 3.4375 7.8703 3.4375 8.25V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V8.25C18.5625 7.8703 18.2547 7.5625 17.875 7.5625Z"
                                          stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.90625 7.5625V4.46875C7.90625 3.64824 8.2322 2.86133 8.81239 2.28114C9.39258 1.70095 10.1795 1.375 11 1.375C11.8205 1.375 12.6074 1.70095 13.1876 2.28114C13.7678 2.86133 14.0938 3.64824 14.0938 4.46875V7.5625"
                                          stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Area riservata</span>
                            </a>
                            <button
                                    data-id="js-logout-button"
                                    class="main-header__button main-header__button--danger main-header__button--full">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.875 7.5625H4.125C3.7453 7.5625 3.4375 7.8703 3.4375 8.25V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V8.25C18.5625 7.8703 18.2547 7.5625 17.875 7.5625Z"
                                          stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.90625 7.5625V4.46875C7.90625 3.64824 8.2322 2.86133 8.81239 2.28114C9.39258 1.70095 10.1795 1.375 11 1.375C11.8205 1.375 12.6074 1.70095 13.1876 2.28114C13.7678 2.86133 14.0938 3.64824 14.0938 4.46875V7.5625"
                                          stroke="#0A4D57" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="wrapper">
