<?php

/** 
 * Plugin Name: Footnotes
 * Description: Convert ((footnotes)) to HTML footnotes.
 */

if (!function_exists('footnotes_add_footnotes')) {
	function footnotes_add_footnotes($content)
	{
		// (?: ) est un non-capturing group qui renvoie le résultat
		//       des jetons sans le capturer.
		// \(\(  renvoie 2 parenthèses ouvrantes.
		// ( )   est un capturing group qui permet de combiner
		//       des jetons et de former un groupe.
		// .*    renvoie n'importe quel caractère 0 ou plusieurs fois.
		// ?     rend le quantificateur précédent paresseux, c'est-à-dire
		//       qu'il renvoie le moins de caractères possible. 
		$fn_regex = '/(?:\(\()(.*?)(?:\)\))/';

		// Stocke le résultat de la recherche dans le tableau $matches.
		preg_match_all($fn_regex, $content, $matches);

		// Remplace la note par un <a> 
		$content = preg_replace_callback(
			$fn_regex,
			function () {
				// Une variable statique ne perd pas sa valeur lorsque
				// le script appelle la fonction. 
				static $fn_index = 0;
				$fn_index = $fn_index + 1;

				$html =
					'<a class="footnote-ref" href="#footnote-' .
					$fn_index .
					'">' . $fn_index . '</a>';

				return $html;
			},
			$content
		);

		$footnotes_html = '<ul>';

		// $matches est un tableau qui contient 2 groupes : 
		// - le premier contient ((footnote))
		// - le deuxième contient footnote
		foreach ($matches[1] as $i => $fn_content) {
			$fn_index = $i + 1;

			$footnotes_html .=
				"<li id='footnote-$fn_index'>" . $fn_content . '</li>';
		}

		return $content . $footnotes_html;
	}
}

add_filter('the_content', 'footnotes_add_footnotes');
