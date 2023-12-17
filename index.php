<?php
// Set configuration settings
$config = array(
	'gzip'	=> true,
	'ext'	=> '.html',
	'cache'	=> 'cache/',
	'root'	=> 'template/'
);
// Initializes the template class
require('../source/template.php');
$template = new template($config);
// Basic var example
$var = 'Hello World!';
$template->vars(array(
	'VAR_1' => $var,
	'VAR_2' => 'Hello World!'
));
// Loop example
$loop = array ('Item 1', 'Item 2', 'Item 3');
foreach ($loop as $row) {
	$template->loop('mysql', array(
		'ROW_TITLE' => $row
	));
}
// True / false example
$template->vars(array(
	'FALSE_VAR' => false,
	'TRUE_VAR'  => 'Hello World!'
));
// Assigns the page title, filename, css, js, and name of combined files
$template->display('Template Class Examples', 'template.html', '../docs/style.css', null, 'example');