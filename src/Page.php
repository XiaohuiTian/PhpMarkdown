<?php
namespace src;
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/16
 * Time: 17:50
 */
use src\Block\ABlock;

/**
 * Class page
 * 文档页面构造器
 */
class Page
{
	private $codes = "";
	private $parsers = "";

	private $style = "";
	private $html = "";
	private $navigation = "";

	//标题
	private $title = "接口文档";

	public function __construct(ABlock $block)
	{
		$this->codes = $block::$codes;
		$this->parsers = $block::$parsers;
		$this->navigation = $block::$titles;
	}

	/**
	 * 生成页面公共内容
	 * @param $style
	 * @param $docTitle
	 * @author  tianxh.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	public function html($style,$docTitle){

		$this->style = Style::$styles[$style];
		$this->title = $docTitle;
		$this->header();

		//添加左侧的导航栏
		$this->titles();

		$this->content();

		$this->footer();

		echo $this->html;
	}


	public function code(){

		foreach($this->codes as $code){

			echo $code."<br/>";
		}
	}

	/**
	 * 添加页面头
	 * @author  tianxh.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	private function header(){

		$this->html .= <<<ABC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$this->title}</title>
	<link rel="stylesheet" type="text/css" href="{$this->style}"/>
</head>
<body>
ABC;
	}

	/**
	 * 添加左侧导航栏
	 * @author  tianxh.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	private function titles(){

		$this->html .= "<div class='leftNav'>";

		foreach($this->navigation as $navigation){

			foreach($navigation as $key => $title){

				$this->html .= "<div class='{$key}'><a href='#{$key}_{$title}'>{$title}</a></div>";
			}
		}

		$this->html .= "</div>";
	}

	/**
	 * 添加右侧接口内容
	 * @author  tianxh.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	private function content(){

		//添加右侧的内容栏
		$this->html .= "<div class='rightCon'>";
		foreach($this->parsers as $parser){

			$this->html .= $parser;
		}
		$this->html .= "</div>";
	}

	/**
	 * 添加html尾
	 * @author  tianxh.
	 * email: tianxh@jpgk.com.cn
	 * QQ:2018997757
	 */
	private function footer(){

		$this->html .= <<<ABC
</body>
</html>
ABC;

	}
}