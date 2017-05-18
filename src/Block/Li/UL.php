<?php
namespace src\Block\Li;
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 11:40
 */
use src\Block\ABlock;
use src\Block\IBlock;

/**
 * Class UL
 *
 *
 */
class UL extends ABlock implements IBlock
{
	private $list = [];

	public function __construct($list)
	{
		$this->list = $list;
		parent::__construct();
	}


	public function parser()
	{
		$html = "";
		foreach($this->list as $item){

			$html .= "<li>{$item}</li>";
		}
		$this->parser = <<<ABC
<ul>
{$html}
</ul>
ABC;
	}

	public function assemble()
	{
		$code = "";
		foreach($this->list as $item){

			$code .= "*".$this->space.$item."<br/>";
		}
		$this->code = <<<ABC
{$code}
ABC;
	}
}