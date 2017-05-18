<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 17:07
 */

namespace src\Block;


/**
 * Class Bold
 *
 *
 * @package src\Block
 */
class Bold extends ABlock implements IBlock
{
	private $content = "";
	public function __construct($content)
	{
		$this->content;
		parent::__construct();
	}

	public function assemble()
	{
		$this->code = "**".$this->content."**";
	}

	public function parser()
	{
		$this->parser = <<<ABC
<bold>{$this->content}</bold>
ABC;
	}
}