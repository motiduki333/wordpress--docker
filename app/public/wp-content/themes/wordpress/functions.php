<?php

//メニューバー表示

add_theme_support('menus');

register_nav_menus(
	array(
		'place_global'=>'グローバル')
	);

	//ウィジェットエリア表示
	register_sidebar(
		array(
		'before_widget'=>'<div class="widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',

	)
		);
		//アイキャッチ画像

		add_theme_support( 'post-thumbnails' );