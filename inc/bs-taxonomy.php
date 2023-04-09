<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy() {
	register_taxonomy( 'type', [ 'applicazioni' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Type',
			'singular_name'     => 'Type',
			'search_items'      => 'Search Type',
			'all_items'         => 'All Type',
			'view_item '        => 'View Type',
			'parent_item'       => 'Parent Type',
			'parent_item_colon' => 'Parent Type:',
			'edit_item'         => 'Edit Type',
			'update_item'       => 'Update Type',
			'add_new_item'      => 'Add New Type',
			'new_item_name'     => 'New Type Name',
			'menu_name'         => 'Type',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'country', [ 'referenze' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Country',
			'singular_name'     => 'Country',
			'search_items'      => 'Search Country',
			'all_items'         => 'All Country',
			'view_item '        => 'View Country',
			'parent_item'       => 'Parent Country',
			'parent_item_colon' => 'Parent Country:',
			'edit_item'         => 'Edit Country',
			'update_item'       => 'Update Country',
			'add_new_item'      => 'Add New Country',
			'new_item_name'     => 'New Country Name',
			'menu_name'         => 'Country',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'kind', [ 'docs' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Kind',
			'singular_name'     => 'Kind',
			'search_items'      => 'Search Kind',
			'all_items'         => 'All Kind',
			'view_item '        => 'View Kind',
			'parent_item'       => 'Parent Kind',
			'parent_item_colon' => 'Parent Kind:',
			'edit_item'         => 'Edit Kind',
			'update_item'       => 'Update Kind',
			'add_new_item'      => 'Add New Kind',
			'new_item_name'     => 'New Kind Name',
			'menu_name'         => 'Kind',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'modulo_orc', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Modulo orc',
			'singular_name'     => 'Modulo orc',
			'search_items'      => 'Search Modulo orc',
			'all_items'         => 'All Modulo orc',
			'view_item '        => 'View Modulo orc',
			'parent_item'       => 'Parent Modulo orc',
			'parent_item_colon' => 'Parent Modulo orc:',
			'edit_item'         => 'Edit Modulo orc',
			'update_item'       => 'Update Modulo orc',
			'add_new_item'      => 'Add New Modulo orc',
			'new_item_name'     => 'New Modulo orc Name',
			'menu_name'         => 'Modulo orc',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'impianti_applicazione', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Applicazione',
			'singular_name'     => 'Applicazione',
			'search_items'      => 'Search Applicazione',
			'all_items'         => 'All Applicazione',
			'view_item '        => 'View Applicazione',
			'parent_item'       => 'Parent Applicazione',
			'parent_item_colon' => 'Parent Applicazione:',
			'edit_item'         => 'Edit Applicazione',
			'update_item'       => 'Update Applicazione',
			'add_new_item'      => 'Add New Applicazione',
			'new_item_name'     => 'New Applicazione Name',
			'menu_name'         => 'Applicazione',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'energia_termica_in_ingreso', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Energia termica in ingresso ',
			'singular_name'     => 'Energia termica in ingresso ',
			'search_items'      => 'Search Energia termica in ingresso ',
			'all_items'         => 'All Energia termica in ingresso ',
			'view_item '        => 'View Energia termica in ingresso ',
			'parent_item'       => 'Parent Energia termica in ingresso ',
			'parent_item_colon' => 'Parent Energia termica in ingresso :',
			'edit_item'         => 'Edit Energia termica in ingresso ',
			'update_item'       => 'Update Energia termica in ingresso ',
			'add_new_item'      => 'Add New Energia termica in ingresso ',
			'new_item_name'     => 'New Energia termica in ingresso  Name',
			'menu_name'         => 'Energia termica in ingresso ',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'energia_elettrica_erogata', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Energia elettrica erogata ',
			'singular_name'     => 'Energia elettrica erogata ',
			'search_items'      => 'Search Energia elettrica erogata ',
			'all_items'         => 'All Energia elettrica erogata ',
			'view_item '        => 'View Energia elettrica erogata ',
			'parent_item'       => 'Parent Energia elettrica erogata ',
			'parent_item_colon' => 'Parent Energia elettrica erogata :',
			'edit_item'         => 'Edit Energia elettrica erogata ',
			'update_item'       => 'Update Energia elettrica erogata ',
			'add_new_item'      => 'Add New Energia elettrica erogata ',
			'new_item_name'     => 'New Energia elettrica erogata  Name',
			'menu_name'         => 'Energia elettrica erogata ',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'tipo_linea_calda', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Tipo Linea Calda ',
			'singular_name'     => 'Tipo Linea Calda ',
			'search_items'      => 'Search Tipo Linea Calda ',
			'all_items'         => 'All Tipo Linea Calda ',
			'view_item '        => 'View Tipo Linea Calda ',
			'parent_item'       => 'Parent Tipo Linea Calda ',
			'parent_item_colon' => 'Parent Tipo Linea Calda :',
			'edit_item'         => 'Edit Tipo Linea Calda ',
			'update_item'       => 'Update Tipo Linea Calda ',
			'add_new_item'      => 'Add New Tipo Linea Calda ',
			'new_item_name'     => 'New Tipo Linea Calda  Name',
			'menu_name'         => 'Tipo Linea Calda ',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'tipo_linea_freda', [ 'impianti_tipo' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Tipo Linea Fredda ',
			'singular_name'     => 'Tipo Linea Fredda ',
			'search_items'      => 'Search Tipo Linea Fredda ',
			'all_items'         => 'All Tipo Linea Fredda ',
			'view_item '        => 'View Tipo Linea Fredda ',
			'parent_item'       => 'Parent Tipo Linea Fredda ',
			'parent_item_colon' => 'Parent Tipo Linea Fredda :',
			'edit_item'         => 'Edit Tipo Linea Fredda ',
			'update_item'       => 'Update Tipo Linea Fredda ',
			'add_new_item'      => 'Add New Tipo Linea Fredda ',
			'new_item_name'     => 'New Tipo Linea Fredda  Name',
			'menu_name'         => 'Tipo Linea Fredda ',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => false,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
	register_taxonomy( 'referenze_filter', [ 'referenze' ], [
		'label'             => '',
		// определяется параметром $labels->name
		'labels'            => [
			'name'              => 'Filter',
			'singular_name'     => 'Filter',
			'search_items'      => 'Search Filter',
			'all_items'         => 'All Filter',
			'view_item '        => 'View Filter',
			'parent_item'       => 'Parent Filter',
			'parent_item_colon' => 'Parent Filter:',
			'edit_item'         => 'Edit Filter',
			'update_item'       => 'Update Filter',
			'add_new_item'      => 'Add New Filter',
			'new_item_name'     => 'New Filter Name',
			'menu_name'         => 'Filter',
		],
		'description'       => '',
		// описание таксономии
		'public'            => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'      => true,
		'rewrite'           => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'      => array(),
		'meta_box_cb'       => null,
		// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => true,
		// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'      => null,
		// добавить в REST API
		'rest_base'         => null,
		// $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}
