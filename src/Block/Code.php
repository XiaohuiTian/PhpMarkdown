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
	private $language = "";
	private $content = "";

	public function __construct($language,$codes)
	{
		$this->content = $codes;
		$this->language = $language;

		parent::__construct();
	}

	public function assemble()
	{
		$this->code = <<<ABC
<pre>
```{$this->language}
{$this->content}
```
</pre>
ABC;

	}

	public function parser()
	{
		$this->parser = <<<ABC
<pre>
{$this->content}
</pre>
ABC;
	}
}