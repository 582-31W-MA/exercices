<?php

/** 
 * Plugin Name: Title Balance
 * Description: Balance titles when they are wrapped to avoid widows.
 */

if (!function_exists('balance_title_balance')) {

	function balance_title_balance($title)
	{
		// / /   indique le début et la fin de l'expression
		//
		// \s    renvoie un espace blanc
		//
		// (?= ) est un positive lookahead qui renvoie un groupe suivant 
		//       l'expression principale sans l'inclure dans le résultat
		//
		// [^ ]  est un negated set qui renvoie tous les caractères qui
		//       ne sont pas inclus dans le set
		//
		// *     renvoie 0 ou plus du jeton précédent
		//
		// $     renvoie la fin de la chaine
		$last_space_regex = "/\s(?=[^ ]*$)/";
		$non_breaking_space = "&nbsp;";

		$balanced_title = preg_replace(
			$last_space_regex,
			$non_breaking_space,
			$title
		);

		return $balanced_title;
	}
}

add_filter("the_title", "balance_title_balance");
