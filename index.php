<?php

require __DIR__ . '/vendor/autoload.php';
app()->config('debug', false);
// db()->connect([
// 	// '127.0.0.1', 'test', 'root', ''
// 	'host' => '127.0.0.1',
// 	'username' => 'root',
// 	'password' => '',
// ]);
// db()->autoConnect('127.0.0.1', 'test', 'root', '');

app()->cors();
// try {
// 	db()->drop('dbname')->execute();
// } catch (Exception $e) {
// 	echo $e->getMessage();
// }

app()->get('/', function () {
	response()->page('./welcome.html');
});
app()->get('/notes', function () {
	response()->page('./welcome.html');
});

app()->set404(function () {
	response()->json([
		'hello' => 'word',
		'foo' => 'bar',
	]);
  });
app()->run();

