<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 17:18
 */

namespace src\Block;


/**
 * Class Italic
 *
 *
 * @package src\Block
 */
class Italic extends ABlock implements IBlock
{
	private $content = "";

	public function __construct($content)
	{
		$this->content = $content;

		parent::__construct();
	}

	public function assemble()
	{
		$this->code = "*".$this->content."*";
	}

	public function parser()
	{
		$this->parser = <<<ABC
<p>
<em>{$this->content}</em>{$this->next}
<p>
ABC;

	}
}