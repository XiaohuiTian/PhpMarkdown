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
class H3 extends ABlock implements IBlock
{
	private $title = "";

	public function __construct($title)
	{
		$this->title = $title;
		parent::__construct();
		$this->totitles(["h3" => $title]);
	}


	public function parser()
	{
		$this->parser = <<<ABC
<h3 id="h3_{$this->title}">{$this->title}</h3>
ABC;
	}

	public function assemble()
	{
		$this->code = "##".$this->space.$this->title;
	}
}