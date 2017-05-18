<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 16:05
 */

namespace src\Block;


/**
 * Class Image
 *
 *
 * @package src\Block
 */
class Image extends ABlock implements IBlock
{
	private $alt = "";
	private $image = "";

	public function __construct($alt,$image)
	{
		$this->alt = $alt;
		$this->image = $image;

		parent::__construct();
	}

	public function assemble()
	{
		$this->code = "![{$this->alt}]({$this->image})";
	}

	public function parser()
	{
		$this->parser = <<<ABC
<img alt="{$this->alt}" src="{$this->image}"/>{$this->next}
ABC;
	}
}