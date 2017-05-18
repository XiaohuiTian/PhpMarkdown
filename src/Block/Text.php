<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/18
 * Time: 17:14
 */

namespace src\Block;


/**
 * Class Text
 *
 *
 * @package src\Block
 */
class Text extends ABlock implements IBlock
{
	private $content = "";

	public function __construct($content)
	{
		$this->content = $content;

		parent::__construct();
	}

	public function assemble()
	{
		$this->code = $this->content;
	}

	public function parser()
	{
		$this->parser = <<<ABC
<p>
{$this->content}
</p>
ABC;
	}
}