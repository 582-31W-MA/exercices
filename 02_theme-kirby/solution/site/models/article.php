<?php

class ArticlePage extends Page
{
	public function title()
	{
		return parent::title()->smartypants();
	}

	public  function text()
	{
		return parent::text()->smartypants()->widont();
	}
}
