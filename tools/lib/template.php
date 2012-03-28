<?php

/**
Base template used by new-project to know what modules to install where & where to get them from
Structure is likely to change at some point
*/

$template = array(
	'sapphire' => new Github(array(
		'user' => 'silverstripe', 
		'project' => 'sapphire', 
		'branch' => SAPPHIRE_CURRENT_BRANCH
	)),
	'cms' => new Github(array(
		'user' => 'silverstripe', 
		'project' => 'silverstripe-cms',
		'branch' => SAPPHIRE_CURRENT_BRANCH
	)),
	'themes/simple' => new GithubSparse(array(
		'user' => 'silverstripe-themes', 
		'project' => 'silverstripe-simple',
		'branch' => SAPPHIRE_CURRENT_BRANCH,
		'subdir' => ''
	))
);

