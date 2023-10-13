<?php

/**
 * Plugin Name: Smartypants
 */

require_once 'php-smartypants/Michelf/SmartyPantsTypographer.inc.php';

add_filter('the_content', function ($content) {
    // On ajoute Michelf comme préfix au nom de la classe car
    // la librairie utilise cet espace de nom. Voir le fichier
    // SmartyPantsTypographer.php ligne 13.
    $smartypants = new Michelf\SmartyPantsTypographer();
    $content = $smartypants::defaultTransform($content);
    return $content;
});
