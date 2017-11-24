<?php
spl_autoload_register(function($class){
	include $class . '.php';
});

new \src\Block\H\H1("XXX项目接口文档");
new \src\Block\H\H2("会员类接口");
new \src\Block\H\H3("1. 获取会员信息接口");
new \src\Block\Text("接口URL：http://www.bootcss.com/");
new \src\Block\Text("参数：");
new \src\Block\Table([
	[
		"字段名" => "会员编号",
		"变量名" => "memids",
		"类型" => "string",
		"说明" => "会员编号，多个编号用‘,’分割。",
		"可空" => "N",
		"参数样例" => "26,24",
	]
]);
new \src\Block\Text("返回值：");
new \src\Block\Table([
	[
		"字段名" => "会员编号",
		"变量名" => "memid",
		"类型" => "string",
		"说明" => "",
		"可空" => "N",
		"参数样例" => "26",
	],
	[
		"字段名" => "昵称",
		"变量名" => "nickname",
		"类型" => "string",
		"说明" => "",
		"可空" => "N",
		"参数样例" => "李小明",
	],
	[
		"字段名" => "性别",
		"变量名" => "memsex",
		"类型" => "string",
		"说明" => "csdsdeddddddddddddddddddddddddddddddddddddddddddddddddddd",
		"可空" => "Y",
		"参数样例" => "女",
	],
	[
		"字段名" => "年龄",
		"变量名" => "memname",
		"类型" => "int",
		"说明" => "",
		"可空" => "Y",
		"参数样例" => "26",
	],
]);
new \src\Block\H\H2("其它区块代码说明");
new \src\Block\H\H3("2. 引用样式");

$quote = new \src\Block\Quote("欢迎访问bootstrap中文网");

new \src\Block\H\H3("3. 有序和无序列表样式");
new \src\Block\Text("3.1无序列表样式");
$ul = new \src\Block\Li\UL([
	"欢迎访问bootstrap中文网",
	"欢迎访问bootstrap中文网",
	"欢迎访问bootstrap中文网"
]);
new \src\Block\Text("3.2有序列表样式");
$ol = new \src\Block\Li\OL([
	"欢迎访问bootstrap中文网",
	"欢迎访问bootstrap中文网",
	"欢迎访问bootstrap中文网"
]);

new \src\Block\H\H3("4. 代码块样式");
$codeText = '//构造函数示例
public function __construct($talbe)
{
    $this->talbe = $talbe;
    parent::__construct();
}';
$code = new \src\Block\Code("php",$codeText);

new \src\Block\H\H3("5. 图片样式");
$image = new \src\Block\Image("haha tupian","https://www.baidu.com/img/bd_logo1.png");


new \src\Block\H\H3("6. 斜体样式");
$italic = new \src\Block\Italic("欢迎访问bootstrap中文网");

new \src\Block\H\H3("7. 加粗样式");
$bold = new \src\Block\Bold("欢迎访问bootstrap中文网");

new \src\Block\H\H3("8. 分割线样式");
$line = new \src\Block\Line();

new \src\Block\H\H3("9. 链接样式");
$link = new \src\Block\Link("欢迎访问bootstrap中文网","http://www.bootcss.com/");

$page = new \src\Page($link);
$page->html(\src\Style::NORMAL);//显示html
//$page->code();                  //显示markdown编码