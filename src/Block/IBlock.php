<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 11:27
 */

namespace src\Block;


/**
 * Interface IBlock
 * @package Markdown\src\Block
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 */
interface IBlock
{
	//解析
	public function parser();

	//组装
	public function assemble();
}