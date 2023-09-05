<?php

return function () {
	$articles = page("articles")->children();

	return [
		"articles" => $articles
	];
};
