<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 16:09
 */

namespace src\Block;


/**
 * Class Link
 *
 *
 * @package src\Block
 */
class Link extends ABlock implements IBlock
{
	private $linkText = "";
	private $link = "";

	public function __construct($linkText,$link)
	{
		$this->link = $link;
		$this->linkText = $linkText;

		parent::__construct();
	}

	public function parser()
	{
		$this->parser = <<<ABC
<a href="{$this->link}">{$this->linkText}</a>
ABC;
	}

	public function assemble()
	{
		$this->code = "[{$this->linkText}]({$this->link})";
	}
}