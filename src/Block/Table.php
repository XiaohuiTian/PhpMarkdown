<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/5/17
 * Time: 17:21
 */

namespace src\Block;


/**
 * Class Table
 *
 *
 * @package src\Block
 */
class Table extends ABlock implements IBlock
{
	private $talbe = null;

	public function __construct($talbe)
	{
		$this->talbe = $talbe;

		parent::__construct();
	}

	public function assemble()
	{
		$code = "";
		$keys = array_keys($this->talbe[0]);

		//标题行
		foreach($keys as $key){

			if($code == ""){

				$code .= "|".$this->space.$key.$this->space."|";
			}else{
				$code .= $this->space.$key.$this->space."|";
			}
		}
		$code .= $this->next;

		//下一行
		for($i = 0;$i<count($keys);$i++){

			if($i == 0){

				$code .= "|".$this->space.":--------:".$this->space."|";
			}else{

				$code .= $this->space.":--------:".$this->space."|";
			}
		}
		$code .= $this->next;

		foreach($this->talbe as $tr){

			$trCode = "";
			foreach($tr as $td){

				if($trCode == ""){
					$trCode .= "|".$this->space.$td.$this->space."|";
				}else{
					$trCode .= $this->space.$td.$this->space."|";
				}
			}

			$code .= $trCode.$this->next;
		}

		$this->code = $code;
	}

	public function parser(){

		$html = '<table><thead><tr>';

		//表头
		$keys = array_keys($this->talbe[0]);
		foreach($keys as $key){

			$html .= '<td>'.$key.'</td>';
		}

		$html .= "</tr></thead>";

		//表格内容
		$html .= '<tbody>';
		foreach($this->talbe as $tr){

			$trHtml = "<tr>";
			foreach($tr as $td){

				$trHtml .= "<td>".$td."</td>";
			}
			$trHtml .= "</tr>";

			$html .= $trHtml;
		}

		$html .= "</tbody></table>";

		$this->parser = $html;
	}
}