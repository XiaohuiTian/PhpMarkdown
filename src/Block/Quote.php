<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 15:05
 */

namespace src\Block;


/**
 * Class Scrap
 * 引用类
 *
 * @package src\Block
 */
class Quote extends ABlock implements IBlock
{
	private $content = "";

	public function __construct($content)
	{
		$this->content = $content;
		parent::__construct();
	}

	public function assemble()
	{
		$this->code = ">".$this->space.$this->content;
	}

	public function parser()
	{
		$this->parser = <<<ABC
<blockquote>{$this->content}</blockquote>
ABC;
	}
}