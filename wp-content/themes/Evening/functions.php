<?php

/* Activation images à la une*/
add_theme_support('post-thumbnails'); /*ajouter la fonctionnalité d'image à la une lors de la création d'un projet*/
add_image_size('img_liste', 270,220, array('center', 'top'));
add_image_size('home', 370,220, true); /*crop libre*/

/*Activation menus*/ 
register_nav_menus();


add_action( 'init', 'create_recipes' );
function create_recipes() {
	register_post_type('recette',
	array(
		'labels' => array(
			'name' => __('Recettes'), // Nom du contenu au pluriel
			'singular_name' => __('Recette') 
		),
		'public' => true, // afficher le contenu pour tout le monde
		'supports'=> array('title','editor', 'thumbnail', 'excerpt'), // éléments accepté par le type de contenu, ici les par défaut
		'has_archive' => false // active ou non l'archive
		)
	);

	/* Custom taxonomy*/
	// équivalent des catégories pour les types de contenus personnalisées
	register_taxonomy(
		'invites',// Dénomination de la taxonomie
		'recette',// Type de contenu auquel sera relié la taxonomie
		array(
			'label' => __('Invités'),
			'hierarchical' =>true,
			)
		);
	}
	// pouvoir visualiser l'image ajoutée via prposé directement dans image à la une dans le back

	add_action('acf/save_post','tsm_save_image', 10);
	function tsm_save_image($post_id){
		if(!(is_user_logged_in() || current_user_can('publish_posts'))){
			return;
		}
		if(empty($_POST['acf'])){
			return;
		}
		$image = $_POST['acf']['field_56166735517a7']; //dans le backoffice, identifiant, récupérer la clé via acf fields keys
		if (empty($image)){
			return;
		}
		add_post_meta($post_id,'_thumbnail_id',$image);
	}




