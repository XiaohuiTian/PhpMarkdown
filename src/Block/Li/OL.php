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
class OL extends ABlock implements IBlock
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
<ol>
{$html}
</ol>
ABC;
	}

	public function assemble()
	{
		$code = "";
		for($i = 1;$i<count($this->list);$i++){

			$code .= $i.$this->space.$this->list[$i]."<br/>";
		}
		$this->code = <<<ABC
{$code}
ABC;
	}
}