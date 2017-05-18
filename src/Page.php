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

	public function __construct(ABlock $block)
	{
		$this->codes = $block::$codes;
		$this->parsers = $block::$parsers;
	}

	public function html(){

		foreach($this->parsers as $parser){

			echo $parser;
		}
	}

	public function code(){

		foreach($this->codes as $code){

			echo $code."<br/>";
		}
	}
}