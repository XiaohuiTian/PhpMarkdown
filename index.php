<?php
spl_autoload_register(function($class){
	include $class . '.php';
});

new \src\Block\H\H1("德克士项目接口文档");
new \src\Block\H\H2("会员类接口");
new \src\Block\H\H3("获取会员信息接口");
new \src\Block\Text("接口URL：http://server/thirdorderapi/thirdorder/getshop");
new \src\Block\Text("参数：");
new \src\Block\Table([
	[
		"字段名" => "门店编号",
		"变量名" => "storeids",
		"类型" => "string",
		"说明" => "门店编号，多个编号用‘,’分割",
		"可空" => "N",
		"参数样例" => "26,24",
	],
	[
		"字段名" => "品牌编号",
		"变量名" => "bid",
		"类型" => "string",
		"说明" => "",
		"可空" => "Y",
		"参数样例" => "26",
	],
]);
new \src\Block\Text("返回值：");
new \src\Block\Table([
	[
		"字段名" => "门店编号",
		"变量名" => "storeids",
		"类型" => "string",
		"说明" => "门店编号，多个编号用‘,’分割",
		"可空" => "N",
		"参数样例" => "26,24",
	],
	[
		"字段名" => "品牌编号",
		"变量名" => "bid",
		"类型" => "string",
		"说明" => "",
		"可空" => "Y",
		"参数样例" => "26",
	],
]);
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

$codeText = '
public function __construct($talbe)
{
    $this->talbe = $talbe;
    parent::__construct();
}';

$code = new \src\Block\Code($codeText);

$line = new \src\Block\Line();

$image = new \src\Block\Image("haha tupian","https://www.baidu.com/img/bd_logo1.png");

$link = new \src\Block\Link("百度","https://www.baidu.com/img/bd_logo1.png");

$quote = new \src\Block\Quote("baidu.com");

$italic = new \src\Block\Italic("www.baidu.com");

$bold = new \src\Block\Bold("www.bing.com");

$ol = new \src\Block\Li\OL([
	"nihao",
	"tahao"
]);


$page = new \src\Page($ol);
$page->html(\src\Style::NORMAL);
//$page->code();