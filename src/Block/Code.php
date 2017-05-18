<?php
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