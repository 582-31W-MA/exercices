<?php

// Ajoute un nouveau meta box.
function accentcolor_add_meta_box()
{
	add_meta_box(
		'accentcolor_color_meta_box',
		'Accent color',
		'accentcolor_meta_box_html',
		'post'
	);
}

// Définie le HTML de la meta box.
function accentcolor_meta_box_html($post)
{
	// Nous avons besoins de la présente valeur du champs meta afin de
	// de l'afficher dans le tableau de bord.
	$value = get_post_meta($post->ID, 'accentcolor_color_main', true);
	
	// Voir documentation de add_meta_box : le HTML doit être echo
	// et non retourné.
	echo <<<HTML
		<label>
			Label
			<input 
				name="accentcolor_color_main_input" 
				value="$value" 
				type="text"
			>
		</label>
	HTML;
}

// Sauvegarde la valeur de la meta box lorsque le post est enregistré.
function accentcolor_save_meta_box($post_id)
{
	update_post_meta(
		$post_id,
		'accentcolor_color_main',
		$_POST['accentcolor_color_main_input']
	);
}

add_action('add_meta_boxes', 'accentcolor_add_meta_box');
add_action("save_post", "accentcolor_save_meta_box");
