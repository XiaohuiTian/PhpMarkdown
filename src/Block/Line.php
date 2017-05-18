<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/18
 * Time: 16:59
 */

namespace src\Block;


/**
 * Class Line
 *
 *
 * @package src\Block
 */
class Line extends ABlock implements IBlock
{
	public function __construct()
	{
		parent::__construct();
	}

	public function assemble()
	{
		$this->code = "***";
	}

	public function parser()
	{
		$this->parser = "<hr/>";
	}
}