<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/18
 * Time: 17:31
 */

namespace src;


/**
 * Class Style
 * markdown样式类
 *
 * @package src
 */
class Style
{
	const NORMAL = "default";

	public static $styles = [

		self::NORMAL => "/src/Static/css/default.css"
	];
}