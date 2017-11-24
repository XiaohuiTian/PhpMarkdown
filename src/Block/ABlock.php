<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 11:28
 */

namespace src\Block;


/**
 * Class ABlock
 *
 *
 * @package Markdown\src\Block
 */
abstract class ABlock
{
	//mk源码
	protected $code = "";
	//解析的代码
	protected $parser = "";
	//空格常量
	protected $space = ' ';
	//换行
	protected $next = "<br/>";

	//mk 源码聚合
	public static $codes = null;
	//解析源码聚合
	public static $parsers = null;

	public static $titles = null;

	public function __construct()
	{

		$this->assemble();

		self::tocodes();

		$this->parser();

		self::toparsers();
	}

	//把mk源码聚合到一起
	protected function tocodes(){

		self::$codes[] = $this->code;
	}

	//把解析后的html放到一起
	protected function toparsers(){

		self::$parsers[] = $this->parser;
	}
}