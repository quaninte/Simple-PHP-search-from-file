<?php
require 'functions.php';

$names = array(
	'Toan', 'Tieng Viet', 'Van', 'SQA', 'Java', 'PHP', 'SQL', 'C-Sharp', 'CakePHP', 'Symfony'
);

$authors = array(
	'John', 'Doe', 'David', 'Obama', 'Ozawa',
);

$publishers = array(
	'Sams', 'Wiley', 'Bad Boys', 'Giáo Dục',
);

$years = array(
	1990, 1985, 1954, 1967, 2011, 2012
);

$prices = array(
	20, 40, 45, 67, 90, 23
);

$books = array();
foreach ($names as $name) {
	$books[] = array(
		'name' => $name,
		'author' => selectRandom($authors),
		'publisher' => selectRandom($publishers),
		'year' => selectRandom($years),
		'price' => selectRandom($prices),
	);
}

$code = json_encode($books);
file_put_contents('data.json', $code)

?>