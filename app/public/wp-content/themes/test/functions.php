<?php

add_theme_support('post-thumbnails');

add_theme_support('automatic-feed-links');

if(! isset($content_width))$content_width=660;

add_editor_style();

function custom_menu($atts,$content=null){
	extract(shortcode_atts(array(
'menu'=>'',
'container'=>'div',
'nenu_class'=>'menu',
'echo'=>true,
'fallback_cb'=>'wp_page_menu',
'depth'=>0)
	));
}


function cpt_register_news(){
	$labels=[
		"singular_name"=>"news",
		"edit_item"=>"news",
		];

		$args=[
			"label"=>"新着情報",
			"labels"=>$labels,
			"description"=>'',
			"public"=>true,
			"show_in_rest"=>true,
			"rest_base"=>true,
			"rest_controller_class"=>"wp_REST_Posts_Controller",
			"has_archive"=>true,
			"delete_whth_user"=>false,
			"execlude_from_sarch"=>false,
			"map_meta_cap"=>true,
			"hierachical"=>true,
			"rewrite"=>["slug"=>"news","whth_front"=>true],
			"query_var"=>true,
			"menu_position"=>5,
			"supports"=>["title","editor","thumbnail"],
			
			];
			register_post_type("new",$args);

}

add_action('init','cpt_register_news');