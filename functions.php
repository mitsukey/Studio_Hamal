<?php
function hamal_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_image_size( 'page_eyecatch',1200,900,true );
    add_image_size( 'banner_square',450,450,true );
    add_image_size( 'tool_icon',50,50,true );
    register_nav_menus( array(
        'main-menu'     => 'メインメニュー',
        'footer-menu'   => 'フッターメニュー',
    ));
}
add_action( 'after_setup_theme','hamal_theme_setup' );

//JS・CSS読込み
function hamal_enqueue_scripts() {
    //WP同梱のjQueryを削除（外部のjQueryを読込）
    if( !is_admin() ){
        wp_deregister_script( 'jquery' );
        }

    //JS読込み
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        array(),
        '3.6.0',
        true);
    wp_enqueue_script(
        'g-nav',
        get_template_directory_uri().'/assets/js/g-nav.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'pageTop',
        get_template_directory_uri().'/assets/js/pageTop.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'chart.js',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js',
        array(),
        '3.5.1'
    );
    wp_enqueue_script(
        'skillChart.js',
        get_template_directory_uri().'/assets/js/skillChart.js',
        array(),
        '1.0.0'
    );


    //CSS読込み
    wp_enqueue_style(
        'destyle',
        get_template_directory_uri().'/assets/css/destyle.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/style.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_style(
        'template-parts',
        get_template_directory_uri().'/assets/css/template-parts.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts','hamal_enqueue_scripts' );

//ウィジェットエリア定義
function hamal_widgets_init() {
    //サイドバーのウィジェットエリア追加
    register_sidebar(
        array(
            'name'          =>'サイドバー',
            'id'            =>'sidebar-widget-area',
            'description'   =>'投稿・固定ページサイドバー',
            'before_widget' =>'<div id="%1$s" class="%2$s">',
            'after_widget'  =>'</div>'
        )
    );
    //フッターウィジェットエリア追加
    register_sidebars(
		3,
		array(
            'name'          =>'フッター %d',
            'id'            =>'footer-widget-area',
            'description'   =>'フッターサイドバー',
            'before_widget' =>'<div id="%1$s" class="%2$s">',
            'after_widget'  =>'</div>',
		)
	);
}
add_action( 'widgets_init','hamal_widgets_init' );

//ブロックエディター対応
function hamal_block_setup() {
    //ブロック用CSS有効化
    add_theme_support( 'wp-block-styles' );
    //埋込み要素のレスポンシブ対応
    add_theme_support( 'responsive-embeds' );
    //「幅広」「全幅」対応
    add_theme_support( 'align-wide' );
    //カラーパレット設定
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  =>'スカイブルー',
                'slug'  =>'skyblue',
                'color' =>'#00A1C6',
            ),
            array(
                'name'  =>'ライトスカイブルー',
                'slug'  =>'light-skyblue',
                'color' =>'#ECF5F7',
            ),
            array(
                'name'  =>'ライトグレー',
                'slug'  =>'light-gray',
                'color' =>'#F7F6F5',
            ),
            array(
                'name'  =>'グレー',
                'slug'  =>'light-gray',
                'color' =>'#767268',
            ),
            array(
                'name'  =>'ダークグレー',
                'slug'  =>'dark-gray',
                'color' =>'#43413B',
            ),
        )
    );
    //フォントサイズ設定
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'  =>'極小',
                'size'  =>'14',
                'slug'  =>'x-small',
            ),
            array(
                'name'  =>'小',
                'size'  =>'16',
                'slug'  =>'small',
            ),
            array(
                'name'  =>'標準',
                'size'  =>'18',
                'slug'  =>'normal',
            ),
            array(
                'name'  =>'大',
                'size'  =>'24',
                'slug'  =>'large',
            ),
            array(
                'name'  =>'特大',
                'size'  =>'36',
                'slug'  =>'huge',
            ),
        ),
    );
    //エディター側のスタイル適用設定
    add_theme_support( 'editor-styles' );
    //エディタースタイルのCSSパス
    add_editor_style( 'assets/css/editor-styles.css' );
    //Google Fonts読込み
    add_editor_style( 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap' );
}
add_action( 'after_setup_theme','hamal_block_setup' );

//既存ブロックパターン追加・削除
function hamal_remove_block_patterns() {
    //コアのブロックパターンを全削除
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme','hamal_remove_block_patterns' );

//投稿アーカイブページ有効化
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //スラッグ名
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );