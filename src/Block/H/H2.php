<?php
namespace src\Block\H;
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 10:45
 */
use src\Block\ABlock;
use src\Block\IBlock;

/**
 * Class Title
 *
 *
 */
class H2 extends ABlock implements IBlock
{
	private $title = "";

	public function __construct($title)
	{
		$this->title = $title;
		parent::__construct();
	}

	public function parser()
	{
		$this->parser = <<<ABC
<h2>{$this->title}</h2>
ABC;
	}

	public function assemble()
	{
		$this->code = "##".$this->space.$this->title;
	}
}