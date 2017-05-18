 <?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/18
 * Time: 16:04
 */

namespace src\Block;


/**
 * Class Code
 *
 *
 * @package src\Block
 */
class Code extends ABlock implements IBlock
{
	private $content = "";

	public function __construct($codes)
	{
		$this->content = $codes;

		parent::__construct();
	}

	public function assemble()
	{
		$this->code = <<<ABC
'
{$this->code}
'
ABC;

	}

	public function parser()
	{
		$this->parser = <<<ABC
<code>
{$this->content}
</code>
ABC;
	}
}