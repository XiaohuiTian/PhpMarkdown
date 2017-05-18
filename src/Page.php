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
 *
 *
 */
class Page
{
	private $codes = "";
	private $parsers = "";

	private $style = "";
	private $html = "";

	public function __construct(ABlock $block)
	{
		$this->codes = $block::$codes;
		$this->parsers = $block::$parsers;
	}

	public function html($style){

		$this->style = Style::$styles[$style];

		$this->header();

		foreach($this->parsers as $parser){

			$this->html .= $parser;
		}

		$this->footer();

		echo $this->html;
	}

	public function code(){

		foreach($this->codes as $code){

			echo $code."<br/>";
		}
	}

	private function header(){

		$this->html .= <<<ABC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link type="text/css" href="{$this->style}"/>
</head>
<body>
ABC;
	}

	private function footer(){

		$this->html .= <<<ABC
</body>
</html>
ABC;

	}
}