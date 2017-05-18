<?php
spl_autoload_register(function($class){
	include $class . '.php';
});

new \src\Block\H\H1("hello world!");
new \src\Block\H\H2("hello h2!");
new \src\Block\H\H3("hello h3!");
$ul = new \src\Block\Li\UL([
	"abc",
	"dec",
	"hahac"
]);
$table = new \src\Block\Table([
	[
		"姓名" => "田笑辉",
		"性别" => "男",
		"年龄" => "26",
	],
	[
		"姓名" => "吴昊",
		"性别" => "女",
		"年龄" => "24",
	],
]);
$page = new \src\Page($table);
$page->html();
//$page->code();